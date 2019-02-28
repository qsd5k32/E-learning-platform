@extends('layouts.app')

@section('content')
<div class="text-center pt-5 pb-5">
	<i class="fas fa-exclamation-circle fa-4x text-danger pt-5"></i><br>
	<h2 class="text-danger">Error</h2>
	<p class="pb-5">{{ $message }}</p>
</div>
@endsection