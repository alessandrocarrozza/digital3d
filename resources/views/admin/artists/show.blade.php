@extends('layouts.admin')
@section('content')

<h1>show</h1>
<h3>{{$artist->slug}}</h3>
<img src="{{asset('storage/' . $artist->photo)}}" :alt="$artist->slug">
<ul>
    <li>
        @if($artist->gender)
        <h4>{{$artist->gender}}</h4>
        @else
        <h6>Nessun dato</h6>
        @endif
    </li>

    <li>
        @if($artist->nationality)
        <h4>{{$artist->nationality}}</h4>
        @else
        <h6>Nessun dato</h6>
        @endif
    </li>

    <li>
        @if($artist->birth_date)
        <h4>{{$artist->birth_date}}</h4>
        @else
        <h6>Nessun dato</h6>
        @endif
    </li>
</ul>
@endsection