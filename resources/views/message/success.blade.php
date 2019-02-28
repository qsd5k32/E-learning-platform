@extends('layouts.app')

@section('content')
    <div class="text-center pt-5 pb-5">
        <i class=" fa fa-check fa-4x text-success"></i><br>
        <h2 class="text-success">Success</h2>
        <p>{{ $message }}</p>
    </div>
@endsection