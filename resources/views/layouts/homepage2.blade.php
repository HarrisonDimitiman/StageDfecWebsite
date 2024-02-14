<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DFEC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="DFEC" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/aos.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/assets2/css/style.css') }}">

  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          
          
          @if($lcd->logo != null)
            @if($lcd->logo != 'DFEC')
              <img src="{{ secure_asset('storage/'.$lcd->logo) }}" alt="" width="100px" height="100px">
            @else
              <a class="navbar-brand" href="{{ URL::to('/') }}">{{ $lcd->logo }}</a>
            @endif
          @else
            <a class="navbar-brand" href="{{ URL::to('/') }}">DFEC</a>
          @endif
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{ URL::to('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#outreach">Outreach</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#kuya">Kuya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/blogs') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#contact_us">Contact Us</a>
              </li>
            </ul>

            
            @if (Route::has('login'))
                @auth
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item cta-btn">
                        <a class="nav-link" href="{{ URL::to('/home') }}">Home</a>
                        </li>
                    </ul>
                @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item cta-btn">
                      <a class="nav-link" href="{{ route('login') }}">Login/Register</a>
                    </li>
                  </ul>
                @endauth
            @endif
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="slider-wrap">
      <section class="home-slider owl-carousel">

        @if ($slider->isNotEmpty())
          @foreach ($slider as $slider)
            <div class="slider-item" style="background-image: url('{{ secure_asset('storage/'.$slider->image) }}');">
              <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                  <div class="col-md-8 text-center col-sm-12 ">
                    <h1 data-aos="fade-up" style="font-family: 'Rubik Moonrocks', cursive;">{{ $slider->text }}</h1>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="slider-item" style="background-image: url('{{ secure_assetsecure_asset('assets2/img/header1.jpg') }}');">
            <div class="container">
              <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 ">
                  <h1 data-aos="fade-up" style="font-family: 'Rubik Moonrocks', cursive;">THE CHAMPION</h1>
                </div>
              </div>
            </div>
          </div>
        @endif
      </section>
    </div> 

    @yield('content')

    <footer class="site-footer mt-5" role="contentinfo" >
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="{{ $lcd->twitter_link }}" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="{{ $lcd->fb_link }}" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="{{ $lcd->instagram_link }}" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>{{ $lcd->location }}</span></li>
                <li class="d-block"><span class="d-block text-black">Phone:</span><span>{{ $lcd->phone_number }}</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>{{ $lcd->email }}</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="{{ URL::to('/') }}">Home</a></li>
              <li><a href="/#about">About</a></li>
              <li><a href="/#outreach">Outreach</a></li>
              <li><a href="/#kuya">Kuya</a></li>
              <li><a href="{{ URL::to('/blogs') }}">Blog</a></li>
              <li><a href="/#contact_us">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
      </div>
    </footer>
    {{-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div> --}}

    <script src="{{ secure_asset('/assets2/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/popper.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/aos.js') }}"></script>

    <script src="{{ secure_asset('/assets2/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('/assets2/js/magnific-popup-options.js') }}"></script>
    

    <script src="{{ secure_asset('/assets2/js/main.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">      
        var success = "{{ Session::get('success') }}";
        if (success) {
            swal ({
                text: success,
                icon: 'success',
                button: 'OK',
            });
        }
        var deleted = "{{ Session::get('deleted') }}";
        if (deleted) {
            swal ({
                text: deleted,
                icon: 'error',
                button: 'OK',
            });
        }
        var error = "{{ Session::get('error') }}";
        if (error) {
            swal ({
                text: error,
                icon: 'error',
                button: 'OK',
            });
        }
        var danger = "{{ Session::get('flash_danger') }}";
        if (danger) {
            swal ({
                text: danger,
                icon: 'error',
                button: 'OK',
            });
        }
        var warning = "{{ Session::get('warning') }}";
        if (warning) {
            swal ({
                text: warning,
                icon: 'info',
                button: 'OK',
            });
        }
        var errors = $('.alert-errors').length;
        var html_errors = $('#html_errors').val();
        if(errors){
            swal ({
                text: html_errors,
                icon: 'error',
                button: 'OK',
            });
        }
    </script>
    @yield('homepage-scripts')
    
  </body>
</html>