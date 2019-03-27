@extends('layouts.teach')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Create new Course</h2>
        <form enctype="multipart/form-data" autocomplete="off" class="text-center md-form" style="color: #757575;"
              method="POST">
        @csrf

            <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="courseTitle">
                <label for="materialLoginFormEmail">Course title</label>
            </div>

            <select class="mdb-select md-form" name="category">
                <option value="" disabled selected>Choose your category</option>
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            <div class="md-form">
                <textarea type="text" name="courseDescription" id="editor" class="md-textarea form-control"
                          rows="3"></textarea>
            </div>
            <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose cover image</span>
                    <input type="file" accept="image/*" name="coverImage">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your course cover image">
                </div>
            </div>
            <!-- Sign in button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                Create
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
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script defer>
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            @if(Session::has('success'))
            toastr.warning('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'),{
                mediaEmbed: {
                    previewsInData : true,
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
