@extends('layouts.admin')
@section('content')

<h1 class="d-inline-block">create</h1>

<form>

    <div class="form-group py-3">
      <label for="nickname">Nickname</label>
      <input type="text" id="nickname" name="nickname">
    </div>

    <div class="form-group py-3">
      <label for="birth_date">birth date</label>
      <input type="date" id="birth_date" name="birth_date">
    </div>

    <div class="form-group py-3">
      <h5 class="d-inline pe-4">Gender :</h5>
      <label for="html">Male</label>
      <input class="me-2" type="radio" id="male" name="male" value="male">

      <label for="female">Female</label>
      <input class="me-2" type="radio" id="female" name="female" value="female">

      <label for="not_binary">Not binary</label>
      <input class="me-2" type="radio" id="not_binary" name="not_binary" value="not_binary">
    </div>

    <div class="form-group py-3">
      <label for="photo">photo</label>
      <input type="file" id="photo" name="photo">
    </div>

    <div class="form-group py-3">
      <label for="biography">biography</label>
      <textarea name="biography" id="biography"></textarea>
    </div>

    <div class="form-group py-3">
      <label for="nationality">Nazionalità</label>
      <select name="nationality" id="nationality">
        <option value="it">Italia</option>
        <option value="en">Inghilterra</option>
        <option value="de">Germania</option>
      </select>

      <label class="ps-3" for="based">Based in</label>
      <input type="text" id="based" name="based">
    </div>

    <div class="form-group py-3">
      <label for="business_email">Business Email</label>
      <input type="email" id="business_email" name="business_email">
    </div>

    <div class="form-group">
      <label for="instagram">Instagram</label>
      <input type="text" id="instagram" name="instagram">
    </div>

    <div class="form-group">
      <label for="facebook">Facebook</label>
      <input type="text" id="facebook" name="facebook">
    </div>

    <div class="form-group">
      <label for="linkedin">Linkedin</label>
      <input type="text" id="linkedin" name="linkedin">
    </div>

    <button type="submit" class="btn btn-primary my-3">Submit</button>
  </form>
@endsection