@extends('layouts.teach')

@section('content')
    <div class="container p-5">

        <!-- Material form grid -->

        <div class="p-3">
            <form method="post" action="{{ route('createSection') }}">
                @csrf
                <!-- Grid row -->
                <input type="hidden" value="{{ request()->route('id') }}" name="course_id">
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-10">
                        <!-- Material input -->
                        <div class="md-form mt-0">
                            <input type="text" class="form-control" name="name" placeholder="Section name">
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-2">
                        <!-- Material input -->
                        <button type="submit" class="btn btn-primary btn-md">Add Section</button>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </form>
        </div>
        <h2 class="text-center">Add new Content</h2>
        <!-- Material form grid -->
        <div class="row">
            <div class="col-10">
                <form enctype="multipart/form-data" class="text-center md-form" style="color: #757575;" method="POST">
                    @csrf

                    <select class="browser-default custom-select contentType" name="contentType">
                        <option value="" disabled selected>Choose your content type</option>
                        <option value="1">Documents</option>
                        <option value="2">Video</option>
                        <option value="3">Article</option>
                    </select>
                    <select class="browser-default custom-select contentType mt-3" name="section">
                        <option value="" disabled selected>Choose your Section</option>
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
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
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">Edit Sections</button>
                <ul class="list-group">
                    <li class="list-group-item active">Sections</li>
                    @foreach($sections as $section)
                        <li class="list-group-item">{{ $section->name }}</li>
                    @endforeach
                </ul>
                <!-- Modal: modalCart -->
                <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Your cart</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <!--Body-->
                            <div class="modal-body">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sections</th>
                                        <th>Remove</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sections as $section)
                                        <tr>
                                            <td>{{ $section->name }}</td>
                                            <td><a href="{{ route('deleteSection',['id' => $section->id]) }}"><i class="fas fa-times"></i></a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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