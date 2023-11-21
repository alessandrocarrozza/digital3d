@extends('layouts.admin')
@section('content')
{{-- <h1>work edit</h1> --}}
{{-- <form method="POST" action="{{ route('admin.works.update', ['work' => $work->slug]) }}" enctype="multipart/form-data">

    @csrf
    @method('PUT')
  
      <div class="form-group py-3">
        <label for="image">Immagine</label>
        <img class="work-img" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->slug }}" />
      </div>

      <div class="form-group py-3">
        <label for="title">Title</label>
        <input class="@error('title') is-invalid @enderror" type="title" id="title" name="title" value="{{ old('title', $work->title) }}">
      </div>

      <div class="form-group py-3 w-50">
        @foreach ($categories as $category)
          <div class="d-inline-block m-2">
            <label for="category_{{$category->id}}">{{$category->name}}</label>
            <input {{ in_array($category->id, old('categories', $work->categories->pluck('id')->toArray())) ? 'checked' : '' }} type="checkbox" id="category_{{$category->id}}" name="categories[]" value="{{$category->id}}">
          </div>       
        @endforeach
      </div>

      <div class="form-group py-3">
        <label for="note">Descrizione</label>
        <textarea class="@error('note') is-invalid @enderror" name="note" id="note"></textarea>
      </div>

      <button type="submit" class="btn btn-primary my-3">Submit</button>
</form> --}}

<h2 class="text-center p-3">Modifica Opera</h2>

<div class="w-50 mx-auto py-2">
  <form method="POST" action="{{ route('admin.works.update', ['work' => $work->slug]) }}" enctype="multipart/form-data">

    @csrf
    @method('PUT')

      <div class="form-group mb-3 text-center">
        <label for="image" class="d-block pb-3">Immagine:</label>
        <img class="work-img w-100" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->slug }}" />
      </div>

      <div class="form-group mb-3">
        <label for="title">Title:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title', $work->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>

      <div class="form-group py-3">
        <h6>Categorie:</h6>
        @foreach ($categories as $category)
          <div class="d-inline-block m-2">
            <label for="category_{{$category->id}}">{{$category->name}}</label>
            <input type="checkbox" id="category_{{$category->id}}" name="categories[]" value="{{$category->id}}"
            {{ $work->categories->contains($category->id) ? 'checked' : '' }}>
          </div>       
        @endforeach
      </div>

      <div class="form-group py-3">
        <label for="note">Descrizione</label>
        <textarea class="form-control" name="note" id="note">{{ old('note', $work->note) }}</textarea>
        @error('note')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary my-3">Conferma</button>
</form>
</div>

@endsection
