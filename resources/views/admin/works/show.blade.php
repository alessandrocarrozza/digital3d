@extends('layouts.admin')
@section('content')

<h3 class="text-center p-2">Show dell'opera</h3>
<h1 class="text-center">{{$work->title}}</h1>

<div class="w-75 m-auto text-center pb-4">
    <img class="img-show" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->slug }}">
</div>

<div class="my-badges w-100 text-center">
    <h5 class="pt-2">Categorie:</h5>
    @foreach ($work->categories as $category)
      <span class="my-badge d-inline-block">{{$category->name}}</span>
    @endforeach
</div>


<div class="w-75 m-auto py-3">
    <h5>Note:</h5>
    @if($work->note)
    <p>{{$work->note}}</p>
    @else
    <p>Nessuna nota</p>
    @endif   
</div>
@endsection