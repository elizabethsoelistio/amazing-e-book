@extends('header.header')

@section('container')

<section class="h-100 h-custom" style="background-color: #eee;>
  <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
  
        @auth
        <div class="container w-60">
          <table class="table">
            
            <thead>
              <tr>
                <th scope="cols">Author</th>
                <th scope="cols">Title</th>
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
        <div class="">
          <h2>Open your world through books! Find and rent your E-Book here! </h2>
        </div>
        @endauth
      
      </div>
  </div>            
</section>

@endsection