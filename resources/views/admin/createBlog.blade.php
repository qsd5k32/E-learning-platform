@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Create new blog post</h2>
        <form enctype="multipart/form-data" action="{{ route('createPost') }}" autocomplete="off"
              class="text-center md-form" style="color: #757575;" method="POST">
        @csrf

            <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="title">
                <label for="materialLoginFormEmail">Post title</label>
            </div>

            <select class="mdb-select md-form" name="category">
                <option value="" disabled selected>Choose your category</option>
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            <div class="md-form">
                <textarea type="text" name="content" id="editor" class="md-textarea form-control" rows="3"></textarea>
            </div>

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
@endsection