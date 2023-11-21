@extends('layouts.admin')
@section('content')

<a href="{{ route('admin.works.create')}}"
    class="btn btn-primary m-3 @if (Route::currentRouteName() == 'admin.works.create') active @endif" aria-current="page">
    Nuova opera
</a>

<h3 class="text-center">Le tue opere</h3>

  <div class="works-container d-flex flex-wrap w-75 m-auto justify-content-center">
    @foreach ($works as $work)
    <div class="m-3 my-card-work">
      <div class="work-img w-100">
        <img class="w-100 h-100" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->slug }}">
      </div>

      <div class="my-badges w-100 text-center">
        <h2 class="pt-2">{{$work->title}}</h2>
        @foreach ($work->categories as $category)
          <span class="my-badge d-inline-block">{{$category->name}}</span>
        @endforeach
      </div>

      <div class="d-flex justify-content-center">
        <a href="{{ route('admin.works.show', $work->slug)}}"
          class="btn btn-primary m-1 @if (Route::currentRouteName() == 'admin.works.show') active @endif" aria-current="page">
          Vedi
        </a>

        <a href="{{ route('admin.works.edit', $work->slug)}}"
          class="btn btn-warning m-1 @if (Route::currentRouteName() == 'admin.works.edit') active @endif" aria-current="page">
          Modifica
        </a>

        <form class="d-inline-block" action="{{ route('admin.works.destroy', $work->slug) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger m-1">Elimina</button>
        </form>
      </div>

    </div>
    @endforeach
  </div>
@endsection