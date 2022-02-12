@extends('header.header')

@section('container')

@if (session()->has('SuccessAddToCart'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('SuccessAddToCart') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<div class="container">
    <h3 class="">E-Book Detail</h3>

    <p style="font-weight: bold">Title: </p>
    <p style="mb-3">{{ $ebook->title }} </p>

    <p style="font-weight: bold">Author: </p>
    <p style="mb-3">{{ $ebook->author }} </p>

    <p style="font-weight: bold">Description: </p>
    <p style="mb-3">{{ $ebook->description }} </p>

    <form action="/add-to-cart/{{ $ebook->ebook_id }}" method="post">
        @csrf
        <button type="submit" class="btn btn-warning">Rent</button>
    </form>

</div>


@endsection
