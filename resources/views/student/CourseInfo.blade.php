@extends('layouts.app')

@section('content')
    <section>
        <div class="container-fluid">
            <!-- <img src="https://mdbootstrap.com/img/Photos/Others/nature3.jpg" class="img-fluid" alt="First sample image"> -->
            <!--Excerpt-->
            <br>
            <h1 class="text-center dark-grey-text pb-3 mt-5 pt-5">
                <strong>{{ $course->name }}</strong></h1>

            <p class="grey-text text-center mb-4 text-uppercase spacing">Written by
                <a>{{ $author->name }}</a>, {{ $course->created_at->format('d-m-y') }}</p>
            <!--Grid row-->
            <div class="row flex-center">

                <!--Grid column-->
                <div class="col-md-10 col-xl-5">

                    <div class="social-counters text-center">
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

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </section>
    <!--/Intro-->

    <!--Blog section-->
    <section>
        <div class="container-fluid grey lighten-4">
            <hr class="my-5">
            <div class="container">

                <!--Blog-->
                <div class="row mt-5 pt-3">
                    <div class="col-lg-3 col-12 mt-1">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                                <img src="@if(!empty($author->photo)) {{ asset('uploads') . '/' . $author->photo }} @else {{ asset('uploads/profile.svg') }} @endif" class="card-img-top" alt="">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                    <strong>{{ $author->name }}</strong>
                                </h5>

                                <!--Description-->
                                <p class="mt-3 dark-grey-text font-small text-center">
                                    <em>{{ $author->resume }}</em>
                                </p>

                            </div>
                            <!--/.Card content-->

                        </div>
                    </div>

                    <!--Main listing-->
                    <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                        <!--Section: Blog v.3-->
                        <section class="extra-margins pb-5  text-lg-left">

                            <!--Grid row-->
                            <div class="row mb-4">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <!--Card-->
                                    <div class="card">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="{{ asset('uploads/') .'/'.$course->cover_url }}" class="img-fluid w-100" alt="{{ $course->name }}">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title">
                                                <strong>{{ $course->name }}</strong>
                                            </h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="dark-grey-text mb-3 mt-4 mx-4">{{ $course->description }}</p>
                                            <hr>
                                            <p class="text-success mb-3 mt-4 mx-4"><strong class="grey-text">Price : </strong> {{ $course->price }} DZD</p>



                                        </div>
                                        <!--/.Card content-->

                                    </div>
                                    <!--/.Card-->

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--/Grid row-->

                        </section>
                        <!--Section: Blog v.3-->

                    </div>
                    <!--Main listing-->
                </div>
                <!--Sidebar-->

            </div>
            <!--Blog-->

        </div>

    </section>
    <!--Blog section-->
@endsection


