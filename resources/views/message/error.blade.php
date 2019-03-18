@extends('layouts.app')

@section('content')
<div class="container view d-flex justify-content-center">
	<div class="text-center align-self-center">
		<i class="fas fa-exclamation-circle fa-10x text-danger pt-5"></i><br>
		<h2 class="text-danger"><strong>Error</strong></h2>
		<p class="pb-5">{{ $message }}</p>
	</div>
</div>
@endsection