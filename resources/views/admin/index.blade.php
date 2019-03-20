@extends('layouts.admin')

@section('content')
<div class="table-responsive text-nowrap">
    <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">id
            </th>
            <th class="th-sm">username
            </th>
            <th class="th-sm">email
            </th>
            <th class="th-sm">course name
            </th>
            <th class="th-sm">payment prove
            </th>
            <th class="th-sm">payment
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($enrolment as $enroll)
            <tr>
                <th>{{ $enroll->id }}</th>
                <td>{{ $enroll->username }}</td>
                <td>{{ $enroll->email }}</td>
                <td>{{ $enroll->name }}</td>
                <td><a href="{{ Storage::url($enroll->payment_prove) }}" target="_blank">Prove</a></td>
                <td><a class="btn btn-primary btn-sm btn-rounded text-small" href="{{ route('payment',['id' => $enroll->id]) }}">Approve</a></td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>id
            </th>
            <th>username
            </th>
            <th>email
            </th>
            <th>course name
            </th>
            <th>payment prove
            </th>
            <th>payment
            </th>
        </tr>
        </tfoot>
    </table>
</div>

@endsection
@section('scripts')
    <script src="{{ asset('js/addons/datatables.min.js') }}"></script>
    <script defer>
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
            @if(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>

@endsection
