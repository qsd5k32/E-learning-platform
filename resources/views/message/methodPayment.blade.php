@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5">
        <h1 class="text-center"><strong> How to Pay </strong></h1>
        <div class="d-flex justify-content-center mt-3">
            <a href="#prove" class="btn btn-action btn-primary text-center">Send prove</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="timeline-main">
                    <!-- Timeline Wrapper -->
                    <ul class="stepper stepper-vertical timeline timeline-simple timeline-images pl-0">

                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle cyan lighten-1">1</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content ml-3 p-0 hoverable">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(135).jpg" class="img-fluid" alt="Responsive image">
                                <h4 class="font-weight-bold p-4 mb-0">Ut enim ad minim veniam</h4>
                                <p class="text-muted px-4 mb-0"><i class="far fa-clock" aria-hidden="true"></i> 2017</p>
                                <p class="mb-0 p-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle cyan lighten-1">2</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content mr-xl-3 p-0 hoverable">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg" class="img-fluid" alt="Responsive image">
                                <h4 class="font-weight-bold p-4 mb-0">Duis aute irure dolor</h4>
                                <p class="text-muted px-4 mb-0"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
                                <p class="mb-0 p-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
                                    sequi nesciunt.</p>
                            </div>
                        </li>
                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle cyan lighten-1">3</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content ml-3 p-0 hoverable">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(131).jpg" class="img-fluid" alt="Responsive image">
                                <h4 class="font-weight-bold p-4 mb-0">Sed ut nihil unde omnis</h4>
                                <p class="text-muted px-4 mb-0"><i class="far fa-clock" aria-hidden="true"></i> 2015</p>
                                <p class="mb-0 p-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam
                                    aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                    reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
                                    dolorem eum fugiat quo voluptas nulla pariatur?</p>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle cyan lighten-1">4</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content mr-xl-3 p-0 hoverable">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="img-fluid" alt="Responsive image">
                                <h4 class="font-weight-bold p-4 mb-0"> Quis autem vel eum voluptate</h4>
                                <p class="text-muted px-4 mb-0"><i class="far fa-clock" aria-hidden="true"></i> 2014</p>
                                <p class="mb-0 p-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                                    id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>
                        </li>
                        <li>
                            <!--Section Title -->
                            <a href="#!">
                                <span class="circle cyan lighten-1">5</span>
                            </a>

                            <!-- Section Description -->
                            <div class="step-content ml-3 p-0 hoverable">
                                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg" class="img-fluid" alt="Responsive image">
                                <h4 class="font-weight-bold p-4 mb-0">Mussum ipsum cacilds</h4>
                                <p class="text-muted px-4 mb-0"><i class="far fa-clock" aria-hidden="true"></i> 2013</p>
                                <p class="mb-0 p-4">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                                    saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum
                                    hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut
                                    perferendis doloribus asperiores repellat.</p>
                            </div>
                        </li>
                    </ul>
                    <!-- Timeline Wrapper -->
                </div>
            </div>
        </div>
        <!-- Timeline -->
        <div id="prove" >
            <h2 class="text-center"><strong>Send prove</strong></h2>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form method="POST" enctype="multipart/form-data" class="md-form" method="Post" action="{{ route('paymentProve',['course_id' => $course_id]) }}">
                        @csrf
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm float-left">
                                <span>Choose file</span>
                                <input name="prove" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your prove">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4 btn-md justify-content-center">upload</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/addons-pro/timeline.min.css') }}">
@endsection
