<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/logo.png')}}" alt="" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="{{ request()->routeIs('home') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li class="{{ request()->routeIs('about') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('about') }}" class="nav-link">About</a></li>
        <li class="{{ request()->routeIs('services') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
        <li class="{{ request()->routeIs('brands') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('brands') }}" class="nav-link">Brand Collaborations</a></li>
        <li class="{{ request()->routeIs('press') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('press') }}" class="nav-link">Press</a></li>
        <li class="{{ request()->routeIs('bookings') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('bookings') }}" class="nav-link">Bookings</a></li>
        <li class="{{ request()->routeIs('contact') ?  'nav-item active' : 'nav-item' }}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
