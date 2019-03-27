@extends('layouts.app')
@section('content')
    <div class="container mt-5 pt-5">
        <h1>Chat information exchange</h1>

        <form method="post" action="{{ route('addChat') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="name" class="form-control" name="name">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col">
                    <select class="mdb-select md-form" name="sex">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col">
                    <select class="mdb-select md-form" name="level">
                        <option value="" disabled selected>Level</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Pro">Pro</option>
                    </select>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="md-form">
                            <i class="fas fa-globe-africa prefix"></i>
                            <input type="text" id="country" class="form-control" name="country">
                            <label for="country">Country</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="md-form">
                        <i class="fab fa-facebook-messenger prefix"></i>
                        <input type="text" id="messenger" class="form-control" name="messanger">
                        <label for="messenger">Messenger Username</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <i class="fab fa-instagram prefix"></i>
                        <input type="text" id="instagram" class="form-control" name="instagram">
                        <label for="instagram">Instagram Username</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <i class="fab fa-skype prefix"></i>
                        <input type="text" id="skype" class="form-control" name="skype">
                        <label for="skype">Skype Username</label>
                    </div>
                </div>
                <div class="col">
                    <select class="mdb-select md-form" name="topic">
                        <option value="" disabled selected>Topic</option>
                        <option value="Sport">Sport</option>
                        <option value="Education">Education</option>
                        <option value="Technology">Technology</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Start
                chat
            </button>
        </form>
        <hr>
        <table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Sex
                </th>
                <th class="th-sm">Country
                </th>
                <th class="th-sm">Level
                </th>
                <th class="th-sm">Topic
                </th>
                <th class="th-sm">Contacts
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($chats as $chat)
                    <td>{{ $chat->name }}</td>
                    <td>{{ $chat->sex }}</td>
                    <td>{{ $chat->country }}</td>
                    <td>{{ $chat->level }}</td>
                    <td>{{ $chat->topic }}</td>
                    <td>
                        @if(!empty($chat->messanger))
                            <a href="https://www.messenger.com/t/{{ $chat->messanger }}" target="_blank"
                               class="text-primary"><i class="fab fa-facebook-messenger fa-2x"></i></a>
                        @endif
                        @if(!empty($chat->instagram))
                                <a href="https://www.instagram.com/{{ $chat->messanger }}" target="_blank"
                                   class="text-secondary"><i class="fab fa-instagram fa-2x"></i></a>
                        @endif
                        @if(!empty($chat->skype))
                                <a href="skype:live:{{ $chat->messanger }}?chat"
                                   class="text-info"><i class="fab fa-skype fa-2x"></i></a>
                        @endif



                    </td>
                @endforeach

            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Name
                </th>
                <th>Sex
                </th>
                <th>Country
                </th>
                <th>Level
                </th>
                <th>Topic
                </th>
                <th>Contacts
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection
@section('links')
    <link rel="stylesheet" href="{{ asset('css/addons/datatables.min.css') }}">
@endsection
@section('scripts')
    <script defer src="{{ asset('js/addons/datatables.min.js') }}"></script>
    <script defer>
        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('#dtMaterialDesignExample').DataTable();
            $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
                $(this).parent().append($(this).children());
            });
            $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
                $(this).attr("placeholder", "Search");
                $(this).removeClass('form-control-sm');
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