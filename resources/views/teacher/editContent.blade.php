@extends('layouts.teach')

@section('content')
    <div class="container p-5">
        <h3>Your content</h3>
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Title
                </th>
                <th>Action
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($playlist as $content)
                <tr>
                    <td>{{ $content->course_name }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="ml-1 mr-1 red-text" href="{{ route('deleteContent',['id' => $content->id ]) }}"><i class="fas fa-trash"></i> Delete</a>
                            <a class="ml-1 mr-1 blue-text"><i class="fas fa-edit"></i> Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Title
                </th>
                <th>Action
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/addons/datatables.min.js') }}"></script>
    <script defer>
        $(document).ready(function() {
            @if(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        //@TODO create script to change form to article form
        $('.contentType').on('change',function () {
            if(this.value == 3){
                $('.fileContent').hide();
                $('.contentArticle').show();
            }else{
                $('.fileContent').show();
                $('.contentArticle').hide();
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#dtMaterialDesignExample').DataTable();
            $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
                $(this).parent().append($(this).children());
            });
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
                $('input').attr("placeholder", "Search");
                $('input').removeClass('form-control-sm');
            });
            $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
            $('#dtMaterialDesignExample_wrapper select').removeClass(
                'custom-select custom-select-sm form-control form-control-sm');
            $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
            $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
        });
    </script>


@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/addons/datatables.min.css') }}">
@endsection