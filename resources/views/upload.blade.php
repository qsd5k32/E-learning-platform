@extends('layouts.app')

@section('content')
<div class="container p-5">
	<h2 class="text-center">Create new Course</h2>
	<form enctype="multipart/form-data" class="text-center md-form" style="color: #757575;" method="POST">  
	  @csrf
      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control" name="courseTitle">
        <label for="materialLoginFormEmail">Course title</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="text" id="materialLoginFormPassword" class="form-control" name="courseDescription">
        <label for="materialLoginFormPassword">course description</label>
      </div>
       <div class="file-field">
    		<div class="btn btn-primary btn-sm float-left">
      			<span>Choose video</span>
      			<input type="file" name="coursePath">
    		</div>
    		<div class="file-path-wrapper">
      			<input class="file-path validate" type="text" placeholder="Upload your intro video">
    		</div>
  		</div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Create</button>
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

