@extends('header.header')

@section('container')
<style>
    #intro {
      background-image: url({{ url('image/1.jpeg') }});
      height: 100vh;
    }

    /* Height for devices larger than 576px */
    @media (min-width: 992px) {
      #intro {
        margin-top: 10px;
      }
    }


</style>

<div id="intro" class="bg-image shadow-2-strong">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-10">
            
            <div class="text-light px-4">
                <h1 class="mb-3 text-light">Amazing E-Book</h1>
                <h5 class="mb-4 text-light">To continue your journey, please login into your account!</h5>
                
                <p>If you don't have an account with us yet, please register to continue.</p>

                @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-lg m-2 text-white" role="button">Logout</button>
                </form>
                @else
                <a class="btn btn-outline-light btn-lg m-2 text-white" href="/login" role="button" rel="nofollow" target="_blank">Login</a>
                    
                <a class="btn btn-outline-light btn-lg m-2 text-white" href="/register" target="_blank" role="button">Register</a>
                @endauth


            </div>
        </div>
    </div>
</div> 



@endsection