
<div class="text-center" style="padding: 2rem">
  
    <header class=" mb-auto text-center">
      <div class="inner">
        <h3 class=""><a href="/">Amazing E-Book</a></h3>
        <nav class="nav justify-content-center">
          <a class="nav-link active" href="/home">{{__('Homepage') }}</a>
          <a class="nav-link active" href="/cart">{{__('Cart') }}</a>
          <a class="nav-link active" href="/profile">{{__('Profile') }}</a>
          
          @auth
            @if (auth()->user()->role_id === 1)
              <a class="nav-link active" href="/account-maintance">{{__('Account Maintance') }}</a>
            @endif
          @endauth
          
          @auth
            <form action="logout" method="POST">
              @csrf
              <button type="submit" class="nav-link active">{{__('Logout') }}</button>
            </form> 
          @endauth

          @if ($current_locale === 'en')
            <a class="nav-link active" href="language/en"> English </a>
            <a class="nav-link active" href="language/id"> Indonesia </a>
          @else
            <a class="nav-link active" href="language/en"> English </a>
            <a class="nav-link active" href="language/id"> Indonesia </a>
          @endif
          
          
        
          
        </nav>
      </div>
    </header>
 
  </div>