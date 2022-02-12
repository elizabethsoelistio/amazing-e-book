<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
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
