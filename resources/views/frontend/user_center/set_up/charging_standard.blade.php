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
	      /*height: 120px;
	      position: absolute;
	      left: 50%;
	      top: 30%;
	      margin-left: -150px;
	      margin-top: -150px;*/
	    }
	    .swiper-slide {
	      /*background-position: center;
	      background-size: cover;*/
	      height: 130px;
	    }
  	</style>

    <div class="container">
        <!-- Swiper -->
	  	<div class="swiper-container">
		    <div class="swiper-wrapper">
		      	<div class="swiper-slide"><img src="frontend/assets/image/truck1.png" style="width: 100%;"></div>
		      	<div class="swiper-slide"><img src="frontend/assets/image/truck2.png" style="width: 100%;"></div>
		      	<div class="swiper-slide"><img src="frontend/assets/image/truck3.png" style="width: 100%;"></div>
		      	<div class="swiper-slide"><img src="frontend/assets/image/truck4.png" style="width: 100%;"></div>
		    </div>
	    	<!-- Add Pagination -->
	    	<!-- <div class="swiper-pagination"></div> -->
	  	</div>

	  	<div class="tabbable-line">
			<div class="tab-content">
				<div class="tab-pane active" id="t1">
					1
				</div>
				<div class="tab-pane" id="t2">
					2
				</div>
				<div class="tab-pane" id="t3">
					3
				</div>
				<div class="tab-pane" id="t4">
					4
				</div>
			</div>
		</div>

	  	<!-- Swiper JS -->
	  	<script src="frontend/assets/js/swiper.min.js"></script>

	  	<!-- Initialize Swiper -->
	  	<script>
	    	var swiper = new Swiper('.swiper-container', {
		      	// effect: 'cube',
		      	// grabCursor: true,
		      	// cubeEffect: {
			      //   shadow: true,
			      //   slideShadows: true,
			      //   shadowOffset: 20,
			      //   shadowScale: 0.94,
		      	// },
		      	// pagination: {
		       //  	el: '.swiper-pagination',
		      	// },
		    });

		    swiper.on('slideNextTransitionEnd', function () {
		    	var prev_truck = swiper.activeIndex;
		    	var active_truck = prev_truck + 1;

		    	$("#t" + active_truck).addClass("active");
		    	$("#t" + prev_truck).removeClass("active");
			})

			swiper.on('slidePrevTransitionEnd', function () {
		    	var prev_truck = swiper.activeIndex;
		    	var active_truck = prev_truck + 1;
		    	prev_truck = active_truck + 1;

		    	$("#t" + active_truck).addClass("active");
		    	$("#t" + prev_truck).removeClass("active");
			})

	  	</script>
    </div>
@endsection