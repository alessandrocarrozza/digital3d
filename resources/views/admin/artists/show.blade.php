@extends('layouts.admin')
@section('content')

<div id="container-show-artist" class="text-center py-3">
    <h1 class="m-0">{{$artist->nickname}}</h1>

    @if($artist->photo)
    <img class="artist-photo" src="{{asset('storage/' . $artist->photo)}}" :alt="$artist->slug">
    @else
    <img class="artist-photo" src="{{asset('img/no-photo.webp')}}" :alt="$artist->slug">
    @endif

    <div>
        <h5 class="d-inline-block">Età: </h5>
        @if($artist->birth_date)
        <span>{{$artist->birth_date}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Genere: </h5>
        @if($artist->gender)
        <span>{{$artist->gender}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Bio: </h5>
        @if($artist->biography)
        <span>{{$artist->biography}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Nazione: </h5>
        @if($artist->nationality)
        <span>{{$artist->nationality}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Sede: </h5>
        @if($artist->based)
        <span>{{$artist->based}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Telefono: </h5>
        @if($artist->phone)
        <span>{{$artist->phone}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Business email: </h5>
        @if($artist->business_email)
        <span>{{$artist->business_email}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Instagram: </h5>
        @if($artist->instagram)
        <span>{{$artist->instagram}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Facebook: </h5>
        @if($artist->facebook)
        <span>{{$artist->facebook}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div>
        <h5 class="d-inline-block">Linkedin: </h5>
        @if($artist->linkedin)
        <span>{{$artist->linkedin}}</span>
        @else
        <span>Nessun dato</span>
        @endif    
    </div>

    <div class="d-inline-block">
        <a href="{{ route('admin.artists.edit', $artist->slug)}}"
          class="btn btn-warning m-1 @if (Route::currentRouteName() == 'admin.works.edit') active @endif" aria-current="page">
          Modifica
        </a>
    </div>
    <form class="d-inline-block" action="{{ route('admin.artists.destroy', $artist->slug) }}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger m-1">Elimina</button>
    </form>
</div>

@endsection