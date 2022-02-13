@extends('header.header')

@section('container')

{{-- <section class="h-100 h-custom" style="background-color: #eee;> --}}
  <div class="container py-5 h-100" style="background-color: #eee;">
      <div class="row d-flex justify-content-center align-items-center h-100">
  
        @auth
        <div class="container w-60">
          <table class="table">
            
            <thead>
              <tr>
                <th scope="cols" class="text-center">Author</th>
                <th scope="cols" class="text-center">Title</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($ebook as $ebook)
                  <tr>
                    <td>{{ $ebook->author }}</td>
                    <td><a href="/ebook/{{ $ebook->ebook_id }}">{{ $ebook->title }}</a></td>
                  </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      @else
        <div class="text-center">

          <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        
            <main role="main" class="inner cover" style="padding:10rem 0rem 10rem 0rem">
              <h1 class="cover-heading">Amazing E-Book</h1>
              <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
              <p class="lead">
                <a href="/login" class="btn btn-lg btn-secondary">Login</a>
                <a href="/register" class="btn btn-lg btn-secondary">Register</a>
              </p>
            </main>
        
          
          </div>
        
        </div>

      @endauth
      
      </div>
  </div>            


@endsection