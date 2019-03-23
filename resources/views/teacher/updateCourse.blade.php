@extends('layouts.teach')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Create new Course</h2>
        <form enctype="multipart/form-data" autocomplete="off" class="text-center md-form" style="color: #757575;"
              method="POST">
        @csrf
        <!-- Email -->
            <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="courseTitle"
                       value="{{ $course->name }}">
                <label for="materialLoginFormEmail">Course title</label>
            </div>
            <!-- Password -->
            <div class="md-form mt-2 mb-2">
                <textarea type="text" name="courseDescription" id="editor" class="md-textarea form-control"
                          rows="3">{{ $course->description }}</textarea>
                <label for="editor">Course description</label>
            </div>
            <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="coursePrice"
                       value="{{ $course->price }}">
                <label for="materialLoginFormEmail">Course price</label>
            </div>
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose cover image</span>
                    <input type="file" accept="image/*" name="coverImage">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text"
                           placeholder="if you want to keep your image still this form empty">
                </div>

            </div>
            <div class="md-form">
                <select class="browser-default custom-select" name="courseStatus">
                    <option value="" disabled selected>Course status</option>
                    <option value="2">pending</option>
                    <option value="1">public</option>
                </select>
            </div>
            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                Update
            </button>
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
@section('links')

@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script defer>
        $(document).ready(function () {
            @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
