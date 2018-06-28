<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Công Ty Ô Tô Bảo Ngọc</title>
	<link rel="icon" href="image/ico/logo.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome-free-5.0.9/fontawesome-free-5.0.9/svg-with-js/css/fa-svg-with-js.css">
	<script defer src="fontawesome-free-5.0.9/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.js"></script>
	<script defer src="fontawesome-free-5.0.9/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script><script>new WOW().init();</script>

	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="script.js">
	<script type="text/javascript"></script>
	@yield('css')

</head>
<body>
	<!-- header -->
	<a id="cl" class="animated wobble" href="0973513303"><i class="fas fa-phone"  ></i></a>
	<button id="myBtn">Top</button>
	<div class="container header">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 col-md-offset-2">
				<h1 class="animated bounce">
					<a href="trangchu"><img src="image/ico/logo.png" alt="" style="width: 100px;margin-top: -14px;"></a>
				</h1>
			</div>
			<div class="col-md-5 col-lg-3 col-sm-12 col-xs-12 ">
				<form action="search" method="POST">
					<div class="input-group search">
			           {{--  <div class="input-group-btn search-panel">
			                <button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
			                	<span id="search_concept">Sản Phẩm</span> <span class="caret"></span>
			                </button>
			                <ul class="dropdown-menu" role="menu">
			                  <li><a href="#contains">Contains</a></li>
			                  <li><a href="#its_equal">It's equal</a></li>
			                  <li><a href="#greather_than">Greather than ></a></li>
			                  <li><a href="#less_than">Less than  </a></li>
			                </ul>
			            </div> --}}
			            {{-- <input type="hidden" name="search_param" value="all" id="search_param">   --}} 
			            <input type="hidden" name="_token" value="{{csrf_token()}}";>      
			            <input type="text" class="form-control" name="keysearch" placeholder="Search Sản Phẩm...">
			            <span class="input-group-btn">
			                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
			            </span>
		        	</div>
	        	</form>
			</div>
			<div class="col-md-3 ">
				<div class="calla">
						<img class="animated rubberBand" src="image/call2.jpg" alt="">   0975912585
				</div>
			</div>
		</div>	
	</div>
	<!-- menu -->
	@include('layout.menu')
	
	@include('layout.slide')
	

	<!-- content -->
	
	
	@yield('content')

	
	<!-- footer -->
	@include('layout.footer')
	
	<script src="theme/frontend/js/jquery-2.2.1.min.js" defer></script>
	<script src="theme/frontend/js/bootstrap.min.js" defer></script>
	<script src="theme/frontend/js/wow.js" defer></script>
	<script src="theme/frontend/js/jquery.nivo.slider.pack.js" defer></script>
	<script src="theme/frontend/js/slick.min.js" defer></script>
	<script src="wow.js" defer></script>
	<script src="theme/frontend/zoom/cloudzoom.js" defer></script>
	<script src="theme/frontend/fancybox/jquery.fancybox.pack.js" defer></script>
	<script src="theme/frontend/fancybox/helpers/jquery.fancybox-thumbs.js" defer></script>

	<script src="theme/frontend/js/script.js" defer></script>
	<script type="text/javascript">
		$(document).ready(function(e){
    	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
			});
		});


	</script>
	 <script>
      	new WOW().init();
      </script>
     <script>
     	
		// chay từ dưới lên trên
			document.getElementById('myBtn').onclick = function () {
				    scrollTo1(0, 200);
				}
				function scrollTo1(to, duration) {
				    // debugger
				    console.log(window.scrollY);
				    if (duration < 0) return;
				    var difference = to - window.scrollY;
				    var perTick = difference / duration * 2;

				    setTimeout(function() {
				        var valY = window.scrollY + perTick;
				        window.scrollTo(0, valY);
				        scrollTo1(to, duration - 2);
				    },10);
				}
     </script>
</body>
</html>


