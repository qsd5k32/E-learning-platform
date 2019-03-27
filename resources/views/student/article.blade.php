@extends('layouts.app')
@section('content')
    <div class="container-fluid mb-5 mt-5">

        <!--Grid row-->
        <div class="row mt-5" style="margin-top: -100px;">

            <!--Grid column-->
            <div class="col-md-12 px-lg-5">
                <!--Card-->
                <div class="card pb-5 mx-md-3">
                    <div class="card-body">

                        <div class="container">

                            <!--Section heading-->
                            <h1 class="text-center h1 pt-4 mb-3">
                                <strong>{{ $article->title }}</strong>
                            </h1>

                            <div class="row pt-lg-5 pt-3">

                                <!--Grid column-->
                                <div class="col-md-12 col-xl-12">
                                    <div class="mt-3">
                                        {!! $article->content !!}
                                    </div>
                                </div>
                                <!--/Grid column-->

                            </div>
                            <!--/Grid row-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--/Card-->
            </div>
            <!--/Grid column-->
        </div>
        <!--/Grid row-->
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
        Playlist
    </button>

    <!-- Modal -->
    <div class="modal fade left" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-full-height modal-left modal-notify modal-info" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title white-text" id="exampleModalLabel">Playlist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                        @foreach($sections as $section)
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header p-4" role="tab" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx"
                                       href="#collapse{{ $section->id }}"
                                       aria-expanded="false" aria-controls="collapseTwo2">
                                        <h5 class="mb-0">
                                            {{ $section->name }} <i class="fas fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapse{{ $section->id }}" class="collapse" role="tabpanel"
                                     aria-labelledby="headingTwo" data-parent="#accordionEx">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection