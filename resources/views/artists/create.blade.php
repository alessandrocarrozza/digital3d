@extends('layouts.admin')
@section('content')

<h1 class="d-inline-block">create</h1>

<form method="POST" action="{{ route('admin.artists.store') }}" enctype="multipart/form-data">

  @csrf

    <div class="form-group py-3">
      <label for="nickname">Nickname</label>
      <input class="@error('nickname') is-invalid @enderror" type="text" id="nickname" name="nickname" value="{{ old('nickname') }}">
      @error('nickname')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group py-3">
      <label for="birth_date">birth date</label>
      <input class="@error('birth_date') is-invalid @enderror" type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
      @error('birth_date')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group py-3">
      <h5 class="d-inline pe-4">Gender :</h5>
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

    <div class="form-group py-3">
      <label for="photo">photo</label>
      <input type="file" id="photo" name="photo" value="{{ old('photo') }}">
      @error('photo')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group py-3">
      <label for="biography">biography</label>
      <textarea name="biography" id="biography" value="{{ old('biography') }}"></textarea>
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
      <input type="text" id="based" name="based" value="{{ old('based') }}">
      @error('based')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group py-3">
      <label for="business_email">Business Email</label>
      <input type="email" id="business_email" name="business_email" value="{{ old('business_email') }}">
      @error('business_email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="instagram">Instagram</label>
      <input type="text" id="instagram" name="instagram" value="{{ old('instagram') }}">
      @error('instagram')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="facebook">Facebook</label>
      <input type="text" id="facebook" name="facebook" value="{{ old('facebook') }}">
      @error('facebook')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="linkedin">Linkedin</label>
      <input type="text" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
      @error('linkedin')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary my-3">Submit</button>
  </form>
@endsection