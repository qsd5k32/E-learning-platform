@extends('layouts.app')

@section('content')


    <div class="container pt-5">
        <!-- Section: Products v.2 -->
        <section class="text-center my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Our best courses</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam
                voluptas
                nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-12 mb-lg-4 mb-4">
                        <!-- Card -->
                        <div class="card border-0 card-cascade wider card-ecommerce">
                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img src="{{ asset('uploads') .'/'. $course->cover_url  }}" class="card-img-top"
                                     alt="sample photo">
                                <a href="{{ route('courseInfo',['id' => $course->course_id]) }}">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!-- Card image -->
                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">
                                <!-- Category & Title -->
                                <h4 class="card-title">
                                    <strong>
                                        <a href="{{ route('courseInfo',['id' => $course->course_id]) }}">{{ $course->name}}</a>
                                    </strong>
                                </h4>
                                <!-- Description -->
                                <p class="card-text">{{ strip_tags(substr($course->description,0,140)) . ' ...' }}</p>
                                <!-- Card footer -->
                                <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>{{ $course->price }} DZD</strong>
            </span>
                                    <span class="float-right">
              <a class="" href="{{ route('courseInfo',['id' => $course->course_id]) }}" data-toggle="tooltip"
                 data-placement="top" title="Quick Look">
                <i class="fas fa-eye grey-text ml-3"></i>
              </a>
            </span>
                                </div>
                            </div>
                            <!-- Card content -->
                        </div>
                        <!-- Card -->
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection



