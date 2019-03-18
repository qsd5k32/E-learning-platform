@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center pt-4 pb-4">Account</h2>
        <form method="POST" enctype="multipart/form-data" class="md-form" autocomplete="off">
            @csrf
            <div class="md-form">
                <i class="fas fa-signature text-black-50 prefix"></i>
                <input type="text" id="name" class="form-control disabled {{ $errors->has('name') ? ' is-invalid' : '' }}" disabled value="{{ $user->name }}">
                <label for="name">{{ __('Name') }}</label>
            </div>
            <div class="md-form">
                <i class="fas fa-address-card prefix"></i>
                <input type="text" id="id_national" required class="form-control" name="identity_national_number" value="@if(!empty($details->identity_national_number)){{ $details->identity_national_number }}@endif">
                <label for="id_national">National identity number</label>
            </div>
            <div class="md-form">
                <i class="fas fa-birthday-cake prefix"></i>
                <input placeholder="Selected date" required type="text"  data-value="@if(!empty($details->birthday)){{ $details->birthday }}@endif" name="birthday" id="date-picker" class="form-control datepicker">
                <label for="date-picker">Birthday</label>
            </div>
            <div class="md-form">
                <i class="fas fa-map-marker prefix"></i>
                <input type="text" id="birthday_place" required class="form-control" name="birthday_place" value="@if(!empty($details->birthday_place)){{ $details->birthday_place }}@endif">
                <label for="birthday_place">birthday place</label>
            </div>
            <div class="md-form">
                <i class="fas fa-mobile-alt prefix"></i>
                <input type="tel" id="phoneNumber" name="phone_number" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="@if(!empty($details->phone_number)){{ $details->phone_number }}@endif" >
                <label for="phoneNumber">phone number (optional)</label>

            </div>
            <div class="md-form">
                <i class="fas fa-map-marked-alt prefix"></i>
                <input type="text" id="address" name="address" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="@if(!empty($details->address)){{ $details->address }}@endif" >
                <label for="address">Address (optional)</label>
            </div>
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose photo</span>
                    <input type="file" accept="image/*" name="photoPath">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your profile photo">
                </div>
            </div>
            <div class="md-form">
                <i class="fas fa-pencil-alt prefix"></i>
                <textarea type="text" name="resume" id="form10" class="md-textarea form-control" rows="3">@if(!empty($details->resume)){{ $details->resume }}@endif
                </textarea>
                <label for="form10">Resume</label>
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
@section('scripts')
    <script defer>
        $(document).ready(function() {
            @if(Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}');
            @endif
            @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error('{{ $error }}');
                @endforeach
            @endif
            $('.datepicker').pickadate({
                today: '',
                min: [1962,1,1],
                max: [2002,1,1]
            });
        });
    </script>
@endsection