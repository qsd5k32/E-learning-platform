@extends('layouts.app')
<!-- @TODO change player -->
@section('content')
    <div class="unique-color-dark">
        <div class="container p-5">
            <video id="player" controls style="max-height: 100% !important;">
                <source src="{{ route('video',['id' => $id ,'token' => $token]) }}" type="video/mp4" />
            </video>
        </div>
    </div>
@endsection
@section('links')
    <style>
        nav {
            display: none !important;
        }
        .nav {
            display: none !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.2/plyr.css" />

@endsection
@section('scripts')
    <script src="https://cdn.plyr.io/3.5.2/plyr.js"></script>
    <script>
        const player = new Plyr('#player',{
            settings : ['captions', 'quality', 'speed', 'loop']
        });
    </script>
@endsection