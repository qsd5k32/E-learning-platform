@extends('layouts.teach')

@section('content')
    <div class="container pt-5">
        <!-- Section heading -->
        <h2 class="text-center"><strong>your courses</strong></h2>
        <p class="grey-text w-responsive mx-auto mb-5 text-center">you can chose some courses here to enroll </p>

        <!-- Grid row -->
        <div class="row d-flex justify-content-center">
            @foreach($courses as $course)
                <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="card card-image"
                         style="background-image: url({{ asset('uploads') .'/'. $course->cover_url  }});">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                            <div>
                                @if($course->status == 2)
                                    <h5 class="text-muted"><i class="fas fa-user"></i> Pending</h5>
                                @else
                                    <h5 class="text-success"><i class="fas fa-globe-africa"></i> Public</h5>
                                @endif
                                <h3 class="card-title pt-2"><strong>{{ $course->name}}</strong></h3>
                                <p>{{ strip_tags(substr($course->description,0,90)) . ' ...' }}</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-primary"
                                       href="{{ route('editCourse',['id' => $course->course_id]) }}">Edit</a>
                                    <a class="btn btn-primary"
                                       href="{{ route('addContent',['id' => $course->course_id]) }}">Add </a>
                                </div>
                                <a class="btn btn-primary"
                                   href="{{ route('editContent',['id' => $course->course_id]) }}">Edit Content</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection