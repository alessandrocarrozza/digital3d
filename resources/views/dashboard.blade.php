@extends('layouts.admin')

@section('content')

<div id="container-dashboard" class="py-4 px-5">
    <div class="h-100">
        <h1>Dashboard</h1> <!-- Questo h1 non sarà flessato -->
        <div class="h-100 d-flex flex-wrap">
            <div class="my-card">
                <div class="content d-flex justify-content-center align-items-center">
                    <h1>Ciao, {{$user->name}}</h1>
                </div>
            </div>
            <div class="my-card">
                <div class="content d-flex justify-content-center align-items-center">
                    <h1 class="text-center">Opere pubblicate: <br> <span class="works-num d-inline-block p-3">{{$worksCount}}</span></h1>
                </div>
            </div>
            <div class="my-big-card">
                <div class="content d-flex justify-content-center align-items-center">
                    <h1>Crea  -  Vedi  -    Modifica  -  Elimina</h1>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
