@extends('header.header')

@section('container')
<style>
    /* Default height for small devices */
    #intro {
      height: 1080px;
      /* Margin to fix overlapping fixed navbar */
      margin-top: 58px;
    }
    @media (max-width: 991px) {
            #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 45px;
        }
    }
  </style>

<div id="intro" class="p-5 text-center bg-image shadow-1-strong"
    style="background-image: url({{ url('image/1.jpeg') }});" ">
    <div class="mask" style="background-color: rgba(241, 229, 229, 0.7);">
        <div class="d-flex justify-content-center align-items-center h-100">
            
            <div class="text-dark px-4">
                <h1 class="mb-3">Amazing E-Book</h1>
                
                <p>To continue your journey, please login into your account!</p>
                <p>If you don't have an account with us yet, please register to continue.</p>

                <a class="btn btn-outline-light btn-lg m-2" href="/login" role="button" rel="nofollow" target="_blank">Login</a>
                    
                <a class="btn btn-outline-light btn-lg m-2" href="/register" target="_blank" role="button">Register</a>


            </div>
        </div>
    </div>
</div>

@endsection