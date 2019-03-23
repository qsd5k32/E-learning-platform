@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Section: Blog v.3 -->
        <section class="my-5 pt-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
            <!-- Section description -->
            <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <!-- Grid row -->
            @foreach($posts as $post)
                <div class="col-lg-7">

                    <!-- Category -->
                    <a href="#!" class="{{ $post->color }}">
                        <h6 class="font-weight-bold mb-3"><i class="{{ $post->icon }} pr-2"></i>{{ $post->name }}</h6>
                    </a>
                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong>{{ $post->title }}</strong></h3>
                    <!-- Excerpt -->
                    <p>{{ strip_tags($post->content) }}</p>
                    <!-- Post data -->
                    <p>by <a><strong>{{ $post->username }}</strong></a>, {{ $post->created_at->format('d/m/y') }}</p>
                    <!-- Read more button -->
                    <a class="btn btn-{{ explode('-',$post->color)[1] }} btn-md" href="{{ route('postView' ,['id' => $post->id]) }}">Read more</a>

                </div>
                <hr class="my-5">
            @endforeach


        </section>
        <!-- Section: Blog v.3 -->
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