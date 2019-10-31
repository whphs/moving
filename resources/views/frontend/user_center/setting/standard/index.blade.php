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
            color: #000;
            margin: 0;
            padding: 0;
        }
        .swiper-container {
            width: 300px;
            margin-top: 20px;
            text-align: center;
        }
        .swiper-slide {
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
                                    <th style="width: 20%;">{{__('string.load')}}</th>
                                    <th style="width: 60%;">{{__('string.l_w_h')}}</th>
                                    <th style="width: 20%;">{{__('string.volume')}}</th>
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
            <div class="swiper-pagination"></div>
        </div>

        <div class="tabbable-line m-t-20">
            <div class="tab-content">
                @for ($i = 0; $i < count($vehicles); $i ++)
                    <div class="tab-pane" id="vehicle_info{{ $i }}">
                        <span>{{__('string.basic_fare')}}</span>
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>
                                    0~{{ $vehicles[$i]->init_distance }} {{__('string.km')}}
                                </td>
                                <td>
                                    {{ $vehicles[$i]->init_price }} {{__('string.unit_km')}}
                                </td>
                            </tr>
                            @for ($j = 0; $j < count($vehicles[$i]->distancePrices); $j ++)
                                <tr>
                                    <td>
                                        {{ $vehicles[$i]->distancePrices[$j]->from }}~{{ $vehicles[$i]->distancePrices[$j]->to }} {{__('string.km')}}
                                    </td>
                                    <td>
                                        +{{ $vehicles[$i]->distancePrices[$j]->amount }} {{__('string.unit_km')}}
                                    </td>
                                </tr>
                            @endfor
                        </table>

                        <span>{{__('string.external_demand_handling')}}</span>
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>
                                    {{__('string.preview')}}
                                </td>
                                <td>
                                    <a href="/standard/preview/{{ $vehicles[$i]->id }}">{{__('string.help_me_to_figure_out_the_price')}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{__('string.trolley')}}Trolley
                                </td>
                                <td>
                                    {{__('string.free_admission')}}
                                </td>
                            </tr>
                        </table>
                        {{ $vehicles[$i]->description }}
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
@endsection
