@extends('layouts.admin')
@section('content')

<div class="text-center">
    <h1>Profilo Artista</h1>
    <h3>{{$artist->nickname}}</h3>

    @if($artist->photo)
    <img src="{{asset('storage/' . $artist->photo)}}" :alt="$artist->slug">
    @else
    <img src="{{asset('img/no-photo.webp')}}" :alt="$artist->slug">
    @endif

    @if($artist->gender)
            <h4>{{$artist->gender}}</h4>
            @else
            <h6>Nessun dato</h6>
    @endif

    @if($artist->nationality)
            <h4>{{$artist->nationality}}</h4>
            @else
            <h6>Nessun dato</h6>
    @endif

    @if($artist->birth_date)
            <h4>{{$artist->birth_date}}</h4>
            @else
            <h6>Nessun dato</h6>
    @endif
</div>

@endsection