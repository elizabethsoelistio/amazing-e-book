<nav class="navbar navbar-expand-lg navbar-white w-100">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Amazing E-Book</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        {{-- @auth --}}
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cart">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>

        {{-- @endauth --}}

    </div>
</nav> 