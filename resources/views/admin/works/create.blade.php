@extends('layouts.admin')
@section('content')

<h2 class="text-center p-3">Crea Nuova Opera</h2>

<div class="w-50 mx-auto py-2">
  <form method="POST" action="{{ route('admin.works.store') }}" enctype="multipart/form-data">

    @csrf

      <div class="form-group mb-3">
        <label for="image">Immagine:</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>

      <div class="form-group mb-3">
        <label for="title">Title:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
      </div>

      <div class="form-group py-3">
        @foreach ($categories as $category)
          <div class="d-inline-block m-2">
            <label for="category_{{$category->id}}">{{$category->name}}</label>
            <input type="checkbox" id="category_{{$category->id}}" name="categories[]" value="{{$category->id}}">
          </div>       
        @endforeach
      </div>

      <div class="form-group py-3">
        <label for="note">Descrizione</label>
        <textarea class="form-control" name="note" id="note"></textarea>
        @error('note')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary my-3">Crea</button>
</form>
</div>

@endsection