@extends('layouts.app')

@section('content')
    <div class="container view pt-5 d-flex justify-content-center">
        <div class="text-center align-self-center mt-5">
            <i class=" fa fa-check fa-10x text-success"></i><br>
            <h1 class="text-success"><strong>Success</strong></h1>
            <p>{{ $message }}</p>
            <a href="{{ route('home') }}" class="btn btn-outline-success btn-rounded">go home</a>
        </div>
    </div>
@endsection