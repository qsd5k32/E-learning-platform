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
                    <a href="#" class="pl-0"><img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" class=""></a>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-tachometer-alt"></i>
                            Dashboards<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="{{ route('coursesTeacher') }}" class="waves-effect">My courses</a></li>
                                <li><a href="{{ route('createCourse') }}" class="waves-effect">My courses</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-image"></i> Pages<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../pages/login.html" class="waves-effect">Login</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Profile<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../profile/basic-1.html" class="waves-effect">Basic 1</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fab fa-css3"></i> CSS<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../css/grid.html" class="waves-effect">Grid system</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-th"></i> Components<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../components/buttons.html" class="waves-effect">Buttons</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i> Forms<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Tables<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-map"></i> Maps<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <!-- Simple link -->
                    <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                            Alerts</a></li>

                    <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class=" fas fa-bolt"></i>
                            Modals</a></li>

                    <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class=" fas fa-chart-pie"></i>
                            Charts</a></li>

                    <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class=" far fa-calendar-check"></i>
                            Calendar</a></li>

                    <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
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
            <p>Material Design for Bootstrap</p>
        </div>

        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <span class="badge red">3</span> <i class="fas fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
                        <span>Your campaign is about to end</span>
                        <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Log Out</a>
                    <a class="dropdown-item" href="#">My account</a>
                </div>
            </li>

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
            © 2018 Copyright: <a target="_blank"> Elearn </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    @yield('scripts')
</body>
</html>