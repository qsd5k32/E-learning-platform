@extends('layouts.app')

@section('content')
    <div class=" pt-5">
        <section class="magazine-section my-5">

            <h2 class="h1-responsive font-weight-bold text-center my-5">{{ $course->name }}</h2>

            <div class="list-group-flush">
                <a class="white-text p-4 list-group-item list-group-item-action active">
                    <strong>Playlist</strong>
                </a>

            <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                    @foreach($sections as $section)
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header p-4" role="tab" id="headingTwo">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse{{ $section->id }}"
                                   aria-expanded="false" aria-controls="collapseTwo2">
                                    <h5 class="mb-0">
                                        {{ $section->name }} <i class="fas fa-angle-down rotate-icon"></i>
                                    </h5>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse{{ $section->id }}" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                            @foreach($section->playlist as $course)
                                @switch($course->type)
                                    @case(1) <!-- File -->
                                        <div class="list-group-item">
                                            <a href="{{ route('file',['id' => $course->id ,'course_id' => $course->course_id,'token' => $token]) }}" target="_blank"><p class="mb-0"><i
                                                            class="fas fa-file mr-4 danger-color-dark p-3 white-text rounded "
                                                            aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                                        </div>
                                    @break
                                    @case(2) <!-- Video -->
                                        <div class="list-group-item">
                                            <a href="{{ route('view',['id' => $course->id ,'course_id' => $course->course_id,'token' => $token]) }}"><p class="mb-0"><i
                                                            class="fas fa-video mr-4 blue p-3 white-text rounded "
                                                            aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                                        </div>
                                    @break
                                    @case(3) <!-- Article -->
                                        <div class="list-group-item">
                                            <a href="{{ route('article',['id' => $course->course_url ,'course_id' => $course->course_id,'token' => $token]) }}"><p
                                                        class="mb-0"><i
                                                            class="fas fa-newspaper mr-4 default-color p-3 white-text rounded "
                                                            aria-hidden="true"></i>{{ $course->course_name }}</p></a>
                                        </div>
                                        @break
                                    @endswitch

                                @endforeach
                            </div>

                        </div>
                    @endforeach
                    <!-- Accordion card -->

                    <!-- Accordion card -->

                    <!-- Accordion card -->


                </div>
                <!-- Accordion wrapper -->
            </div>
        </section>
    </div>
@endsection


