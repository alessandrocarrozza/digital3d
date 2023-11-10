@extends('layouts.admin')
@section('content')
<h1>work index</h1>
<a href="{{ route('admin.works.create')}}"
    class="btn btn-primary @if (Route::currentRouteName() == 'admin.works.create') active @endif" aria-current="page">
    Nuova opera
</a>

<div class="mt-3">
    <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
    </ul>
</div>
@endsection