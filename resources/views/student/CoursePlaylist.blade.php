@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <section class="magazine-section my-5">

            <h2 class="h1-responsive font-weight-bold text-center my-5">{{ $course->name }}</h2>

            <div class="list-group-flush">
                <a class="white-text p-3 list-group-item list-group-item-action active">
                    Playlist
                </a>
                @foreach($playlist as $course)
                    @switch($course->type)
                        @case(1)
                            <div class="list-group-item">
                                <a href="{{ route('view',['course_id' => $course->course_id , 'id' => $course->id]) }}"><p class="mb-0"><i class="fas fa-file mr-4 danger-color-dark p-3 white-text rounded " aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                            </div>
                            @break
                        @case(2)
                            <div class="list-group-item">
                                <a href="{{ route('view',['course_id' => $course->course_id , 'id' => $course->id]) }}"><p class="mb-0"><i class="fas fa-video mr-4 blue p-3 white-text rounded " aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                            </div>
                            @break
                        @case(3)
                            <div class="list-group-item">
                                <a href="{{ route('view',['course_id' => $course->course_id , 'id' => $course->id]) }}"><p class="mb-0"><i class="fas fa-newspaper mr-4 default-color p-3 white-text rounded " aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                            </div>
                            @break
                    @endswitch

                @endforeach
            </div>
        </section>
    </div>
@endsection


