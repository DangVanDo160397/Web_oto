@extends('layout.index')
@section('content')
@include('layout.content1')
<div class="container ct2">
	<div class="row">
		@include('layout.menuleft')
		<div class="col-md-8">
			
			@foreach($category1 as $tl)
				<div class="row">
					<div class="tieude">
						<h5>
							{{$tl->name}}
						</h5>
						@if($tl->product)
							@foreach ($tl->product as $item)
							<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 spct">
								<div class="de" id="de1">
									<a href="" class="jpg">
										<img  style="max-width: 300px;height: 192px;" src="image/detail/{{empty($item->details[0]->image)? "hwcp_xebenhowo4banh.jpg": $item->details[0]->image}}">
									</a>
									<div class="chitiet">
										<h3>{{$item->nameproduct}}</h3>
										<p>{!!empty($item->details[0]->view)? : $item->details[0]->view!!}</p>
										<a href="chitiet/{{$item->id}}"><button type="button" onclick="myFunction()" class="btn btn-primary">Chi Tiết</button></a><br>
									</div>
								</div>
							</div>
						@endforeach
						@endif
						
					</div>
				</div>
			@endforeach
			
		</div>
	</div>
</div>
<script type="text/javascript">
    var inc=0;
 function myFunction() {
    inc=inc+1;
   console.log(inc);
 }
    </script>

@include('layout.conten2')
@endsection