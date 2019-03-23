@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="my-5 pt-5">

            <h2 class="h1-responsive font-weight-bold text-center my-5">{{ $post->title }}</h2>

            {!! $post->content !!}
        </section>
    </div>

@endsection

@section('links')
    <style>
        .media{
            width: 100%;
        }
        .media > * {
            width:100%;
        }
    </style>
@endsection