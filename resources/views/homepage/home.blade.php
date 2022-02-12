@extends('header.header')

@section('container')

  @auth
      <div class="container w-80">
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
                  <td><a href="/book/{{ $ebook->ebook_id }}">{{ $ebook->title }}</a></td>
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

@endsection