@extends('layouts.teach')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Add new Content</h2>

        <form enctype="multipart/form-data" class="text-center md-form" style="color: #757575;" method="POST">
            @csrf
            <div class="md-form">
                <input type="text" value="{{ $playlist->course_name }}" required="" id="materialLoginFormEmail"
                       class="form-control" name="courseTitle">
                <label for="materialLoginFormEmail">Content title</label>
            </div>
            @if($playlist->type == 1)
                <div class="file-field fileContent">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose file</span>
                        <input type="file" name="coursePath">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="upload your file">
                    </div>
                </div>
            @endif
            @if($playlist->type == 2)
                <div class="file-field fileContent">
                    <div class="btn btn-primary btn-sm float-left">
                        <span>Choose video</span>
                        <input type="file" accept="video/*" name="coursePath">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload your intro video">
                    </div>
                </div>
            @endif
            @if($playlist->type == 3)
                <div class="md-form contentArticle">
                    <textarea type="text" name="articleContent" id="editor" class="md-textarea form-control"
                              rows="3">{{ $articleContent }}</textarea>
                </div>
        @endif
        <!-- Sign in button -->
            <button class="btn btn-primary btn-rounded" type="submit"><i class="fab fa-youtube"></i>Add new</button>
        </form>
        <hr>
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