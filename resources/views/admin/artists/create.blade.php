@extends('layouts.admin')
@section('content')

<h2 class="text-center p-3">Crea Profilo Artista</h2>

<div class="w-50 mx-auto py-2">
  <form method="POST" action="{{ route('admin.artists.store') }}" enctype="multipart/form-data">

    @csrf 

    <div class="form-group mb-3">
      <label for="nickname">Nickname:</label>
      <input type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" id="nickname">
      @error('nickname')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="photo">Scegli immagine profilo:</label>
        <input type="file" id="photo" name="photo">
        @error('photo')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
    </div>

    <div class="form-group mb-3">
      <label for="birth_date">Data di nascita:</label>
        <input class="@error('birth_date') is-invalid @enderror" type="date" id="birth_date" name="birth_date">
        @error('birth_date')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
    </div>

    <div class="form-group mb-3">
      <h6 class="d-inline pe-4">Genere:</h6>
        <label for="gender">Male</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="male">
  
        <label for="gender">Female</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="female">
  
        <label for="gender">Not binary</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="not_binary">
        @error('gender')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
    </div>

    <div class="form-group mb-3">
      <label for="biography">Bio:</label>
      <textarea class="form-control" name="biography" id="biography" rows="3"></textarea>      
      @error('biography')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="nationality">Nazionalità:</label>
        <select class="form-control" name="nationality" id="nationality">
            <option value="">Seleziona</option>
          <option value="it">Italia</option>
          <option value="en">Inghilterra</option>
          <option value="de">Germania</option>
        </select>
        @error('nationality')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
    </div>

    <div class="form-group mb-3">
      <label for="based">Sede:</label>
      <input class="form-control" type="text" id="based" name="based">
      @error('based')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group mb-1">
      <label for="based">Instagram:</label>
      <input class="form-control" type="text" id="instagram" name="instagram">
      @error('instagram')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group mb-1">
      <label for="facebook">Facebook:</label>
      <input class="form-control" type="text" id="facebook" name="facebook">
      @error('facebook')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group mb-3">
      <label for="linkedin">Linkedin:</label>
      <input class="form-control" type="text" id="linkedin" name="linkedin">
      @error('linkedin')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>



    <button type="submit" class="btn btn-primary">Invia</button>

  </form>
</div>
@endsection