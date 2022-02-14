@extends('header.header')

@section('container')

@if (session()->has('regis_success'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('regis_success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<section class="h-100"style="background-color: #eee; ">
  <div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="{{ url('image/2.jpeg') }}"
                alt="Sample photo"
                class="img-fluid"
                style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 ">{{__("Registration Form") }}</h3>

                <form action="/register" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="first_name" class="form-control form-control-lg" name="first_name" @error('first_name') is-invalid
                        @enderror required value="{{ old('first_name') }}" autofocus required />
                        <label class="form-label" for="first_name">{{__("First Name") }}</label>
                        <br>
                        @error('first_name')
                            {{ $message }}
                        @enderror

                      </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="middle_name" class="form-control form-control-lg @error('middle_name') is-invalid
                        @enderror" name="middle_name" />
                        <label class="form-label" for="middle_name">{{__("Middle Name") }}</label>
                      </div>

                      <br>
                      @error('middle_name')
                        {{ $message }}
                      @enderror

                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="last_name" class="form-control form-control-lg @error('last_name') is-invalid
                        @enderror" name="last_name" required value="{{ old('last_name') }}"/>
                        <label class="form-label" for="last_name">{{__("Last Name") }}</label>
                        
                        <br>
                        @error('last_name')
                            {{ $message }}
                        @enderror

                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <h6 class="mb-0 me-4">{{__("Gender:") }} </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="femaleGender"
                          value="option1"
                          name="gender_id"
                        />
                        <label class="form-check-label" for="femaleGender" >{{__("Female") }}</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="maleGender"
                            value="option2"
                            name="gender_id"
                          />
                          <label class="form-check-label" for="maleGender">{{__("Male") }}</label>
                        </div>

                        <br>
                        @error('gender_id')
                            {{ $message }}
                        @enderror
                        
                      </div>
                    </div>

                  <div class="form-outline mb-4">
                    <div class="form-outline">
                      <input type="text" id="email" class="form-control form-control-lg @error('email') is-invalid
                      @enderror" required value="{{ old('email') }}" name="email" />
                      <label class="form-label" for="email">{{__("Email Address") }}</label>
                    </div>

                    @error('email')
                      {{ $message }}
                    @enderror

                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid
                    @enderror" required name="password"  />
                    <label class="form-label" for="password">{{__("Password") }}</label>

                    <br>
                    @error('password')
                      {{ $message }}
                    @enderror

                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <select class="role_id form-control form-select @error('role_id') is-invalid @enderror" name="role_id"  >
                        <option>{{__("Role") }}</option>
                        <option value="member">{{__("Member") }}</option>
                        <option value="admin">{{__("Admin") }}</option>
                      </select>
                      
                      <br>
                      @error('role_id')
                        {{ $message }}
                      @enderror
  
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="display_picture_link" class="col-sm-2 col-form-label">{{__("Image:") }} </label>
                    <div class="input-group mb-3">
                        
                      <div class="custom-file">
                            <input type="file" class="form-control form-control-sm" id="user_image" name="display_picture_link">
                        </div>
                        
                        @error('display_picture_link')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">{{__("Submit") }}</button>
                  </div>

                  <p style="color: #393f81;">{{__("Already have an account?") }} <a href="/login" style="color: #393f81;">{{__("Login") }}</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection