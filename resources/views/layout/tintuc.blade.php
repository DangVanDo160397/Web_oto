@extends('layout.index')
@section('content')
@include('layout.content1')
<div class="container ct2">
	<div class="row">
		@include('layout.menuleft')
		<div class="col-md-8">
			@foreach($tintuc as $tt)
			<div class="row tintuc" style="margin-top: 20px;">
				<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
					<img style="width: 100%; height: 200px;" src="image/tintuc/{{$tt->image}}" >
				</div>
				<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 texttintuc" style=" ">
					<h4 style="    font-size: 20px;
    font-weight: bold;
    color: darkgreen;
    font-family: initial;">
						{{$tt->title}}
					</h4>		
					<p>
						{!!$tt->content!!}
					</p>		
				</div>
			 </div>
			 @endforeach
		</div>
	</div>
</div>

@include('layout.conten2')
@endsection