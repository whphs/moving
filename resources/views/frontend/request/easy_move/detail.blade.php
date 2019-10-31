@extends('frontend.app')

@section('header')
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
@endsection

@section('content')
    <div id = "easyMoveContent">
        <main>
            <section class="south-contact-area" style ="padding-top:3em;" >
                <div class="container">
                    <!-- select truck start -->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-sidebar">
                                <div class="card" style="margin:10px 0">
                                    <div class="card-header">{{__('string.basic_service')}}</div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            {{__('string.select_model')}}
                                            <i class="fa fa-angle-right direct"></i>
                                            <span class ="detail" id="vehicleSelBtn" data-toggle = "modal" data-target = "#vehicleSelModal"></span>
                                        </li>
                                        <li class="list-group-item" style="padding-top: 8px;padding-bottom: 0;z-index: 0;">
                                            {{__('string.option_service')}}
                                            <label class="switch">
                                                <input type="checkbox" class="primary" id="handlingService">
                                                <span class="slider round"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- select location start -->
                    <div class="row">
                        <div class="col-12">
                            <div class="content-sidebar">
                                <div class="card" style="margin:10px 0">
                                    <div class="card-header">
                                        {{__('string.moving_info')}}
                                    </div>
                                    <ul class="timeline">
                                        <li class="current-location">
                                            <div class="row">
                                                <div class="col-9" style="display: inline-block">
                                                    <span id = "currentArea">{{__('string.moving_location')}}</span>
                                                    {{--                                                    <p id = "currentAreaName" >dfdfd dfasjdf askdfjasd</p>--}}
                                                </div>
                                                <div class="col-3" style="display: inline-block">
                                                    <span id="currentFloor" class="show-floor" ></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="destination-location">
                                            <div class="row">
                                                <div class="col-9" style="display: inline-block">
                                                    <span id = "destinationArea">{{__('string.moving_destination')}}</span>
                                                    {{--                                                    <p id = "destinationAreaName">dfdfd dfasjdf askdfjasd</p>--}}
                                                </div>
                                                <div class="col-3" style="display: inline-block">
                                                    <span id="destinationFloor" class="show-floor"></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            {!! Html::image("frontend/assets/img/icons/calendar.png",'calendar',['style' => 'width: 30px;height: 22px;']) !!}
                                            {{__('string.moving_time')}}
                                            <p class="detail"  id = "selectTimeCon" data-toggle = "modal" data-target = "#timeModal">
                                                {{__('string.set_time')}}<i class="fa fa-angle-right direct"></i></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add big baggage -->
                    <div class="row"  id = "addBaggage"  data-toggle = "modal" data-target = "#specialItemModal">
                        <div class="col-12">
                            <div class="content-sidebar">
                                <div class="card" style="margin:10px 0">
                                    <div class="card-header">
                                        {{__('string.big_baggage')}}<span style="color: #999;font-weight: 100;">{{__('string.big_baggage_example')}}</span>
                                        <i class="fa fa-angle-right direct"></i>
                                        <span id = "itemCount" class="detail"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- order notes start -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="margin:10px 0">
                                <div class="card-header">{{__('string.order_note')}}
                                    <p class="detail" id="photoSelBtn" data-toggle = "modal" data-target = "#movingPhotoModal" style="font-weight: 100">
                                        <span id = "orderNote">{{__('string.upload_photo')}}</span><i class="fa fa-angle-right direct"></i>
                                    </p>
                                </div>
                                <ul>
                                    <li style="z-index: 0;min-width: 287px;padding:10px;border-bottom: 1px solid rgba(0,0,0,.125);">
                                        <button type="button" id = "one" class="btn south-btn follow">{{__('string.one')}}</button>
                                        <button type="button" id = "two" class="btn south-btn follow">{{__('string.two')}}</button>
                                        <button type="button" id = "small" class="btn south-btn follow">{{__('string.small_cart')}}</button>
                                    </li>
                                    <li style="z-index: 0;padding-left: 10px;padding-top: 3px;padding-bottom: 3px;">
                                        <p style="display: inline-block;margin-bottom: 0;margin-top: 4px;">{{__('string.contact_number')}}</p>
                                        <input class="form-control" name="phoneNum" id = "phoneNum" placeholder="13394260131" >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- terms and policy -->
            <div class="container">
                <p style="font-size: 12px;margin-bottom: initial;">{{__('string.note_detail')}}</p>
                <div id="holder">
                    <input type="checkbox" id="checkboxTerm" class="regular-checkbox" /><label for="checkboxTerm"></label>
                    <span style="font-size: 12px; position: relative; bottom: 13px;">
                        This is test example <a href="#" style="color: #947054;font-size: 12px;"> {{__('string.note_link')}}</a>
                    </span>
                </div>
            </div>
            <div class="container" style="position: relative;top:20px;">
                <p>&nbsp</p>
            </div>
            <!-- footer start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="easy-move-footer-price">
                                <span>{{__('string.format_price')}}</span><p id = "displayPrice"></p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="easy-move-footer-price1">
                                {{--                  <a href = "/easy_move_detail/preview">{{__('string.preview')}}</a>--}}
                                {!! link_to_route('easy_move.preview', __('string.preview')) !!}
                                <button type="button" class="btn south-btn resv-btn" data-toggle="modal" data-target="#reservationModal">{{__('string.reservation_btn')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{--        Select time modal--}}
        <div class="modal" id="timeModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="classynav">
                        <ul style="padding: 3px;">
                            <li><span class = "time-setting" id = "timeSetting" data-dismiss = 'modal' >{{__('string.setting')}}</span></li>
                            <li style="float: right;"><span class = "time-setting" data-dismiss = 'modal'>{{__('string.exit')}}</span></li>
                        </ul>

                    </div>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="min-height: 140px;">
                    <div class="container">
                        <div class="input-group date">
                            <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY" style="margin-top: 15%;">
                        </div>
                        {{--                        <div class="date-selector">--}}
                        {{--                            <div class="year" id="year1"></div>--}}
                        {{--                            <div class="month" id="month1"></div>--}}
                        {{--                            <div class="day" id="day1"></div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        {{--Reservation Modal Start--}}
        <div class="modal" id="reservationModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:unset;">
                    <p class="reservation-price" id="reservationPrice"></p>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="min-height: 140px;">
                    <div class="col-12">
                        <div class="content-sidebar">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" >
                                    {!! Html::image("frontend/assets/img/icons/wechat.png",'calendar',['class' => 'reservation-img']) !!}
                                    {{__('string.WeChat')}}
                                    <div class="custom-control custom-radio custom-control-inline wechatRadio" style="float: right">
                                        <input type="radio" class="custom-control-input" id="wechat" name="wechat" value="wechat" checked>
                                        <label class="custom-control-label" for="wechatRadio">&nbsp</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    {!! Html::image("frontend/assets/img/icons/zhubao.png",'calendar',['class' => 'reservation-img']) !!}
                                    {{__('string.ZhuBao')}}
                                    <div class="custom-control custom-radio custom-control-inline zhubaoRadio" style="float: right">
                                        <input type="radio" class="custom-control-input" id = "zhubao" name="zhubao" value="zhubao">
                                        <label class="custom-control-label" for="zubaoRadio">&nbsp</label>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "reservationBtn" class ="btn south-btn m-1" data-dismiss = "modal">Submit</button>
                </div>

            </div>
        </div>
        {{--Reservation Modal End--}}
    <!-- The EasyMove Detail Modal -->
        <div class="modal" id="vehicleSelModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <ul id="vehiclesTab" class="nav">
                        @foreach($vehicles as $index => $vehicle)
                            <li id="li{{$index}}" class="nav-item">
                                {{--                                <a href="#vehicle{{$index}}"  class="nav-link active">{{$vehicle->name}}</a>--}}
                                <p id = "truckTitle{{$index}}" class="nav-link" style="margin-bottom: unset;line-height: unset">{{$vehicle->name}}</p>
                            </li>
                        @endforeach
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </ul>

                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="tab-content">
                        @foreach($vehicles as $index => $vehicle)
                            <div class="tab-pane fade" id="vehicle{{$index}}">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                    <button type="button" id = "selTruckBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.select_car')}}</button>
                </div>

            </div>
        </div>
        <!-- The EasyMove Detail Modal end -->
        {{--The Moving Items and Photo Start --}}
        <div class="modal" id="movingPhotoModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: unset;">
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 29px;margin-right: -3px;">&times;</button>
                </div>
                <!-- Modal body -->

                <div class="modal-body" style="padding-bottom: 1rem;">
                    <div class="item-description">
                        <textarea id = "itemDescription" rows = "3" cols ="10" placeholder="{{__('string.big_item_description')}}"></textarea>
                        <div class="clear-description">
                            <span>{{__('string.200charater')}}</span>
                            <span id = "clearBtn" style="float: right;">{{__('string.clear')}}</span>
                        </div>
                    </div>
                    {{--                    <div class="history-description">--}}
                    {{--                        <div style="padding:7px;">--}}
                    {{--                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i><span id = "historyDes1">This is test</span>--}}
                    {{--                        </div>--}}
                    {{--                        <div style="padding: 7px;">--}}
                    {{--                            <i class="fa fa-clock-o" style="margin-right: 3px;"></i><span id = "historyDes2">This is test</span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="upload-photo">
                        <p style="font-size: 15px;font-weight: bold">{{__('string.upload_photo')}}</p>
                        <div class="photo-multi-thumb" data-name = "main_photo" data-required = "true"></div>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "photoSettingBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.submit')}}</button>
                </div>

            </div>
        </div>
        {{--The Moving Items and Photo End --}}
        {{--The Special Item Modal Start--}}
        <div class="modal" id="specialItemModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="big-item-title">{{__('string.big_item')}}</span>
                    <button type="button" class="close" data-dismiss="modal" style="font-size: 29px;margin-right: -18px;">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="min-height: 390px;">
                    <div class="special-item-group">
                        <div class="special-item">
                            <span>furniture:</span>
                            <span>45kg dkdkdkf fkdf fdfdfdk</span>
                        </div>
                        <div class="special-item">
                            <span>furniture:</span>
                            <span>45kg dkdkdkf fkdf fdfdfdk</span>
                        </div>
                    </div>
                    <div class="add-special-item">
                        <p>{{__('string.add_item')}}</p>
                        <div style="text-align: center;">
                            {!! Html::image('frontend/assets/img/icons/minus.png','minus button',['class' => 'min-button']) !!}
                            <span id="qty" name="qty" style="padding: 15px;">1</span>
                            {!! Html::image('frontend/assets/img/icons/plus.png','minus button',['class' => 'plus-button']) !!}
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "specialItemBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.submit')}}</button>
                </div>

            </div>
        </div>
        {{--The Special Item Modal End--}}

    </div>
@endsection
@section('scripts')
    {!! Html::script('frontend/assets/js/upload-photo.js') !!}
    {{--    loc--}}
    <script type="text/javascript">
        photoMultiThumb.init();

        $('#userCenter').click(function () {
            window.location.href = "/user_center";
        });
        $('#bookingList').click(function () {
            window.location.href = "/bookings";
        });
        $('#bonusList').click(function () {
            window.location.href = "/bonuses/fromAny";
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let handlingService = 0;
        let distance = 0;
        let big_item = 0;
        let when = "";
        let photo_0 = "";
        let photo_1 = "";
        let photo_2 = "";
        let description = "";
        let phone = "";
        let where_from = "";
        let floor_from = 1;
        let where_to = "";
        let floor_to = 1;
        let helper_count = 0;

        let vehicles = null;
        let tempPhotos = null;
        let selectedVehicle = null;
        let selectedIndex = 0;
        let distancePrices = [];

        let totalPrice = 0;

        $("#addBaggage").hide();
        // Calculate total price for changed statement.
        function calcTotalPrice() {
            totalPrice = selectedVehicle.init_price;
            let plusPrice = 0;
            if (distance > selectedVehicle.init_distance) {
                for (let i = 0 ; i < distancePrices[selectedIndex].length ; i ++) {
                    let min = distancePrices[selectedIndex][i].from;
                    let max = distancePrices[selectedIndex][i].to;
                    if (distance > min && distance < max) {
                        let offset = distance - min;
                        plusPrice = distancePrices[selectedIndex][i].amount * offset;
                        break;
                    }
                }
            }
            totalPrice += plusPrice;
            console.log(typeof handlingService + handlingService);
            if (handlingService) {
                totalPrice += selectedVehicle.init_price_for_items;
                let floorFrom = floor_from;
                let floorTo = floor_to;
                if (floorFrom === 100) {
                    floorFrom = 1;
                } else {
                    floorFrom --;
                }
                if (floorTo === 100) {
                    floorTo = 1;
                } else {
                    floorTo --;
                }

                totalPrice += ((floorFrom + floorTo) * selectedVehicle.price_per_floor);

                totalPrice += selectedVehicle.price_per_big_item * big_item;

                totalPrice += (floorFrom + floorTo) * big_item * selectedVehicle.price_per_floor_for_big_item;
            }

            $('#displayPrice').text(totalPrice);
            $('#reservationPrice').text(totalPrice + '{{__('string.money_unit')}}');
        }

        // Click location buttons
        $('.current-location').on('click', function() {
            window.location.href = "/select_location/easy_move/from";
        });

        $('.destination-location').on('click',function () {
            window.location.href = "/select_location/easy_move/to";
        });
        //Click Select Truck Button
        $("#selTruckBtn").click(function(){
            $("#vehicleSelBtn").text(selectedVehicle.name);
            putSession({vehicle_id: selectedVehicle.id});
            calcTotalPrice();
        });
        //Click select model
        $('#vehicleSelBtn').click(function(e){
            $('.tab-pane').removeClass('show active');
            $('#vehicle'+selectedIndex).addClass('show active');
            // $('li'+selectedIndex).children("p").addClass('truck-active');
            // $('li'+selectedIndex).find(".nav-link").addClass('truck-active');
            $("#truckTitle"+selectedIndex).addClass('truck-active');
        });
        // When click a vehicle on popup modal
        $('.modal-header').on('click', 'li', function() {
            selectedIndex = $(this)[0].id.substring(2, 3);
            selectedVehicle = vehicles[selectedIndex];
            // selectedVehicleId = selectedVehicle.id;
            $('p').removeClass('truck-active');
            $(this).children('p').addClass('truck-active');

            $(this).parent().parent().parent().parent().find('.tab-pane').removeClass('show active');
            $(this).parent().parent().parent().parent().find('#vehicle' + selectedIndex).addClass('show active');
        });
        // when change big item's count
        $('.plus-button').on('click', function(){
            let value = $('#qty').text();
            $('#qty').text(parseInt(value) + 1);
        });
        $('.min-button').on('click', function(){
            let value = $('#qty').text();
            if (value > 0) {
                $('#qty').text(value - 1);
            }
        });
        // when select big item's count
        $("#specialItemBtn").click(function () {
            big_item = $('#qty').text();
            $('#itemCount').text(big_item);
            putSession({big_item: big_item});
            calcTotalPrice();
        });

        // Add Baggage Scripts
        $('#handlingService').click(function() {
            if(this.checked) {
                $("#addBaggage").show();
            } else {
                $("#addBaggage").hide();
            }
            handlingService = this.checked ? 1 : 0;
            putSession({handlingService: handlingService});
            calcTotalPrice();
        });
        // Helper Count
        function helperCountChanged(option) {
            if (option === 0) {
                $('#two').removeClass('checked');
                $('#one').addClass('checked');
                if (helper_count > 2) {
                    helper_count = 3;
                } else {
                    helper_count = 1;
                }
            } else if (option === 1) {
                $('#one').removeClass('checked');
                $('#two').addClass('checked');
                if (helper_count > 2) {
                    helper_count = 4;
                } else {
                    helper_count = 2;
                }
            } else {
                if ($('#small').hasClass('checked')) {
                    $('#small').removeClass('checked');
                    helper_count -= 2;
                } else {
                    $('#small').addClass('checked');
                    helper_count += 2;
                }
            }
            putSession({helper_count: helper_count});
        }
        $("#one").click(function(){
            helperCountChanged(0);
        });
        $("#two").click(function(){
            helperCountChanged(1);
        });
        $("#small").click(function(){
            helperCountChanged(2);
        });
        // When clear description
        $('#clearBtn').click(function () {
            $('#itemDescription').val('');
        });
        //When set photo setting
        $('#photoSettingBtn').click(function () {

            description = $('#itemDescription').val();
            $('#orderNote').text(description);
            putSession({description: description});
            // Photo Upload
            let imgArray = [];
            let images = $('.photo-multi-thumb').find('.thumb-image.added');
            if(images.length !== 0){
                for (let i = 0 ; i < images.length ; i ++) {
                    let data = $(images[i]).attr('src');
                    imgArray.push(data);
                }

                $.ajax( {
                    type: 'POST',
                    url: '/upload_photo',
                    data: {imgData: imgArray},
                    success:function(data){
                        for (let i = 0 ; i < data.length ; i ++) {
                            let elem = $('.photo-multi-thumb').find('.photo-view-thumb')[i];
                            if (elem) {
                                $(elem).data('temp_photo_id', data[i]);
                            }
                        }
                    }
                });
            }



        });

        $('.photo-multi-thumb').on('click', '.thumb-remove',  function() {
            let photoId = $(this).parent().data('temp_photo_id');
            $.ajax( {
                type: 'GET',
                url: '/delete_photo/' + photoId,
                success:function(data){
                    console.log(data);
                }
            });
            $(this).parent().remove();
        });
        //When set time

        $('#timeSetting').click(function () {
            when = $('#datepicker').val();
            $('#selectTimeCon').text(when);
            putSession({when: when});
        });
        function getSelectedVehicle(id) {
            for (let i = 0 ; i < vehicles.length ; i ++) {
                if (parseInt(id) === vehicles[i].id) {
                    selectedIndex = i;
                    return vehicles[i];
                }
            }
            return null;
        }
        function putSession(data) {
            $.ajax({
                type: 'POST',
                url: '/put_session',
                data: data
            });
        }

        $(".wechatRadio").on("click", function () {
            $("#wechat").prop("checked",true);
            $("#zhubao").prop("checked",false);
        });
        $(".zhubaoRadio").on("click", function () {
            $("#zhubao").prop("checked",true);
            $("#wechat").prop("checked",false);
        });
        // When click submit button.
        $("#reservationBtn").click(function () {
            let data = {
                user_id: 1,
                vehicle_id: selectedVehicle.id,
                big_item: parseInt(big_item),
                where_from: where_from,
                floor_from: parseInt(floor_from),
                where_to: where_to,
                floor_to: parseInt(floor_to),
                when: when,
                description: description,
                phone: phone,
                distance: distance,
                helper_count: parseInt(helper_count),
                price: totalPrice
            };
            console.log(data);
            $.ajax({
                type:'POST',
                url:'/booking/submit',
                data: data,
                success:function(data){
                    console.log(data);
                }
            });
        });


        $(document).ready( function() {

            vehicles = {!! $vehicles !!};
            tempPhotos = {!! $tempPhotos !!};
            if(tempPhotos)
            {
                for(let i = 0; i < tempPhotos.length; i++){
                    photoMultiThumb.photoAdded(tempPhotos[i].id,tempPhotos[i].path);
                }
            }


            @foreach($vehicles as $vehicle)
            distancePrices.push({!! $vehicle->distancePrices !!});
            @endforeach

                selectedVehicle = vehicles[0];
            let sessionData = {!! json_encode(session()->all(), JSON_FORCE_OBJECT) !!};
            if (!sessionData) {
                return;
            }
            console.log(sessionData);

            if (sessionData.vehicle_id) {
                selectedVehicle = getSelectedVehicle(sessionData.vehicle_id);
            }

            $("#vehicleSelBtn").text(selectedVehicle.name);
            handlingService = sessionData.handlingService ? parseInt(sessionData.handlingService) : 0;

            $('#handlingService')[0].checked = handlingService;
            if (handlingService) {
                $('#addBaggage').show();
            } else {
                $('#addBaggage').hide();
            }
            // when click big item
            big_item = sessionData.big_item ? sessionData.big_item : 0;
            if(big_item === 0) {
                $('#itemCount').text("");
            } else {
                $('#itemCount').text(big_item);
            }
            $('#qty').text(big_item);

            // when click location
            floor_from = sessionData.floor_from ? sessionData.floor_from : 100;
            floor_to = sessionData.floor_to ? sessionData.floor_to : 100;
            where_from = sessionData.where_from ? sessionData.where_from : "";
            where_to = sessionData.where_to ? sessionData.where_to : "";
            let floor = "{{__('string.floor')}}";
            let areaName = "{{__('string.moving_location')}}";
            if(where_from !== "") {
                $('#currentArea').text(where_from);
            } else {
                $('#currentArea').text(areaName);
            }
            if(where_to !== "") {
                $('#destinationArea').text(where_to);
            } else {
                $('#destinationArea').text("{{__('string.moving_destination')}}");
            }
            if(floor_from === 100) {
                $('#currentFloor').text("{{__('string.elevator')}}");
            } else {
                $('#currentFloor').text(floor_from + floor);
            }
            if(floor_to === 100){
                $('#destinationFloor').text("{{__('string.elevator')}}");
            }else{
                $('#destinationFloor').text(floor_to + floor);
            }


            // when set time
            when = sessionData.when ? sessionData.when : '';
            if (when.length) {
                $('#selectTimeCon').text(when);
            }

            helper_count = sessionData.helper_count ? sessionData.helper_count : 0;
            if (parseInt(helper_count) === 1) {
                $('#one').addClass('checked');
            } else if (parseInt(helper_count) === 2) {
                $('#two').addClass('checked');
            } else if (parseInt(helper_count) === 3) {
                $('#one').addClass('checked');
                $('#small').addClass('checked');
            } else if (parseInt(helper_count) === 4) {
                $('#two').addClass('checked');
                $('#small').addClass('checked');
            }
            description = sessionData.description ? sessionData.description : "";
            if(description === "")
            {
                let descriptionStr = "{{__('string.upload_photo')}}";
                $('#orderNote').text(descriptionStr);

            }
            else{
                $('#orderNote').text(description);
            }
            $('#itemDescription').val(description);


            calcTotalPrice();
        });

    </script>
    <script type="text/javascript">
        $('#datepicker').datepicker('setDate', 'today');
    </script>

    <style>
        .south-btn.follow {
            background-color: #947054;
        }
        .south-btn.follow.checked {
            background-color: black;
        }
    </style>
@endsection
