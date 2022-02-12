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

<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="{{ url('image/2.jpeg') }}"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 ">Registration Form</h3>

                <form action="/register" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="first_name" class="form-control form-control-lg" name="first_name" required value="{{ old('first_name') }}" />
                        <label class="form-label" for="first_name">First name</label>
                      </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="middle_name" class="form-control form-control-lg" name="middle_name" />
                        <label class="form-label" for="middle_name">Middle name</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="last_name" class="form-control form-control-lg" name="last_name" required value="{{ old('last_name') }}"/>
                        <label class="form-label" for="last_name">Last name</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <h6 class="mb-0 me-4">Gender: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input
                          class="form-check-input"
                          type="radio"
                          id="femaleGender"
                          value="option1"
                          name="gender_id"
                        />
                        <label class="form-check-label" for="femaleGender" >Female</label>
                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                          <input
                            class="form-check-input"
                            type="radio"
                            id="maleGender"
                            value="option2"
                            name="gender_id"
                          />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
                        
                      </div>
                    </div>

                  <div class="form-outline mb-4">
                    <div class="form-outline">
                      <input type="text" id="email" class="form-control form-control-lg" required value="{{ old('email') }}" name="email" />
                      <label class="form-label" for="email">Email</label>
                    </div>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg" required name="password"  />
                    <label class="form-label" for="password">Password</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
  
                      <select class="select" name="role_id" >
                        <option >Role</option>
                        <option value="member">Member</option>
                        <option value="admin">Admin</option>
                      </select>
  
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label for="user_image" class="col-sm-2 col-form-label">Image: </label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="user_image" name="display_picture_link">
                        </div>
                        @error('user_image')
                            <div class="invalid-feedback d-block text-start">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit">Submit</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>