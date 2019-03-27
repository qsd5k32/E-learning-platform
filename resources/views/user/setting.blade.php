@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center pt-4 pb-4">Account</h2>
        <form method="POST" enctype="multipart/form-data" class="md-form" autocomplete="off">
            @csrf
            <div class="md-form">
                <i class="fas fa-at prefix text-muted"></i>
                <input type="email" id="id_national" disabled class="form-control"
                       value="{{ $user->email }}">
                <label for="id_national">Email</label>
            </div>
            <hr>
            <h4>Change password</h4>
            <div class="md-form">

                <input type="password" id="actual_password" name="actual_password" required class="form-control">
                <label for="actual_password">Actual password</label>
            </div>
            <div class="md-form">

                <input type="password" id="new_password" name="password" required class="form-control">
                <label for="new_password">new Password</label>
            </div>
            <div class="md-form">

                <input type="password" id="password_confirmation" name="password_confirmation" required
                       class="form-control">
                <label for="password_confirmation">Confirm password</label>
            </div>

            <div class="form-group mb-3 mt-2">
                <button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                    Save
                </button>
            </div>
        </form>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
    </div>
@endsection