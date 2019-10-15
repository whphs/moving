@extends('frontend.user_center.app')

@section('title', 'Charging Standard')

@section('content')
	<!-- Demo styles -->
  	<style>
	    html, body {
	      position: relative;
	      height: 100%;
	    }
	    body {
	      background: #fff;
	      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	      font-size: 14px;
	      color:#000;
	      margin: 0;
	      padding: 0;
	    }
	    .swiper-container {
	      width: 300px;
	      height: 100px;
	      position: absolute;
	      left: 50%;
	      top: 30%;
	      margin-left: -150px;
	      margin-top: -150px;
	    }
	    .swiper-slide {
	      background-position: center;
	      background-size: cover;
	    }
  	</style>

    <div class="container">
        <!-- Swiper -->
	  	<div class="swiper-container">
		    <div class="swiper-wrapper">
		      	<div class="swiper-slide" style="background-image:url(frontend/assets/image/truck1.png)"></div>
		      	<div class="swiper-slide" style="background-image:url(frontend/assets/image/truck2.png)"></div>
		      	<div class="swiper-slide" style="background-image:url(frontend/assets/image/truck3.png)"></div>
		      	<div class="swiper-slide" style="background-image:url(frontend/assets/image/truck4.png)"></div>
		    </div>
	    	<!-- Add Pagination -->
	    	<div class="swiper-pagination"></div>
	  	</div>

	  	<div class="tabbable-line" style="margin-top: 200px; text-align: center;">
			<!-- <ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_15_1" data-toggle="tab">
					Convenient Moving</a>
				</li>
				<li style="float: right;">
					<a href="#tab_15_2" data-toggle="tab">
					Care-Free Moving</a>
				</li>
			</ul> -->
			<div class="tab-content">
				<div class="tab-pane active" id="truck_1">
					1
				</div>
				<div class="tab-pane" id="truck_2">
					2
				</div>
				<div class="tab-pane" id="truck_2">
					3
				</div>
				<div class="tab-pane" id="truck_2">
					4
				</div>
			</div>
		</div>

	  	<!-- Swiper JS -->
	  	<script src="frontend/assets/js/swiper.min.js"></script>

	  	<!-- Initialize Swiper -->
	  	<script>
	    	var swiper = new Swiper('.swiper-container', {
		      	effect: 'cube',
		      	grabCursor: true,
		      	cubeEffect: {
			        shadow: true,
			        slideShadows: true,
			        shadowOffset: 20,
			        shadowScale: 0.94,
		      	},
		      	pagination: {
		        	el: '.swiper-pagination',
		      	},
		    });

		    swiper.on('slideNextTransitionEnd',function(){
				$("#truck_2").append("class", "active");
			})

			swiper.on('slidePrevTransitionEnd',function(){
				alert("prev");
			})

	  	</script>
    </div>
@endsection