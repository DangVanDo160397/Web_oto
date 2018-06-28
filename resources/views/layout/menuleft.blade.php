<div class="col-md-4 col-lg-4 spaa">
	<div class="danhmuc">
		<div id="dm">
			<h3>
				danh mục sản phẩm
			</h3>
			<div class="ds">
				<ul class="list-group">
					@foreach($category as $tl)
				  <li class="list-group-item"><a href="chitiet2/{{$tl->id}}">{{$tl->name}}</a></li>
				  @endforeach
				</ul>
			</div>
		</div>
	</div>
	<div class="cskh">
		{{-- <img src="image/hotline.jpg" alt=""> --}}
		<div class="call">
			<img src="image/call.jpg" alt="">
			<span id="sdt1">hotline tư vấn</span>
			<br>
			<span id="sdt">0975912585</span>
		</div>
	</div>
</div>