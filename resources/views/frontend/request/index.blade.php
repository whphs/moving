@extends('frontend.app')

@section('header')
    <!-- Top Header Area -->
    <header>
        <div class="phone-number d-flex">
            <div class = "icon">
                {!! Html::image('frontend/assets/img/icons/user.png', null, ['id'=>'userCenter']) !!}
            </div>
            <div class="icon">
                {!! Html::image('frontend/assets/img/icons/history.png', null, ['id'=>'bookingList']) !!}
            </div>
            <div class="icon">
                {!! Html::image('frontend/assets/img/icons/bonus.png', null, ['id'=>'bonusList']) !!}
            </div>
            <div class="number">
                {!! link_to('tel:+86 13394260131', $title = '+86 13394260131', $attributes = [], $secure = null) !!}
            </div>
        </div>
    </header>
    <!-- Top slider start -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/img/bg-img/hero1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!--<h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/img/bg-img/hero2.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/img/bg-img/hero3.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!--<h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top slider end -->
    <!-- Tabs Area start -->
    <div class="wrapper">
        <nav class="tabs">
            <div class="selector"></div>
            {!! link_to('easy-move', __('string.easy_move'), $attributes = ['class'=>'active'], $secure = null) !!}
            {!! link_to('safe-move', __('string.safe_move'), $attributes = [], $secure = null) !!}
            {!! link_to('standard-costs', __('string.prices'), $attributes = [], $secure = null) !!}
        </nav>
    </div>
    <!-- Tabs Area end -->
    <div class="section-heading wow fadeInUp">
        <p>{{__('string.easy_moving_notes')}}</p>
    </div>
@endsection('header')

@section('content')
    <main id = "easyMove">
        <!-- Move type start -->
        <section class="featured-properties-area section-padding-10-50">
            <div class="container">
                <div class="row">
                @foreach($vehicles as $indexKey => $value) <!-- Getting vehicles info -->
                    <div class="col-12 col-lg-6" style="margin-bottom: -30px">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                            <div class="property-content">
                                <div class="row">
                                    <div class="col-1" style="padding: unset;margin-right: 10px;">
                                        <p class="location" id = "moveType">
                                            {!! Html::image('storage/' . $value->vehicle_thumb, null, ['style'=>'height:20px;']) !!} </p>
                                    </div>
                                    <div class="col-7 more-btn">
                                        <p class="vehicle-name">{{$value->name}}</p>
                                        <span>{{__('string.format_price')}}{{$value->init_price}}</span>
                                        <p class="vehicle-description">{{$value->description}}</p>
                                        <!-- easy to move modal details button -->
                                        <button id = "vBtn{{$indexKey}}" class = "btn btn-link btn-sm" data-toggle = "modal" data-target = "#vehiclesModal">{{__('string.more_button')}}</button>
                                    </div>
                                    <div class="col-3" style="padding: unset;margin-left: auto;margin-right: auto;">
                                        {!! Html::image('storage/'.$value->baggage_thumb,null, ['style'=>'width:100%;height:78px;']) !!}
                                        <button type="button" class="btn south-btn easy-move-detail" onclick = easyMoveDetails({{$value->id}})>
                                            {{__('string.detail_button')}}
                                        </button>
                                        <input type="hidden" id="detailsBtn{{$value->id}}" value="{{$value->id}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Safe move -->
    </main>
    <!-- Modal area start -->
    <div class="modal" id="vehiclesModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="vehicle-tab">
                    <ul id="vehiclesTab" class="nav">
                        @foreach($vehicles as $index => $vehicle)
                            <li id="li{{$index}}" class="nav-item">
                                {{--                                <a href="#vehicle{{$index}}"  class="nav-link">{{$vehicle->name}}</a>--}}
                                <p id = "truckTitle{{$index}}" class="nav-link" style="margin-bottom: unset;line-height: unset">{{$vehicle->name}}</p>
                                <input type="hidden"  id = "vehicleId{{$index}}" value="{{$vehicle->id}}">
                            </li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="tab-content">
                    @foreach($vehicles as $index => $vehicle)
                        <div class="tab-pane fade" id="vehicle{{$index}}">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        {!! Html::image('storage/'.$vehicle->photo_0,'front truck',['class'=>'easyMoveSlider']) !!}
                                    </div>
                                    <div class="carousel-item">

                                        {!! Html::image('storage/'.$vehicle->photo_1,'middle truck',['class'=>'easyMoveSlider']) !!}
                                    </div>
                                    <div class="carousel-item">

                                        {!! Html::image('storage/'.$vehicle->photo_2,'back truck',['class'=>'easyMoveSlider']) !!}
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>

                            </div>
                            <!-- Truck description -->
                            <div class="row">
                                <div class="col-12 truck-des">
                                    <h6>{{__('string.car_tips')}}</h6>
                                    <p> {{$vehicle->description}}</p>
                                    <div class="truck-des-content">
                                        <p style= "color: #000000d9;">{{__('string.available_items')}} :</p>
                                        <p>{{$vehicle->available_items}}</p>
                                    </div>
                                    <div class="truck-des-content">
                                        <p style= "color: #000000d9; ">{{__('string.unavailable_items')}} : </p>
                                        <p>{{$vehicle->unavailable_items}}</p>
                                    </div>
                                    <div class="truck-des-note">
                                        <p>PS: {{__('string.ps_note')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id = "orderBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.order_now')}}</button>
            </div>

        </div>
    </div>
    <!-- Modal area end -->

    @component('components.safe-move', ['scales' => $scales ])
    @endcomponent
    @component('components.normal-price',['vehicles' =>$vehicles])
    @endcomponent
@endsection
@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            let selectedId = 0;
            $('#userCenter').click(function () {
                window.location.href = "user_center";
            });
            $('#bookingList').click(function () {
                window.location.href = "bookings";
            });
            $('#bonusList').click(function () {
                window.location.href = "bonuses/fromAny";
            });
            $("#orderBtn").click(function(){
                let vehicleId = $('#vehicleId'+selectedId).val();
                easyMoveDetails(vehicleId);
            });
            $('.more-btn').on('click', 'button', function() {
                let moreBtnIndex = $(this)[0].id.substring(4, 5);//get id
                selectedId = moreBtnIndex;
                $('.tab-pane').removeClass('show active');
                $('#vehicle'+moreBtnIndex).addClass('show active');

                $('p').removeClass('truck-active');
                $('#truckTitle' + moreBtnIndex).addClass('truck-active');

            });

            $('.modal-header').on('click', 'li', function() {
                let index = $(this)[0].id.substring(2, 3);//get id
                selectedId = index;
                if($('p').hasClass("truck-active") === true){
                    $('p').removeClass('truck-active');
                    $(this).children('p').addClass('truck-active');
                }else{
                    $(this).children('p').addClass('truck-active');
                }
                $(this).parent().parent().parent().parent().find('.tab-pane').removeClass('show active');
                $(this).parent().parent().parent().parent().find('#vehicle' + index).addClass('show active');
            });

            $('#normalPrice').hide();
            $('#normalPrice').css('opacity', 1);
        });

        function easyMoveDetails(id)
        {
            let vehicleId = $('#detailsBtn'+id).val();
            $.ajax({
                type: 'POST',
                url: '/put_session',
                data: {vehicle_id : vehicleId, user_id : 1}
            });

            window.location.href = "easy_move/detail";
        }
    </script>
@endsection
