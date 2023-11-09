@extends('layouts.admin')
@section('content')
<h1>edit</h1>
<form method="POST" action="{{ route('admin.artists.update', ['artist' => $artist->slug]) }}" enctype="multipart/form-data">

    @csrf
    @method('PUT')
  
      <div class="form-group py-3">
        <label for="nickname">Nickname</label>
        <input class="@error('nickname') is-invalid @enderror" type="text" id="nickname" name="nickname" value="{{ old('nickname', $artist->nickname) }}">
        @error('nickname')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <label for="birth_date">birth date</label>
        <input class="@error('birth_date') is-invalid @enderror" type="date" id="birth_date" name="birth_date" value="{{ old('birth_date', $artist->birth_date) }}">
        @error('birth_date')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <h5 class="d-inline pe-4">Gender :</h5>
        <label for="gender">Male</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="male" @if (old('gender', $artist->gender) === 'male') checked @endif>
  
        <label for="gender">Female</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="female" @if (old('gender', $artist->gender) === 'female') checked @endif>
  
        <label for="gender">Not binary</label>
        <input class="me-2" type="radio" id="gender" name="gender" value="not_binary" @if (old('gender', $artist->gender) === 'not_binary') checked @endif>
        @error('gender')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <label for="photo">photo</label>
        <input type="file" id="photo" name="photo" value="{{ old('photo', $artist->photo) }}">
        <img src="{{ asset('storage/' . $artist->photo) }}" alt="{{ $artist->slug }}" />
        @error('photo')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <label for="biography">biography</label>
        <textarea name="biography" id="biography" value="{{ old('biography', $artist->biography) }}"></textarea>
        @error('biography')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <label for="nationality">Nazionalità</label>
        <select name="nationality" id="nationality">
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
  
        <label class="ps-3" for="based">Based in</label>
        <input type="text" id="based" name="based" value="{{ old('based', $artist->based) }}">
        @error('based')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group py-3">
        <label for="business_email">Business Email</label>
        <input type="email" id="business_email" name="business_email" value="{{ old('business_email', $artist->business_email) }}">
        @error('business_email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" id="instagram" name="instagram" value="{{ old('instagram', $artist->instagram) }}">
        @error('instagram')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" id="facebook" name="facebook" value="{{ old('facebook', $artist->facebook) }}">
        @error('facebook')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <div class="form-group">
        <label for="linkedin">Linkedin</label>
        <input type="text" id="linkedin" name="linkedin" value="{{ old('linkedin', $artist->linkedin) }}">
        @error('linkedin')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
  
      <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>

    <form action="{{ route('admin.artists.destroy', $artist->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>elimina</button>
    </form>
@endsection