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
                                    <div class="row mt-3">
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
@endsection