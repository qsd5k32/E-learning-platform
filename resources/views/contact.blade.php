@extends('layouts.app')
@section('content')
    <div class="container view mt-5">
        <section class="my-5">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-9 mb-md-0 mb-5">

                    <form method="post" action="{{ route('sendContact') }}">
                    @csrf
                    <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="full_name" id="contact-name" class="form-control">
                                    <label for="contact-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" name="email" id="contact-email" class="form-control">
                                    <label for="contact-email" class="">Your email</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" name="subject" id="contact-Subject" class="form-control">
                                    <label for="contact-Subject" class="">Subject</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea id="contact-message" name="content" class="form-control md-textarea"
                                              rows="3"></textarea>
                                    <label for="contact-message">Your message</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                        <div class="text-center text-md-left">
                            <button type="submit" class="btn btn-primary btn-md">Send</button>
                        </div>
                    </form>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>
                        <li>
                            <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
                            <p>+ 01 234 567 89</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
                            <p class="mb-0">contact@example.com</p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
    </div>
@endsection