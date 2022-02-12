<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Amazing E-Book | {{ $title }}</title>
  </head>

    <body>
         {{-- Navigation Bar Header --}}
         <div class="navbar">
            @include('.header.navbar.navigation')
        </div>

        {{-- Body --}}
        <div class="container-home">
            @yield('container')
        </div>
         
        <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        

    </body>

    <footer>
        <p>Amazing E-Book 2022</p>
    </footer>
    
</html>
