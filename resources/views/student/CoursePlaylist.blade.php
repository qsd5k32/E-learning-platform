@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="magazine-section my-5">

            <h2 class="h1-responsive font-weight-bold text-center my-5">Course</h2>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{ asset('uploads') . '/' . $course->cover_url }}" alt="course">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">{{ $course->name }}</h4>
                            <!-- Text -->
                            <p class="card-text">{{ $course->description }}</p>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
            <div class="col-lg-6 col-md-12">
                <div class="list-group">
                    <a class="white-text list-group-item list-group-item-action active">
                        Courses list
                    </a>
                @foreach($playlist as $course)
                        <a href="{{ route('view',['id' => $course->id]) }}" class="list-group-item list-group-item-action">{{ $course->course_name }}</a>
                @endforeach
                    </div>
            </div>
            </div>
        </section>
    </div>
@endsection


