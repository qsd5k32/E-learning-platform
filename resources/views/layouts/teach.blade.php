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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    @yield('links')
</head>
<body class="fixed-sn white-skin">
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect">
                <div class="text-center">
                    <a href="#" class="pl-0"><i class="fas fa-book-open fa-3x"></i></a>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-tachometer-alt"></i>
                            Courses<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="{{ route('createCourse') }}" class="waves-effect">Create course</a></li>
                                <li><a href="{{ route('coursesTeacher') }}" class="waves-effect">My courses</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i
                                    class=" fas fa-th-large"></i>
                            Sections</a></li>

                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>{{ config('app.name', 'Laravel') }}</p>
        </div>

        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            @guest
            @else
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false">
                        <img src="@if(!empty(Auth::user()->detail->photo)) {{ asset('uploads') . '/' . Auth::user()->detail->photo }} @else {{ asset('uploads/profile.svg') }} @endif"
                             class="rounded-top rounded-bottom z-depth-0" style="width:35px; height: 35px"
                             alt="avatar image">
                        {{ Auth::user()->username }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                         aria-labelledby="navbarDropdownMenuLink-55">
                        <a class="dropdown-item" href="{{ url('account/details') }}"><i class="fas fa-user"></i> My
                            account</a>
                        <a class="dropdown-item" href="{{ url('account/setting') }}"><i class="fas fa-cog"></i> Setting</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</a>
                    </div>
                </li>
            @endguest
        </ul>
        <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        @yield('content')

    </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer pt-0 mt-5">

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 2018 Copyright: <a target="_blank"> {{ config('app.name', 'Laravel') }} </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
@yield('scripts')
<script defer>
    $(document).ready(function () {
        @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
        @if(Session::has('warning'))
        toastr.warning('{{ Session::get('warning') }}');
        @endif
        @if(Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @endif
        @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error('{{ $error }}');
        @endforeach
        @endif
    });
</script>
</body>
</html>