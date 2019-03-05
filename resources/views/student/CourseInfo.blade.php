@extends('layouts.app')

@section('content')
    <div class="container">
        <section>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">
        <div class="card card-cascade wider reverse border-0">
            <div class="view view-cascade overlay">
                <img src="{{ asset('uploads/') .'/'.$course->cover_url }}" height="400" alt="{{ $course->name }}" class="card-img-top">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Post data-->
            <div class="card-body card-body-cascade text-center">
                <h2>
                    <a class="font-weight-bold">{{ $course->name }}</a>
                </h2>
                <p>Written by
                    <a>{{ $author->name }}</a>, {{ $course->created_at->format('d-m-y') }}</p>

                <!--Social shares-->
                <div class="social-counters ">
                    @guest
                        <a class="btn btn-default  waves-effect waves-light" href="{{ route('register') }}">
                            <i class="fas fa-user-plus left"></i>
                            <span class="hidden-md-down ">{{ __('Register') }}</span>
                        </a>
                    @else
                        @if(empty($enrollment))
                            <a class="btn btn-default  waves-effect waves-light" href="{{ route('enroll',['course_id' => $course->course_id]) }}">
                                <i class="fas fa-plus left"></i>
                                <span class="hidden-md-down ">Enroll now</span>
                            </a>
                            <span class="counter ">{{ $students }}</span>
                        @else
                            <a class="btn btn-default  waves-effect waves-light" href="{{ route('playlist',['id' => $course->course_id]) }}">
                                <i class="fas fa-book-open left"></i>
                                <span class="hidden-md-down "> view course</span>
                            </a>
                        @endif
                    @endguest

                </div>
                <!--Social shares-->

            </div>
        </div>
                </div>
            </div>
        </section>
            <!--Post data-->
        </div>

    <div class="row p-5">
        <!-- Card Wider -->
        <div class="col-lg-4 col-xl-4 col-md-12 col-12">
            <div class="card card-cascade wider border-0">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img  class="card-img-top" src="@if(!empty(Auth::user()->detail->photo)) {{ asset('uploads') . '/' . Auth::user()->detail->photo }} @else {{ asset('uploads/profile.svg') }} @endif" alt="Card image cap">
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title"><strong>{{ $author->name }}</strong></h4>
                    <hr>
                    <p class="card-text">{{ $author->resume }}</p>

                </div>

            </div>

        </div>
        <div class="col-lg-8 col-xl-8 col-md-12 col-12 p-5">
            <h2 class="text-success">{{ $course->price }} DZD</h2>
            <h2>About <strong>{{ $course->name }}</strong></h2>
            {{ $course->description }}
        </div>
    </div>
@endsection


