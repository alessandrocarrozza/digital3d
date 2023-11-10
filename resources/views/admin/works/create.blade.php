@extends('layouts.admin')
@section('content')

<h1>work create</h1>

<form method="POST" action="{{ route('admin.works.store') }}" enctype="multipart/form-data">

    @csrf
  
      <div class="form-group py-3">
        <label for="image">Immagine</label>
        <input type="file" id="image" name="image">
      </div>

      <div class="form-group py-3">
        <label for="title">Title</label>
        <input type="title" id="title" name="title">
      </div>

      <div class="form-group py-3 w-50">
        @foreach ($categories as $category)
          <div class="d-inline-block m-2">
            <label for="{{$category->name}}">{{$category->name}}</label>
            <input type="checkbox" id="{{$category->name}}" name="{{$category->name}}" value="{{$category->name}}">
          </div>       
        @endforeach
      </div>

      <div class="form-group py-3">
        <label for="note">Descrizione</label>
        <textarea name="note" id="note"></textarea>
      </div>

      <button type="submit" class="btn btn-primary my-3">Submit</button>
</form>

@endsection