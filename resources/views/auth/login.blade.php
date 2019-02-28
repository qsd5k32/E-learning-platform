@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card mb-4 mt-4">

        <h5 class="card-header info-color white-text text-center py-4 ">
            <strong>Sign in</strong>
        </h5>

        <div class="card-body px-lg-5 pt-0">


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="md-form">
                    <i class="fas fa-at prefix"></i>
                    <input type="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >
                    <label for="password">{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>





                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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


                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('login') }}</button>

                <div class="text-center">
                    <p>Not a member?
                        <a href="{{ route('register') }}">Register</a>
                    </p>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
