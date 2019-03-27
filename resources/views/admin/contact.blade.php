@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
        @foreach($contacts as $contact)
            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $contact->subject }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $contact->full_name }}</h6>
                        <p class="card-text">{{ $contact->content }}</p>
                        <form method="post" action="{{ route('sendReply',['id' => $contact->id ]) }}">
                            @csrf
                            <div class="md-form">
                                <textarea id="form7" class="md-textarea form-control" rows="3" name="reply"></textarea>
                                <label for="form7">Reply message</label>
                            </div>
                            <button class="btn btn-outline-info btn-block btn-rounded">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
@section('scripts')

@endsection