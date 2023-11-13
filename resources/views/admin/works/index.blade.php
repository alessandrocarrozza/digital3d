@extends('layouts.admin')
@section('content')
<h1>work index</h1>
<a href="{{ route('admin.works.create')}}"
    class="btn btn-primary @if (Route::currentRouteName() == 'admin.works.create') active @endif" aria-current="page">
    Nuova opera
</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
        <th scope="col">Categorie</th>
        <th scope="col">Immagine</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($works as $work)
      <tr>
        <td>{{$work->title}}</td>
        <td>{{$work->slug}}</td>
        <td>
          @foreach ($work->categories as $category)
          <span class="my-badge">{{$category->name}}</span>
          @endforeach
        </td>
        <td>
            <img class="work-img" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->slug }}">
        </td>
        <td>
          <div>
              <a href="{{ route('admin.works.edit', $work->slug)}}"
                class="btn btn-warning @if (Route::currentRouteName() == 'admin.works.edit') active @endif" aria-current="page">
                Modifica
              </a>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection