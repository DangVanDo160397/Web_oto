@extends('layout.index')
@section('content')
	<div class="container ct2">
		<div class="row">
			@include('layout.menuleft')
			<div class="col-md-8 lienhe">
				<div class="row">
					<div class="detail">
						<div class="col-md-5">
							<div class="">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7446.827674560848!2d105.72723982289402!3d21.056127356421538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454570374c5e3%3A0xdeb4689fca01b0ff!2zTmjhu5VuLCBNaW5oIEtoYWksIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1522257851646" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>	
						<div class="col-md-5 col-md-offset-2">
							<div class="nddetail">
								<h3>Thông tin liên hệ</h3>
								<p>
									<i class="fas fa-map-marker" style="margin-right: 10px"></i> Địa chỉ:xóm 13, Quang Trung ,Kiến Xương,Thái Bình <br>
								</p>
								<br>
								<p>	
								<i class="fas fa-phone-volume" style="margin-right: 10px"></i> Hotline : 0973513303 <br>
								</p>
								<br>
								<p>	
								<i class="fas fa-envelope" style="margin-right: 10px"></i> Email:daochinh12021996@gmail.com <br>
								</p>
								<br>
								<p>
								<i class="fas fa-globe" style="margin-right: 10px"></i> Website:chinhcn.com
								</p>	
							</div>
						</div>
					</div>
				</div>
				<h4>Đăng ký thông tin</h4>
				 @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
				<form  action="admin/khachhang/lienhe" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Họ Và Tên</label>
				    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ Và Tên">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Số Điện Thoại</label>
				    <input type="sdt"  name="sdt" class="form-control" id="exampleInputPassword1" placeholder="Số Điện Thoại">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputPassword1">Địa Chỉ</label>
				    <input type="diachi" name="diachi" class="form-control" id="exampleInputPassword1" placeholder="Địa Chỉ">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputPassword1">Ghi Chú </label>
				    <input   type="content" name="content" class="form-control" id="exampleInputPassword1" placeholder="Ghi Chú"  >
				   
				  </div>
					
				  <button type="submit"  name="submit" value="submit" class="commit" class="btn btn-primary" onclick="click()">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script>
		// $(document).ready(function(){
		// 	$(".commit").click(function(){
		// 		m=$(".")
		// 	});
		// });

		function click(){
			alert("Đăng ký thành công");
		}
	</script>
@endsection