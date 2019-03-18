<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
       <meta name="Description" content="E learning platform">
      <!-- CSRF Token -->
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Scripts -->
      <!-- Fonts -->
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/mdb.min.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


       <style type="text/css">
           html,
           body,
           header,
           .view {
               height: 100%;
           }

           @media (max-width: 740px) {
               html,
               body,
               header,
               .view {
                   height: 1000px;
               }
               .navbar {
                   background-color: #1C2331;
               }
               .navbar:not(.top-nav-collapse) {
                   background: #1C2331!important;
               }
           }

           @media (min-width: 800px) and (max-width: 850px) {
               html,
               body,
               header,
               .view {
                   height: 650px;
               }
           }
           @media (min-width: 800px) and (max-width: 850px) {
               .navbar {
                   background-color: #1C2331;
               }
               .navbar:not(.top-nav-collapse) {
                   background: #1C2331!important;
               }
           }
           .navbar {
               background-color: #1C2331;
           }

       </style>
       @yield('links')
   </head>
   <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
         aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
         <ul class="navbar-nav mr-auto">
            @guest
              <li class="nav-item">
               <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Our team</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
            </li>
            @else
              <!-- some links  -->
            @endguest
         </ul>

         <ul class="navbar-nav ml-auto nav-flex-icons">
          @guest
            <li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>



          @else
                 <li class="nav-item">
                     <a class="nav-link waves-effect waves-light" href="{{ route('myCourses') }}">My courses</a>
                 </li>
                 <li class="nav-item avatar dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                         <img src="@if(!empty(Auth::user()->detail->photo)) {{ asset('uploads') . '/' . Auth::user()->detail->photo }} @else {{ asset('uploads/profile.svg') }} @endif" class="rounded-top rounded-bottom z-depth-0" style="width:35px; height: 35px" alt="avatar image">
                     </a>
                     <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-55">
                         <a class="dropdown-item" href="{{ url('account/details') }}"><i class="fas fa-user"></i>  My account</a>
                         <a class="dropdown-item" href="{{ url('account/setting') }}"><i class="fas fa-cog"></i>  Setting</a>
                         <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                     </div>
                 </li>
          @endguest

         </ul>
      </div>
        </nav>
      @guest
      @else
          @if(Auth::user()->level == 2)
              <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                  <a class="btn-floating btn-lg red">
                      <i class="fas fa-pencil-alt"></i>
                  </a>

                  <ul class="list-unstyled">
                      <li><a class="btn-floating shadow-none"></a></li>
                      <li><a class="btn-floating shadow-none"></a></li>
                      <li><a class="btn-floating red" href="{{ route('createCourse') }}" title="Create course"><i class="fas fa-plus"></i></a></li>
                      <li><a class="btn-floating blue" href="{{ route('coursesTeacher') }}" title="My courses"><i class="fas fa-book-open"></i></a></li>
                  </ul>
              </div>
          @endif
      @endguest

            @yield('content')
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #6351ce;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href=""> E learn company </a>
    </div>
    <!-- Copyright -->

  </footer>
      <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script defer type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
      <script defer type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script defer type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
      @yield('scripts')
   </body>
</html>