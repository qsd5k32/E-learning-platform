@extends('layouts.app')

@section('content')
<section class="view intro-2">
    <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">

            <!--Grid row-->
            <div class="row  pt-5 mt-3">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">

                            <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                                <strong>{{ __('Register') }}</strong>
                            </h2>
                            <hr>

                            <!--Grid row-->
                            <div class="row mt-5">

                                <!--Grid column-->
                                <div class="col-md-6 ml-lg-5 ml-md-3">

                                    <!--Grid row-->
                                    <div class="row pb-4">
                                        <div class="col-2 col-lg-1">
                                            <i class="fas fa-university indigo-text fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <h4 class="font-weight-bold mb-4">
                                                <strong>Safety</strong>
                                            </h4>
                                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                                minima assumenda deleniti hic.</p>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row pb-4">
                                        <div class="col-2 col-lg-1">
                                            <i class="fas fa-desktop deep-purple-text fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <h4 class="font-weight-bold mb-4">
                                                <strong>Technology</strong>
                                            </h4>
                                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                                minima assumenda deleniti hic.</p>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row pb-4">
                                        <div class="col-2 col-lg-1">
                                            <i class="fas fa-money-bill-alt purple-text fa-lg"></i>
                                        </div>
                                        <div class="col-10">
                                            <h4 class="font-weight-bold mb-4">
                                                <strong>Finance</strong>
                                            </h4>
                                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam
                                                minima assumenda deleniti hic.</p>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-5">

                                    <!--Body-->
                                    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                                        @csrf

                                        <div class="md-form">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="username" required class="form-control" name="username" value="{{ old('username') }}">
                                            <label for="username">Username</label>
                                            @if ($errors->has('username'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('username') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-signature prefix"></i>
                                            <input type="text" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required >
                                            <label for="name">{{ __('Name') }}</label>
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-at prefix"></i>
                                            <input type="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                                            <label for="email">{{ __('E-Mail Address') }}</label>
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-lock prefix"></i>
                                            <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >
                                            <label for="password">{{ __('Password') }}</label>
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="md-form">
                                            <i class="fas fa-lock prefix"></i>
                                            <input type="password" id="password-confirm" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required >
                                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        </div>

                                        <div class="form-group mb-3 mt-2">

                                            <button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                                                {{ __('Register') }}
                                            </button>

                                        </div>
                                    </form>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>
</section>

@endsection
