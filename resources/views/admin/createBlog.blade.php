@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <h2 class="text-center">Create new blog post</h2>
        <form enctype="multipart/form-data" action="@if(empty($post)){{ route('createPost') }}@else {{ route('setUpdatePost',['id' => $post->id]) }}@endif" autocomplete="off"
              class="text-center md-form" style="color: #757575;" method="POST">
            @csrf

            <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="title"
                       value="@if(!empty($post)) {{ $post->title }} @endif">
                <label for="materialLoginFormEmail">Post title</label>
            </div>

            <select class="mdb-select md-form" name="category">
                <option value="" disabled selected>Choose your category</option>
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            <div class="md-form">
                <textarea type="text" name="content" id="editor" class="md-textarea form-control"
                          rows="3">@if(!empty($post)) {{ $post->content }} @endif</textarea>
            </div>

            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                @if(empty($post))Create @else Update @endif
            </button>
        </form>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
        });
        ClassicEditor
            .create(document.querySelector('#editor'), {
                mediaEmbed: {
                    previewsInData: true,
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection