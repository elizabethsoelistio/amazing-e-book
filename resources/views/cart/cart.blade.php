@extends('header.header')

@section('container')

@if (session()->has('DeleteSuccess'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('DeleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                    <div class="">
                        <h5 class="mb-3"><a class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Your Book Cart</a></h5>
                        <hr>
        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                            <p class="mb-1">Titles</p>
                            </div>
                        </div>

                        @if (count($cart) != 0)
                            @foreach ($cart as $cart)
                                <div class="card mb-3">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                        
                                            <div class="ms-3">
                                                <h5><a href="/ebook/{{ $cart->ebook->ebook_id }}">{{ $cart->ebook->title }}</a></h5>
                                                <p class="small mb-0">{{ $cart->ebook->author }}</p>
                                            </div>

                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                        
                                            <form action="/delete-book" method="POST">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{ $cart->order_id }}">
                                                <h5 class="mb-0"><button type="submit" class="btn btn-danger">Delete</button></h5>
                                            </form>

                                            
                                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        
                        @else
                            <tr>
                                <h5>Empty cart</h5>
                            </tr>

                        @endif

                    </div>
                    
                    <form action="/delete-all" method="post" class="text-center">
                        @csrf
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>

                </div>
                
            </div>
 
        </div>
    </div>
</section>

@endsection


