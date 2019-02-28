@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <!-- Section heading -->
<h2 class="text-center"><strong>Our courses</strong></h2>
<p class="grey-text w-responsive mx-auto mb-5 text-center">you can chose some courses here to enroll </p>
  
<!-- Grid row -->
<div class="row d-flex justify-content-center">
  @foreach($courses as $course)
    <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
      <div class="card card-image" style="background-image: url({{ asset('uploads') .'/'. $course->cover_url  }});">

        <!-- Content -->
        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
          <div>
            <h3 class="card-title pt-2"><strong>{{ $course->name}}</strong></h3>
            <p>{{ substr($course->description,0,90) . ' ...' }}</p>
            <a class="btn btn-primary" href="{{ route('courseInfo',['id' => $course->course_id]) }}"><i class="fas fa-book-open left"></i> view more</a>
          </div>
        </div>

      </div>
    </div>
  @endforeach
</div>
</div>
@endsection



