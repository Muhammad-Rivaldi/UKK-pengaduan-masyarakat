<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SiapLapor!</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/brand/favicon.png')}}" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- Styles -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('css/sb-admin-2.css')}}">
</head>

<body>
  <div id="app">
    <header id="header">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto" data-aos="fade-right">
          <h1 class="text-light"><a href="{{route('landingpage')}}">Siap<span class="text-danger">Lapor!</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav class="navbar navbar-expand-md nav-menu d-none d-lg-block">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <!-- condition page -->
                @if(Auth::user()->roles==1)
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('dashboardmasyarakat') }}">Tulis Pengaduan</a>
                </li>
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('listpengaduan',Auth::user()->nik) }}">pengaduan anda</a>
                </li>
                @elseif(Auth::user()->roles==2)
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('dashboardpetugas') }}">Seluruh Pengaduan</a>
                </li>
                @else
                <li class="nav-item" data-aos="fade-left">
                  <a class="nav-link" href="{{ route('listpengaduanadmin') }}">Seluruh Pengaduan</a>
                </li>
                @endif
                <!-- end condition page -->


                <li class="drop-down" data-aos="fade-left">
                  <a href="#">
                    {{ Auth::user()->name }}
                  </a>
                  <ul>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </li>
                  </ul>
                </li>
                @endguest
              </ul>

            </div>
          </div>
        </nav>
      </div>

      <main class="py-4">
        @yield('content')
      </main>

      <!-- footer -->
      <footer id="footer">

        <div class="footer-top">

          <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">
              <div class="col">
                <h3>Siap<span class="text-danger">Lapor!</span></h3>
              </div>
            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

  </div>
  </header>
</body>
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>
<script src="{{ asset('vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>

</html>