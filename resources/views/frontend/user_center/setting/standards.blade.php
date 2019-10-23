@extends('frontend.user_center.layout')

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
		<div class="tabbable-line m-t-20" style="margin-bottom: -20px;">
			<div class="tab-content">
				@for ($i = 0; $i < count($vehicles); $i ++)
					<div class="tab-pane" id="vehicle_name{{ $i }}">
						<h4 style="font-weight: bold; text-align: center;">{{ $vehicles[$i]->name }}</h4>
					</div>
				@endfor
			</div>
		</div>

		<!-- Swiper -->
	  	<div class="swiper-container">
		    <div class="swiper-wrapper">
				@foreach ($vehicles as $vehicle)
					<div class="swiper-slide">
						<img class="w-100p" style="height: 100px; background-color: white;" src="storage/{{ $vehicle->photo_0 }}" alt="">
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

	  	<div class="tabbable-line m-t-20">
			<div class="tab-content">
                @for ($i = 0; $i < count($vehicles); $i ++)
                    <div class="tab-pane" id="vehicle_info{{ $i }}">
                        <span>Basic fare</span>
                        <table class="table table-striped table-hover">
                            @for ($j = 0; $j < count($vehicles[$i]->distancePrices); $j ++)
                                <tr>
                                    <td>
                                        {{ $vehicles[$i]->distancePrices[$j]->from }}~{{ $vehicles[$i]->distancePrices[$j]->to }}km
                                    </td>
                                    <td>
                                        {{ $vehicles[$i]->distancePrices[$j]->amount }} yuan
                                    </td>
                                </tr>
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
				$("#vehicle_info0").addClass("active");
				$("#vehicle_name0").addClass("active");
			});

	    	var swiper = new Swiper('.swiper-container', {
		      	effect: 'cube',
		      	grabCursor: true,
		      	cubeEffect: {
			        shadow: false,
			        slideShadows: false,
			        shadowOffset: 20,
			        shadowScale: 0.94,
		      	},
		      	pagination: {
		        	el: '.swiper-pagination',
		      	},
		    });

		    swiper.on('slideChange', function () {
		    	var active_truck = swiper.activeIndex;

				for (var i = 0; i <= 3; i ++) {
					$("#vehicle_info" + i).removeClass("active");
					$("#vehicle_name" + i).removeClass("active");
				}

		    	$("#vehicle_info" + active_truck).addClass("active");
				$("#vehicle_name" + active_truck).addClass("active");
			})

	  	</script>
    </div>
@endsection
