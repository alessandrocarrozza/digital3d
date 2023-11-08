@extends('layouts.admin')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<h1>show</h1>
<h3>{{$artist->slug}}</h3>
<ul>
    <li>
        <h4>{{$artist->gender}}</h4>
    </li>

    <li>
        <h4>{{$artist->nationality}}</h4>
    </li>

    <li>
        <h4>{{$artist->birth_date}}</h4>
    </li>
</ul>
@endsection