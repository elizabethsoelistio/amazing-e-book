
<div class="text-center" style="padding: 2rem">
  
    <header class=" mb-auto text-center">
      <div class="inner">
        <h3 class=""><a href="/">Amazing E-Book</a></h3>
        <nav class="nav justify-content-center">
          <a class="nav-link active" href="/home">Homepage</a>
          <a class="nav-link active" href="/cart">Cart</a>
          <a class="nav-link active" href="/profile">Profile</a>
          @auth
            @if (auth()->user()->role_id === 1)
              <a class="nav-link active" href="/account-maintance">Account Maintance</a>
            @endif
          @endauth
          
          @auth
            <form action="logout" method="POST">
              @csrf
              <button type="submit" class="nav-link active">Logout</button>
            </form> 
          @endauth
          
          
        
          
        </nav>
      </div>
    </header>
 
  </div>