@extends('layout.index')
@section('content')
	<div class="container ct2">
		<div class="row">
			@include('layout.menuleft')
			<div class="col-md-8 dtttt">
				<div class="row">
					<div class="detail">
						<div class="col-md-5">
							<div class="imgdetial imagedetail">
								<img src="image/detail/{{$detail->image}}" height="">
							</div>
						</div>	
						<div class="col-md-5 col-md-offset-2">
							<div class="nddetail">
								{{-- <h3>{{$product->nameproduct}}</h3> --}}
								{{-- <p>Tên xe: >{{$item->nameproduct}}</p> --}}
								<p><i class="fas fa-arrow-alt-circle-right"></i> Xuất Xứ: {{$detail->decription}}</p>
								<p><i class="fas fa-arrow-alt-circle-right"></i> Thuộc Dòng Xe: {{$detail->title}}</p>
								<p> <i class="fas fa-arrow-alt-circle-right"></i> Mã Xe: {{$detail->masp}}</p>
								<p><i class="fas fa-arrow-alt-circle-right"></i> Giá Tham Khảo: {{$detail->name}}</p>
							</div>
						</div>
					</div>
				</div>
				<h4>Thông Tin Chi Tiết</h4>
				{!!$detail->content!!}
				<div></div>
				<div class="fb-like" 
				    data-href="https://developers.facebook.com/apps/442449636205404/" 
				    data-layout="standard" 
				    data-action="like" 
				    data-show-faces="true">
		  		</div>
				<div class="comment">
					<div class="fb-comments" data-href="https://developers.facebook.com/apps/442449636205404/" data-numposts="5"></div>
				</div>
				
			</div>
		</div>
	</div>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=442449636205404&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
@endsection

