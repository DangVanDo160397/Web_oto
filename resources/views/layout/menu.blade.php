
<div class="main-bar bounce">
	<div class="container">
		<nav class="main-nav">
			<button class="menu-btn" type="button"><i></i></button>
			<ul> 
				<li><a class="smooth" href="trangchu" title="">Trang Chủ</a></li>               
				<li><a class="smooth" href="trangchu" title="">Sản Phẩm</a>
					<ul>

						@foreach($category as $tl)
						<li><a href="chitiet2/{{$tl->id}}">{{$tl->name}}</a>
							<?php
								$product=$tl->product->where('fk_category_id', $tl->id)->take(5); 						
							?>
							<ul>
								@foreach($product as $key=> $pr)
								<li><a href="chitiet/{{$pr->id}}">{{$pr->nameproduct}}</a></li>
								@endforeach
							</ul>
						</li>

						@endforeach
					</ul>
				</li>
				<li><a class="smooth" href="trangchu" title="">Tư Vấn</a></li>
				<li><a class="smooth" href="lienhe" title="">Liên Hệ</a></li>
				<li><a class="smooth" href="tintuc" title="">Tin Tức</a></li>
				

			</ul>
		</nav>
	</div>
</div>