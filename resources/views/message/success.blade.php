@extends('layouts.app')

@section('content')
    <div class="container view d-flex justify-content-center">
        <div class="text-center align-self-center">
            <i class=" fa fa-check fa-10x text-success"></i><br>
            <h1 class="text-success"><strong>Success</strong></h1>
            <p>{{ $message }}</p>
            <a href="{{ route('home') }}" class="btn btn-outline-success btn-rounded">go home</a>
        </div>
    </div>
@endsection