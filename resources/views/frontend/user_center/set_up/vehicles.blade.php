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
		span {
			font-size: 16px;
			font-weight: 600;
			color: #ff6600;
		}
		table {
			margin-top: 5px;
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
									<th style="width: 20%;">Load</th>
									<th style="width: 60%;">Length*Width*High</th>
									<th style="width: 20%;">Volume</th>
								</tr>
								<tr>
									<td>{{ $vehicle->load_weight }}kg</td>
									<td>{{ $vehicle->size }}M</td>
									<td>{{ $vehicle->volume }}</td>
								</tr>
							</table>
						</div>
					</div>
				@endforeach
		    </div>
	    	<!-- Add Pagination -->
	    	<div class="swiper-pagination"></div>
	  	</div>

	  	<div class="tabbable-line mt-20">
			<div class="tab-content">
				@for ($i = 0; $i < count($vehicles); $i ++)
					<div class="tab-pane" id="t{{ $i + 1 }}">
						<span>Basic fare</span>
							<table class="table table-striped table-hover">
								@for ($j = 0; $j < count($pluscosts); $j ++)
									@if (($vehicles[$i]->id == $pluscosts[$j]->vehicle_id) && ($pluscosts[$j]->distance_from == 0))
										<tr>
											<td>
												Starting Price(5km)
											</td>
											<td>
												{{ $pluscosts[$j]->amount }} yuan
											</td>
										</tr>
									@endif

									@if (($vehicles[$i]->id == $pluscosts[$j]->vehicle_id) && ($pluscosts[$j]->distance_from != 0))
										<tr>
											<td>
												Super Mileage({{ $pluscosts[$j]->distance_from }}~{{ $pluscosts[$j]->distance_to }}km)
											</td>
											<td>
											{{ $pluscosts[$j]->amount }} yuan/km
											</td>
										</tr>
									@endif
								@endfor
							</table>
							
						<span>Extermal demand handling</span>
						<table class="table table-striped table-hover">
							<tr>
								<td>
									Preview
								</td>
								<td>
									<a>Help me to calculate the price</a>
								</td>
							</tr>
							<tr>
								<td>
									Trolley
								</td>
								<td>
									Free Admission
								</td>
							</tr>
						</table>
						{{ $vehicles[$i]->description }}
					</div>
				@endfor
			</div>
		</div>

	  	<!-- Swiper JS -->
		{!! Html::script('frontend/assets/js/jquery.js') !!}
		{!! Html::script('frontend/assets/js/swiper.min.js') !!}

	  	<!-- Initialize Swiper -->
	  	<script>
		  	$(document).ready(function () {
				$("#t1").addClass("active");
			});

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