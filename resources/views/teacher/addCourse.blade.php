@extends('layouts.teach')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Add new Content</h2>

        <form enctype="multipart/form-data" class="text-center md-form" style="color: #757575;" method="POST">
            @csrf

            <select class="browser-default custom-select contentType" name="contentType">
                <option value="" disabled selected>Choose your content type</option>
                <option value="1">Documents</option>
                <option value="2">Video</option>
                <option value="3">Article</option>
            </select>
            <div class="md-form">
                <input type="text" required="" id="materialLoginFormEmail" class="form-control" name="courseTitle">
                <label for="materialLoginFormEmail">Content title</label>
            </div>

            <div class="file-field fileContent">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose video</span>
                    <input type="file" name="coursePath">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your intro video">
                </div>
            </div>
            <div class="md-form contentArticle" style="display: none">
                <textarea type="text" name="articleContent" id="editor" class="md-textarea form-control"
                          rows="3"></textarea>
            </div>

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
            .create(document.querySelector('#editor'),{
                mediaEmbed: {
                    previewsInData : true,
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $('.contentType').on('change', function () {
            if (this.value == 3) {
                $('.fileContent').hide();
                $('.contentArticle').show();
            } else {
                $('.fileContent').show();
                $('.contentArticle').hide();
            }
        });
    </script>

@endsection