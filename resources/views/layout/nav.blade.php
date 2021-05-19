<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toba Tio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('image')}}/restaurant.png" rel="icon">
  <link href="{{asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Damion&family=Laila&family=Open+Sans&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template')}}/assets/css/style.css" rel="stylesheet">

 
</head>

<body>
 
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="/">Toba Tio</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <!-- active -->
          <li><a class="nav-link scrollto" href="/" class="filter-active" >Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="/gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
          @guest
          <li><a class="nav-link scrollto" href="/login"><i class="bi bi-cart4"></i>&nbsp Checkout</a> </li>  
           @else
          <li><a class="nav-link scrollto" href="/checkout/{{ Auth::user()->user_id}}"><i class="bi bi-cart4"></i>&nbsp Checkout</a></li> 
          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      
      </nav><!-- .navbar -->
     
      <!-- <a href="/login" class="book-a-table-btn scrollto d-none d-lg-flex">LOGIN</a> -->
      @guest
                    @if (Route::has('login'))
                                    <a class="nav-link book-a-table-btn scrollto d-none d-lg-flex"  href="{{ route('login') }}">{{ __('Login') }}</a> 
                            @endif
                        @else
                        <nav id="navbar" class="navbar order-last order-lg-0">
                           <li class="dropdown" style="list-style-type: none;"><a href="#"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}  
                                </a>
                             <ul>
                              <li>    
                                <div class="dropdown">
                                    <a class="dropdown" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                              </li>     
                           </ul>
                      </nav>
                        @endguest
 
    </div>
  </header><!-- End Header -->

  <!-- Vendor JS Files -->
  <script src="{{asset('template')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template')}}/assets/js/main.js"></script>
</body>

</html>