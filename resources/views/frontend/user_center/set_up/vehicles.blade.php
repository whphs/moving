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
	      margin-left: -150px;*/
	      margin-top: 20px;
		  text-align: center;
	    }
	    .swiper-slide {
	      /*background-position: center;
	      background-size: cover;*/
	      height: 150px;
	    }
		img {
			margin-top: 10px;
			height: 30%;
		}
		th {
			text-align: center;
		}
  	</style>

    <div class="container">
        <!-- Swiper -->
	  	<div class="swiper-container">
		    <div class="swiper-wrapper">
				@foreach ($vehicles as $vehicle)
					<div class="swiper-slide">
						<h4 style="font-weight: bold;">{{ $vehicle->name }}</h4>
						<img src="{{ $vehicle->photo_0 }}">
						<div class="mt-10">
							<table style="width: 100%;">
								<tr>
									<th>Load</th>
									<th>Size</th>
									<th>Volume</th>
								</tr>
								<tr>
									<td>{{ $vehicle->load_weight }}</td>
									<td>{{ $vehicle->size }}</td>
									<td>{{ $vehicle->volume }}</td>
								</tr>
							</table>
						</div>
					</div>
				@endforeach
		    </div>
	    	<!-- Add Pagination -->
	    	<!-- <div class="swiper-pagination"></div> -->
	  	</div>

	  	<div class="tabbable-line">
			<div class="tab-content">
				<div class="tab-pane active" id="t1">
					truck_1
				</div>
				<div class="tab-pane" id="t2">
				truck_2
				</div>
				<div class="tab-pane" id="t3">
				truck_3
				</div>
				<div class="tab-pane" id="t4">
				truck_4
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

		    swiper.on('slideChange', function () {
		    	var active_truck = swiper.activeIndex + 1;

				for (var i = 1; i <= 4; i ++) {
					$("#t" + i).removeClass("active");
				}

		    	$("#t" + active_truck).addClass("active");		    	
			})

	  	</script>
    </div>
@endsection