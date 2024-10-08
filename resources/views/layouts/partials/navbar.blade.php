<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-0 md-1">
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="{{ route('home.popular') }}" class="nav-link px-2 text-white">Popular</a></li>
        <li><a href="{{ route('home.galery') }}" class="nav-link px-2 text-white">Galery</a></li>
        <li><a href="{{ route('home.faq') }}" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="{{ route('home.about') }}" class="nav-link px-2 text-white">About</a></li>
      </ul>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>