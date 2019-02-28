@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center pt-4 pb-4">{{ __('Register') }}</h2>

    <form method="POST" action="{{ route('register') }}" autocomplete="off">
                        @csrf

                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="username" class="form-control" name="username" value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="md-form">
                            <i class="fas fa-signature prefix"></i>
                            <input type="text" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required >
                            <label for="name">{{ __('Name') }}</label>
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
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
@endsection
