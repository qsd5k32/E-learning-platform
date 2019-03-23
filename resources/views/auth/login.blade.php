@extends('layouts.app')

@section('content')
    <section class="view intro-2">
        <div class="h-100  d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <div class="form-header info-color">
                                    <h3><i class="fas fa-user mt-2 mb-2"></i> Login</h3>
                                </div>

                                <!--Body-->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

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


                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div>
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                            @endif
                                        </div>
                                    </div>


                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                            type="submit">{{ __('login') }}</button>

                                    <div class="text-center">
                                        <p>Not a member?
                                            <a href="{{ route('register') }}">Register</a>
                                        </p>

                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
