@extends('layouts.app')

@section('content')
<!-- Intro -->
  <section class="view bg" style="background: url('https://images.pexels.com/photos/325045/pexels-photo-325045.jpeg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">

    <div class="container">
      <div class="row">

        <div class="col-md-6 p-4 text-center">

          <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="heading display-3">new E-learning platform</h1>
            <h4 class="subheading font-weight-bold">the most popular platform for e-learning , our new courses are ready now</h4>
            <div class="mr-auto">
              <button type="button" class="btn purple-gradient btn-rounded">Take it<i class="fas fa-caret-right ml-3"></i></button>
            </div>
          </div>

        </div>
        <div class="col-md-6 p-4 text-center">
          <!-- Material form register -->
          <div class="card text-white">

            <h5 class="card-header info-color white-text text-center py-4">
              <strong>Sign up</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

              <!-- Form -->
              <form class="text-center p-3" >
                <!-- E-mail -->
                <div class="md-form mt-0">
                  <input type="email" id="materialRegisterFormEmail" class="form-control">
                  <label for="materialRegisterFormEmail">E-mail</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                  <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                  <label for="materialRegisterFormPassword">Password</label>
                  <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                    At least 8 characters and 1 digit
                  </small>
                </div>

                <!-- Phone number -->
                <div class="md-form">
                  <input type="password" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                  <label for="materialRegisterFormPhone">Phone number</label>
                  <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                    Optional - for two step authentication
                  </small>
                </div>

                <!-- Newsletter -->
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                  <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                </div>

                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>



                <hr>

                <!-- Terms of service -->
                <p>By clicking
                  <em>Sign up</em> you agree to our
                  <a href="" target="_blank">terms of service</a>

              </form>
              <!-- Form -->

            </div>

          </div>
          <!-- Material form register -->
        </div>

      </div>
    </div>

  </section>
  <!-- Intro -->
@endsection
