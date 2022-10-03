<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1><a href="index.html">Delicious</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home') }}">@lang('navigation.home')</a></li>
          <li><a class="nav-link scrollto" href="{{ route('about') }}">{{ __('navigation.about') }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route('menu') }}">{{ __('navigation.menu') }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route('event') }}">{{ __('navigation.events') }}</a></li>
          <li><a class="nav-link scrollto" href="{{ route('contact') }}">{{ __('navigation.contact') }}</a></li>
        </ul>
        <ul>
          <li><a class="btn btn-warning" href="{{ route('language',['language'=> 'en']) }}">EN</a></li>
          <li><a class="btn btn-success" href="{{ route('language',['language'=> 'fr']) }}">FR</a></li>
          <li><a class="btn btn-primary" href="#">PA</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header>
  