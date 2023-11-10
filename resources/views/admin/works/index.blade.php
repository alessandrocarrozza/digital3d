@extends('layouts.admin')
@section('content')
<h1>work index</h1>
<a href="{{ route('admin.works.create')}}"
    class="btn btn-primary @if (Route::currentRouteName() == 'admin.works.create') active @endif" aria-current="page">
    Crea
</a>
@endsection