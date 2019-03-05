@extends('layouts.app')

@section('content')
    <video autoplay id='my-video' class='video-js w-100 h-100' controls preload='auto'>
        <source src='{{ route('video',['id' => $url]) }}' type='video/mp4'>
        <p>
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
        </p>
    </video>
@endsection
@section('links')
    <style>
        nav {
            display: none !important;
        }
    </style>
@endsection