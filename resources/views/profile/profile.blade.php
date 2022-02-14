@extends('header.header')

@section('container')


<section class="h-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="{{ URL::asset(auth()->user()->display_picture_link) }}"
                alt=""
                class="img-fluid"
                style="border-radius: 1rem 0 0 1rem;"
              />
            </div>

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 ">Update Profile</h3>

                <form action="/update-profile" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="first_name" class="form-control form-control-lg @error('first_name') is-invalid
                        @enderror" name="first_name" required value="{{ auth()->user()->first_name }}" autofocus required />
                        <label class="form-label" for="first_name">First Name</label>

                        @error('first_name')
                           {{ $message }} 
                        @enderror

                      </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        
                        @if (auth()->user()->middle_name === null)
                          <input type="text" id="middle_name" class="form-control form-control-lg @error('middle_name') is-invalid @enderror" name="middle_name" value=""/>
                        @else
                          <input type="text" id="middle_name" class="form-control form-control-lg @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ auth()->user()->middle_name }}" />
                        @endif
                        <label class="form-label" for="middle_name">Middle Name</label>
                        
                        <br>
                        @error('middle_name')
                          {{ $message }}
                        @enderror
                        
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="last_name" class="form-control form-control-lg @error('last_name') is-invalid
                        @enderror" name="last_name" required value="{{ auth()->user()->last_name }}"/>
                        <label class="form-label" for="last_name">Last Name</label>
                        <br>
                        @error('last_name')
                          {{ $message }}
                        @enderror
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <h6 class="mb-0 me-4">Gender: </h6>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <label class="form-check-label" for="femaleGender" >Female</label>
                            @if (auth()->user()->gender_id == 1 )
                                <input
                                class="form-check-input"
                                type="radio"
                                id="femaleGender"
                                value="option1"
                                name="gender_id"
                                checked/>
                            @else
                                <input
                                class="form-check-input"
                                type="radio"
                                id="maleGender"
                                value="option2"
                                name="gender_id"
                                />
                            @endif
                          
                          @error('gender_id')
                            {{ $message }}
                          @enderror

                        </div>

                        <div class="form-check form-check-inline mb-0 me-4">
                            <label class="form-check-label" for="maleGender" >Male</label>
                            @if (auth()->user()->gender_id === 2 )
                                <input
                                class="form-check-input"
                                type="radio"
                                id="maleGender"
                                value="option2"
                                name="gender_id"
                                checked/>
                            @else
                                <input
                                class="form-check-input"
                                type="radio"
                                id="femaleGender"
                                value="option1"
                                name="gender_id"
                                />
                            @endif
                          
                            @error('gender_id')
                            {{ $message }}
                            @enderror
                        
                        </div>
                        
                      </div>
                    </div>

                  <div class="form-outline mb-4">
                    <div class="form-outline">
                      <input type="text" id="email" class="form-control form-control-lg @error('email') is-invalid
                      @enderror" required value="{{ auth()->user()->email }}" name="email" />
                      <label class="form-label" for="email">Email</label>

                      @error('email')
                        {{ $message }}
                      @enderror

                    </div>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid
                    @enderror" required name="password" />
                    <label class="form-label" for="password">Password</label>

                    @error('password')
                        {{ $message }}
                    @enderror
                  </div>

                  <div class="row">
                      <fieldset disabled>
                        <div class="col-md-6 mb-4">
                            
                            <select class="select" name="role_id" id="disabledSelect">
                                @if (auth()->user()->role_id == 1)
                                    <option value="member">Member</option>
                                    <option value="admin" selected>Admin</option>
                                @else
                                    <option value="member" selected>Member</option>
                                    <option value="admin">Admin</option>
                                @endif
                            </select>
        
                          </div>
                      </fieldset>
                    
                  </div>


                  <div class="form-group row mb-4">
                    <label for="display_picture_link" class="col-form-label">Display Image: </label>
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

@endsection