@extends('layouts.admin')
@section('content')

<h1>work edit</h1>

<form method="POST" action="{{ route('admin.works.update', ['work' => $work->slug]) }}" enctype="multipart/form-data">

    @csrf
  
      <div class="form-group py-3">
        <label for="image">Immagine</label>
        <input class="@error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{ old('image', $work->image) }}">
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
</form>

@endsection
