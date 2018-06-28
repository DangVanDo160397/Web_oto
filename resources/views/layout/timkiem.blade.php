@extends('layout.index')
@section('content')
@include('layout.content1')
<div class="container ct2">
	<div class="row">
		@include('layout.menuleft')
		@php
			function color($str,$keysearch){
				str_replace($keysearch,"<span style='color:red;'>$keysearch</span>",$str);
			}
		@endphp
		<div class="col-md-8">
				<div class="row">
					<div class="tieude">
						<h5>
							Tìm kiếm: {{$keysearch}}
						</h5>
						@foreach($product as $pr)
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 spct">
								<div class="de" id="de1">
									<a href="" class="jpg">
										<img  src="image/detail/{{empty($pr->details[0]->image)?: $pr->details[0]->image}}">
									</a>
									<div class="chitiet">
										{{-- <h3>{!! color($pr->nameproduct,$keysearch) !!}</h3> --}}
										<h3>{{$pr->nameproduct}}</h3>
										<p>{!!empty($pr->details[0]->view)? : $pr->details[0]->view!!}</p>
										<a href="chitiet/{{$pr->id}}" ><button type="button"  class="btn btn-primary">Chi Tiết</button></a><br>
									</div>
								</div>	
							</div>
						@endforeach
					</div>
				</div>
		</div>
	</div>
</div>
@include('layout.conten2')
@endsection