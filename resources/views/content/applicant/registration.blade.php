@extends('layouts/commonMaster')

@section('title', 'Applicant Registration')

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/applicant/registration.css')) }}" />
@endsection

@section('layoutContent')
<main class="applicant shadow-lg bg-white rounded">
  <div>
    <div>
      <h2>Applicant Registration Form</h2>
      <p>Fill in your details...</p>
    </div>
    {{-- Form --}}
    <form action="">
      <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <div class="applicant__inputs">
          <input type="text" class="form-control" name="" id="" placeholder="Firstname"/>
          <input type="text" class="form-control" name="" id="" placeholder="Lastname"/>
        </div>
      </div>
      {{-- Address --}}
      <div class="mb-3">
        <label for="" class="form-label">Address</label>
        <div class="applicant__inputs">
            <input type="text" class="form-control flex-fill" name="" id="" placeholder="Street"/>
            <input type="text" class="form-control flex-fill" name="" id="" placeholder="Barangay"/>
        </div>
        <div class="mt-3 applicant__inputs">
          <input type="text" class="form-control" name="" id="" placeholder="City"/>
          <input type="text" class="form-control" name="" id="" placeholder="Zip Code"/>
        </div>
      </div>
      {{-- Contact --}}
      <div class="mb-3">
        <label for="" class="form-label">Contact</label>
        <div class="applicant__inputs">
          <input type="text" class="form-control" name="" id="" placeholder="Email"/>
          <input type="text" class="form-control" name="" id="" placeholder="Phone"/>
        </div>
      </div>
      {{-- Birthdate --}}
      <div class="mb-3 applicant__inputs applicant__inputs--diff-type">
        <div class="applicant__input__birthdate">
          <label for="" class="form-label">Birthdate</label>
          <input type="date" class="form-control">
        </div>
        <div>
          <label for="" class="form-label">Gender</label>
          <select class="form-select form-select" name="" id="">
            <option selected>Select one</option>
            <option value="">Male</option>
            <option value="">Female</option>
          </select>
        </div>
      </div>
      {{-- Educational Attainment --}}
      <div class="mb-3">
        <label for="" class="form-label">Educational Attainment</label>
        <div class="applicant__inputs">
          <select class="form-select form-select" name="" id="">
            <option selected>Select one</option>
            <option value="">Elementary Graduate</option>
            <option value="">High School Graduate</option>
            <option value="">High School Level</option>
            <option value="">College Graduate </option>
            <option value="">College Level</option>
            <option value="">Vocational</option>
            <option value="">Masteral</option>
            <option value="">Doctorial</option>
          </select>
        </div>
      </div>
      {{-- Job Title --}}
      <div class="mb-3">
        <label for="" class="form-label">Job Title</label>
        <div class="applicant__inputs">
          <select class="form-select form-select" name="" id="">
            <option selected>Select one</option>
            <option value="">Manager</option>
            <option value="">Assistant</option>
          </select>
        </div>
      </div>
      {{-- Years of Experience --}}
      <div class="mb-3">
        <label for="" class="form-label">Years of Experience</label>
        <div class="applicant__inputs">
          <select class="form-select form-select" name="" id="">
            <option selected>Select one</option>
            <option value="">1 - 2 Years</option>
            <option value="">3 - 4 Years</option>
            <option value="">5 - 8 Years</option>
            <option value="">8 - 10 Years</option>
          </select>
        </div>
      </div>
      {{-- Resume/CV --}}
      <div class="mb-3">
        <label for="" class="form-label">Resume/CV</label>
          <div class="mb-3">
            <input type="file" class="form-control" name="" id="" placeholder="">
          </div>
      </div>
      {{-- Form Buttons --}}
      <div class="mt-5 d-flex justify-content-between align-items-center">
        <a href="{{ url('applicant/applicant-registration') }}">Cancel</a>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
  
    </form>
  </div>
</main>

@endsection