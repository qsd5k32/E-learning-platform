@extends('layouts.app')
@section('content')
    <!-- Intro -->
    <div class="view intro-2"
         style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/93.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="align-items-center mask rgba-stylish-strong h-100 pb-5 pt-5 h-100">

            <!-- Content -->
            <div class="container pt-5">

                <!--Grid row-->
                <div class="row wow fadeIn " style="visibility: visible; animation-name: fadeIn;">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 white-text text-center text-md-left align-self-center">

                        <h1 class="display-4 font-weight-bold">Learn English with us</h1>

                        <hr class="hr-light">

                        <p>
                            <strong>Best &amp; free guide of English technique</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>The most power full courses are here</strong>
                        </p>

                        <a target="_blank" href="{{ route('home') }}"
                           class="btn btn-indigo btn-lg waves-effect waves-light">Start Courses
                            <i class="fas fa-graduation-cap ml-2"></i>
                        </a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mb-4 align-self-center">

                        <!--Card-->
                        <div class="card shadow">

                            <!--Card content-->
                            <div class="text-white card-body">
                                <h3 class="text-center">Register</h3>
                                <!-- Form -->
                                <form method="POST" action="{{ route('register') }}" autocomplete="off">
                                    @csrf

                                    <div class="md-form">
                                        <i class="fas fa-user prefix"></i>
                                        <input type="text" id="username" required class="form-control" name="username"
                                               value="{{ old('username') }}">
                                        <label for="username">Username</label>
                                        @if ($errors->has('username'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('username') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-signature prefix"></i>
                                        <input type="text" id="name"
                                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ old('name') }}" required>
                                        <label for="name">{{ __('Name') }}</label>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-at prefix"></i>
                                        <input type="email" id="email"
                                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" required>
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="password"
                                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password" required>
                                        <label for="password">{{ __('Password') }}</label>
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-lock prefix"></i>
                                        <input type="password" id="password-confirm"
                                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               name="password_confirmation" required>
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                    </div>

                                    <div class="form-group mb-3 mt-2">

                                        <button type="submit"
                                                class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                                            {{ __('Register') }}
                                        </button>

                                    </div>
                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <div class="container">
        <!-- Section: Features v.1 -->
        <div class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold my-5">Why is it so great?</h2>
            <!-- Section description -->
            <p class="lead grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-chart-area fa-3x red-text"></i>
                    <h5 class="font-weight-bold my-4">Analytics</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reprehenderit
                        maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-book fa-3x cyan-text"></i>
                    <h5 class="font-weight-bold my-4">Tutorials</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reprehenderit
                        maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="far fa-comments fa-3x orange-text"></i>
                    <h5 class="font-weight-bold my-4">Support</h5>
                    <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores
                        aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <div class="row mt-4">

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-chart-area fa-3x red-text"></i>
                    <h5 class="font-weight-bold my-4">Analytics</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reprehenderit
                        maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fas fa-book fa-3x cyan-text"></i>
                    <h5 class="font-weight-bold my-4">Tutorials</h5>
                    <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Reprehenderit
                        maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="far fa-comments fa-3x orange-text"></i>
                    <h5 class="font-weight-bold my-4">Support</h5>
                    <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                        maiores
                        aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </div>
        <!-- Timeline -->
        <hr>
        <div class="row">
            <div class="text-center">
                <h2 class="h1-responsive font-weight-bold my-5">How it work</h2>
                <!-- Section description -->
                <p class="lead grey-text w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="col-md-12">
                <div class="timeline-main">
                    <!-- Timeline Wrapper -->
                    <ul class="stepper stepper-vertical timeline timeline-basic pl-0">

                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle primary-color z-depth-1-half"><i class="fas fa-check"
                                                                                     aria-hidden="true"></i></span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content z-depth-1 ml-2 p-4">
                                <h4 class="font-weight-bold">Ut enim ad minim veniam</h4>
                                <p class="text-muted mt-3"><i class="far fa-clock" aria-hidden="true"></i> 11 hours ago
                                    via
                                    Twitter</p>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle warning-color z-depth-1-half"><i class="fas fa-credit-card"
                                                                                     aria-hidden="true"></i></span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content z-depth-1 mr-xl-2 p-4">
                                <h4 class="font-weight-bold">Duis aute irure dolor</h4>
                                <p class=" mt-4 mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                    voluptatem
                                    sequi nesciunt.</p>
                            </div>
                        </li>
                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle danger-color z-depth-1-half"><i class="fas fa-credit-card"
                                                                                    aria-hidden="true"></i></span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content z-depth-1 ml-2 p-4">
                                <h4 class="font-weight-bold">Sed ut nihil unde omnis</h4>
                                <p class="mt-4 mb-0">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                    magnam
                                    aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
                                    ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum
                                    iure
                                    reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                                    illum qui
                                    dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle info-color z-depth-1-half"><i class="far fa-save"
                                                                                  aria-hidden="true"></i></span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content z-depth-1 mr-xl-2 p-4">
                                <h4 class="font-weight-bold"> Quis autem vel eum voluptate</h4>
                                <p class="mt-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi,
                                    id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita
                                    distinctio.</p>
                                <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                    fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                    porro quisquam
                                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                    non numquam
                                    eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                    voluptatem. </p>
                            </div>
                        </li>
                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle success-color z-depth-1-half"><i class="far fa-thumbs-up"
                                                                                     aria-hidden="true"></i></span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content z-depth-1 ml-2 p-4">
                                <h4 class="font-weight-bold">Mussum ipsum cacilds</h4>
                                <p class="mt-4 mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque
                                    nihil impedit
                                    quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est,
                                    omnis dolor
                                    repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                    necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                                    rerum hic
                                    tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                                    consequatur aut
                                    perferendis doloribus asperiores repellat.</p>
                            </div>
                        </li>

                    </ul>
                    <!-- Timeline Wrapper -->
                </div>
            </div>

        </div>
    </div>
    <!-- Timeline -->
    <!-- Section: Features v.1 -->
    <!-- Intro -->
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/addons-pro/timeline.min.css') }}">
    <style>
        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }


        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/

        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=email]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #8EDEF8;
            box-shadow: 0 1px 0 0 #8EDEF8;
        }

        .md-form input[type=text]:focus:not([readonly]) + label,
        .md-form input[type=email]:focus:not([readonly]) + label,
        .md-form input[type=password]:focus:not([readonly]) + label {
            color: #8EDEF8;
        }

        .md-form .form-control {
            color: #fff;
        }
    </style>
@endsection
@section('scripts')

@endsection