@extends('layouts.app')

@section('content')
    <div class="text-center pt-5 pb-5">
        <i class=" fa fa-check fa-4x text-success"></i><br>
        <h2 class="text-success">Upload sucess</h2>
        <p>you can check your upload progress <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank">here</a>
        </p>
    </div>
@endsection