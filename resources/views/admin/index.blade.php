@extends('layouts.admin')

@section('content')
<div class="table-responsive text-nowrap">

    <table class="table">
        <thead class="black text-white">
        <tr>
            <th scope="col">id</th>
            <th scope="col">username</th>
            <th scope="col">Email</th>
            <th scope="col">course name</th>
            <th scope="col">Course link</th>
            <th scope="col">Payment</th>
        </tr>
        </thead>
        <tbody>
        @foreach($enrolment as $enroll)
            <tr>
                <th scope="row">{{ $enroll->id }}</th>
                <td>{{ $enroll->username }}</td>
                <td>{{ $enroll->email }}</td>
                <td>{{ $enroll->name }}</td>
                <td>{{ $enroll->name }}</td>
                <td><a class="btn btn-primary" href="{{ route('payment',['id' => $enroll->id , 'c_id' => $enroll->course_id]) }}">Approve</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
@endsection
