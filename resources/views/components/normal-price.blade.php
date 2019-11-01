<main id="normalPrice" style="opacity: 0">
    <section class="featured-properties-area section-padding-10-50">
        <style>
            .swiper-container {
                width: 300px;
                margin-top: 20px;
                text-align: center;
            }
            .swiper-slide {
                height: 150px;
            }
            th {
                text-align: center;
            }
            span {
                font-size: 16px;
                font-weight: 600;
                /*color: #ff6600;*/
                color: #947054;
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
                            <img style="height: 100px; width: 100%; margin-top: 10px; background-color: white;" src="storage/{{ $vehicle->photo_0 }}" alt="">
                            <div style="margin-top: 10px;">
                                <table style="width: 100%; margin-top: 5px;">
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

            <div class="tabbable-line" style="margin-top: 20px;">
                <div class="tab-content">
                    @for ($i = 0; $i < count($vehicles); $i ++)
                        <div class="tab-pane" id="vehicle_info{{ $i }}">
                            <span>{{__('string.basic_fare')}}</span>
                            <table class="table table-striped table-hover">
                                <tr>
                                    <td>
                                        0~{{ $vehicles[$i]->init_distance }} km
                                    </td>
                                    <td>
                                        {{ $vehicles[$i]->init_price }} $ / km
                                    </td>
                                </tr>
                                @for ($j = 0; $j < count($vehicles[$i]->distancePrices); $j ++)
                                    <tr>
                                        <td>
                                            {{ $vehicles[$i]->distancePrices[$j]->from }}~{{ $vehicles[$i]->distancePrices[$j]->to }} km
                                        </td>
                                        <td>
                                            +{{ $vehicles[$i]->distancePrices[$j]->amount }} $ / km
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
                                        <a style="color: #ff6600" href="/standard/preview/{{ $vehicles[$i]->id }}">{{__('string.help_me_to_figure_out_the_price')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{__('string.trolley')}}
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
    </section>
</main>

{!! Html::script('frontend/assets/js/jquery/jquery-2.2.4.min.js') !!}
{!! Html::script('frontend/assets/js/swiper.min.js') !!}
<script>
    $(document).ready(function () {
        $("#vehicle_info0").addClass("active");
        $("#vehicle_name0").addClass("active");
    });

    let swiper = new Swiper('.swiper-container', {
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
        $('.tab-pane').removeClass('active');

        $("#vehicle_info" + swiper.activeIndex).addClass("active");
        $("#vehicle_name" + swiper.activeIndex).addClass("active");
    })

</script>

