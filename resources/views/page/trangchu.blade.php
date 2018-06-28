@extends('layout.index')

@section('content')
<div class="container">
	<div class="row">
		@include('layout.menuleft')

		<!-- container right -->
		@include('layout.content')		
		<!-- end container right -->
	</div>
</div>
@endsection