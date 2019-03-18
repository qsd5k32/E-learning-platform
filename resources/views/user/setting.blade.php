@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center pt-4 pb-4">Account</h2>
        <form method="POST" enctype="multipart/form-data" class="md-form" autocomplete="off">
            @csrf
            <div class="md-form">
                <i class="fas fa-signature prefix"></i>
                <input type="text" id="name" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" value="">
                <label for="name">{{ __('Name') }}</label>
            </div>
            <div class="md-form">
                <i class="fas fa-address-card prefix"></i>
                <input type="text" id="id_national" required class="form-control" name="identity_national_number" value="">
                <label for="id_national">Email</label>
            </div>

            <div class="form-group mb-3 mt-2">
                <button type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">
                    Save
                </button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection