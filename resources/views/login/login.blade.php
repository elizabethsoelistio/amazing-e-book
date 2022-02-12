@extends('header.header')

@section('container')

@if (session()->has('loginError'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
  
          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
          </div>
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
            <form style="width: 23rem;" action="/login" method="POST">
                @csrf
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                
              {{-- Input email --}}
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg />
                <label class="form-label" for="email">Email address</label>

                {{-- @error('email')
                    <div class="invalid-feedback">
                        <p>{{ m }}</p>
                    </div>
                @enderror --}}


              </div>
  
              {{-- input password --}}
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="password">Password</label>
              </div>
  
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>

              <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>
  
            </form>
  
          </div>
  
        </div>

        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ url('image/2.jpeg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>


@endsection
