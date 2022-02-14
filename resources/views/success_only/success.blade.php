@extends('header.header')

@section('container')

<body style="text-align: center;">
    <div class="card" style="background: white; padding: 70px; border-radius: 4px; box-shadow: 0 2px 3px #C8D0D8; display: inline-block; margin: 0 auto">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark" style="color: #9ABC66; font-size: 100px; line-height: 200px; margin-left: -15px">✓</i>
    </div>
      <h1 style="color: black; font-weight: 900; font-size: 40px; margin-bottom: 10px">{{__("Success") }}</h1> 
      <a style="color: #404F5E; font-size: 20px; margin: 0;" href="/">{{__("Click here to return to Homepage") }}</a>
    </div>
  </body>

@endsection