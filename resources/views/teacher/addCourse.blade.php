@extends('layouts.app')

@section('content')
<div class="container p-5">
	<h2 class="text-center">Add new courses</h2>

	<form enctype="multipart/form-data" class="text-center md-form" style="color: #757575;" method="POST">  
	  @csrf

      <div class="md-form">
        <input type="text" required="" id="materialLoginFormEmail" class="form-control" name="courseTitle">
        <label for="materialLoginFormEmail">Course title</label>
      </div>

       <div class="file-field">
    		<div class="btn btn-primary btn-sm float-left">
      			<span>Choose video</span>
      			<input type="file" required="" accept="video/*" name="coursePath">
    		</div>
    		<div class="file-path-wrapper">
      			<input class="file-path validate" type="text" placeholder="Upload your intro video">
    		</div>
  		</div>

      <!-- Sign in button -->
      <button class="btn btn-primary btn-rounded" type="submit"><i class="fab fa-youtube"></i>Add new</button>
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
@endsection
@section('scripts')
  <script>
   /* $(document).ready(function() {
    $('.mdb-select').materialSelect();
  });*/
  </script>
@endsection