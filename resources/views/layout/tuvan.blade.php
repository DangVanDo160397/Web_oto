@extends('layout.index')
@section('content')
	<div class="container ct2">
		<div class="row">
			@include('layout.menuleft')
			<div class="col-md-8">
				<h4>Đăng ký thông tin để được liên hệ</h4>
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Họ Và Tên</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ Và Tên">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Số Điện Thoại</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Số Điện Thoại">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputPassword1">Địa Chỉ</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Địa Chỉ">
				  </div>
				   <div class="form-group">
				    <label for="exampleInputPassword1">Địa Chỉ</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Địa Chỉ">
				  </div>
				
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection