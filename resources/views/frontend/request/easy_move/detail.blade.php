@extends('frontend.app')
@section('content')

    <div id = "easyMoveContent">
        <header>
            <div class="header-img">
                {!! Html::image('frontend/assets/img/icons/user.png') !!}
            </div>
            <div class = "header-img" style="position: relative;left: -4px;">
                {!! Html::image('frontend/assets/img/icons/history.png') !!}
            </div>
        </header>
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
                                    <div class="card-header">{{__('string.moving_info')}}</div>
                                    <ul class="timeline">
                                        <li class="current-location">
                                            <span>{{__('string.moving_location')}}</span>
                                        </li>
                                        <li class="destination-location">
                                            <span>{{__('string.moving_destination')}}</span>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            {!! Html::image("frontend/assets/img/icons/calendar.png",'calendar',['style' => 'width: 30px;height: 22px;']) !!}
                                            {{__('string.moving_time')}}
                                            <p class="detail" id="myTimeBtn">
                                                {{__('string.set_time')}}<i class="fa fa-angle-right direct"></i></p>
                                            <input type="hidden" id = "movingTime" value = "">
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
                                        Big baggage<span style="color: #999;font-weight: 100;">(washer,refrigerator...)</span>
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
                                        {{__('string.upload_photo')}}<i class="fa fa-angle-right direct"></i>
                                    </p>
                                </div>
                                <ul>
                                    <li style="z-index: 0;min-width: 287px;padding:10px;border-bottom: 1px solid rgba(0,0,0,.125);">
{{--                                        <input type="radio" id="hOne" name="hOne" style="display: none;">--}}
{{--                                        <input type="radio" id="hTwo"  name = "hTwo" style="display: none;">--}}
{{--                                        <input type="checkbox" id="hSmall" name = "hSmall" style="display: none;">--}}

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
                    <span style="font-size: 12px;position: relative;bottom: 13px;">
           This is test example<a href="#" style="color: #947054;font-size: 12px;">{{__('string.note_link')}}</a></span>
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
                                {!! link_to_route('easy_move.preview', __('string.preview'), session()->get('vehicle_id')) !!}
                                <button type="button" class="btn south-btn resv-btn" data-toggle="modal" data-target="#reservationModal">{{__('string.reservation_btn')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        {{--Reservation Modal Start--}}
        <div class="modal" id="reservationModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header" style="border:unset;">
                    <p class="reservation-price">$230</p>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="min-height: 140px;">
                    <div class="col-12">
                        <div class="content-sidebar">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" >
                                    {!! Html::image("frontend/assets/img/icons/wechat.png",'calendar',['class' => 'reservation-img']) !!}
                                    Wechat
                                    <div class="custom-control custom-radio custom-control-inline" style="float: right">
                                        <input type="radio" class="custom-control-input" id="wechatRadio" name="wechat" value="wechat">
                                        <label class="custom-control-label" for="wechatRadio">&nbsp</label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    {!! Html::image("frontend/assets/img/icons/zhubao.png",'calendar',['class' => 'reservation-img']) !!}
                                    Zhubao
                                    <div class="custom-control custom-radio custom-control-inline" style="float: right">
                                        <input type="radio" class="custom-control-input" id="zhubaoRadio" name="zhubao" value="zhubao">
                                        <label class="custom-control-label" for="zubaoRadio">&nbsp</label>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    {{--                <button type="button" id = "reservationBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>--}}
                    {!! Form::submit('Submit',['id' => 'reservationBtn','class'=>'btn south-btn m-1','data-dismiss' => 'modal'])!!}
                </div>

            </div>
        </div>
        {{--Reservation Modal End--}}
    <!-- Time Modal -->
        <div id="timeModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul style="padding: 3px;">
                            <li><span class = "time-setting" id = "setting">Setting</span></li>
                            <li style="float: right;"><span id = "close" class = "time-setting" >Exit</span></li>
                        </ul>

                    </div>
                    <!-- Nav End -->
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="input-group date">
                            <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY" style="margin-top: 15%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Time Modal End--}}
    <!-- The EasyMove Detail Modal -->
        <div class="modal" id="vehicleSelModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <ul id="vehiclesTab" class="nav">
                        @foreach($vehicles as $index => $vehicle)
                            <li id="li{{$index}}" class="nav-item active">
                                <a href="#vehicle{{$index}}"  class="nav-link active">{{$vehicle->name}}</a>
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
                <div class="modal-body" style="padding: 1rem;">
                    <div class="item-description">
                        <textarea id = "itemDescription" rows = "4" cols ="10" placeholder="Please enter moving item description."></textarea>
                        <div class="clear-description">
                            <span>200character</span>
                            <span id = "" style="float: right;">{{__('string.clear')}}</span>
                        </div>
                    </div>
                    <div class="history-description">
                        <p>This is test</p>
                        <p>This is test</p>
                        <p>This is test</p>
                    </div>
                    <div class="upload-photo">
                        <p style="font-size: 15px;font-weight: bold">Upload Photo</p>
{{--                        <div class="upload-photo-image">--}}
{{--                            {!! Html::image('frontend/assets/img/icons/camera.png','take photo')!!}--}}
{{--                            <input type="file" id = "fileUpload" name = "fileUpload" style="display: none">--}}

{{--                            <p>Upload</p>--}}
{{--                        </div>--}}
                        <div class="photo-multi-thumb" data-name = "main_photo" data-required = "true"></div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "photoSettingBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>
                </div>

            </div>
        </div>
        {{--The Moving Items and Photo End --}}
        {{--The Special Item Modal Start--}}
        <div class="modal" id="specialItemModal" tabindex="-1" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="big-item-title">Big Item</span>
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
                        <p>Add Item</p>
                        <div style="text-align: center;">
                            {!! Html::image('frontend/assets/img/icons/minus.png','minus button',['class' => 'min-button']) !!}
                            <span id="qty" name="qty" style="padding: 15px;">1</span>
                            {!! Html::image('frontend/assets/img/icons/plus.png','minus button',['class' => 'plus-button']) !!}
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id = "specialItemBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>
                </div>

            </div>
        </div>
        {{--The Special Item Modal End--}}

    </div>
@endsection
@section('scripts')
    {!! Html::script('frontend/assets/js/custom-modal.js') !!}
    {!! Html::script('frontend/assets/js/upload-photo.js') !!}
    <script type="text/javascript">
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
        let selectedVehicleId = 1;
        let selectedVehicle = null;
        let selectedIndex = 0;

        let distancePrices = [];

        $("#addBaggage").hide();

        // Calculate total price for changed statement.
        function calcTotalPrice() {
            let totalPrice = selectedVehicle.init_price;
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

            totalPrice += (handlingService ? 1 : 0) * selectedVehicle.init_price_for_items;

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

            totalPrice += (floorFrom + floorTo) * selectedVehicle.price_per_floor;
            totalPrice += selectedVehicle.price_per_big_item * big_item;
            totalPrice += (floorFrom + floorTo) * big_item * selectedVehicle.price_per_floor_for_big_item;

            $('#displayPrice').text(totalPrice);
        }
        // Click Location
        $('.current-location').on('click', function() {
            window.location.href = "/current_location/1";
        });
        $('.destination-location').on('click',function () {
            window.location.href = "/destination_location/2";
        });

        //Click Select Truck Button
        $("#selTruckBtn").click(function(){
            $("#vehicleSelBtn").text(selectedVehicle.name);

            putSession('vehicle_id', selectedVehicle.id);

            calcTotalPrice();
        });

        //Click select model
        $('#vehicleSelBtn').click(function(e){
            $('.tab-pane').removeClass('show active');
            $('#vehicle'+selectedIndex).addClass('show active');
        });

        // When click a vehicle on popup modal
        $('.modal-header').on('click', 'li', function() {
            selectedIndex = $(this)[0].id.substring(2, 3);
            selectedVehicle = vehicles[selectedIndex];
            selectedVehicleId = selectedVehicle.id;

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

            putSession('big_item', big_item);

            calcTotalPrice();
        });

        // When click submit button.
        $("#reservationBtn").click(function () {
            // e.preventDefault();
            let big_item = 0;let when = "";let photo_0 = "";let photo_1 = "";let photo_2 = "";let description = "";let phone = "";
            let where_from = ""; let floor_from =""; let where_to = "";let floor_to = "";

            big_item = $('#qty').text();
            when = $('#movingTime').val();
            description = $('#itemDescription').val();
            phone = $('#phoneNum').val();
            price = $('#displayPrice').text();
            // $.ajax({
            //     type:'POST',
            //     url:'/booking.submit',
            //     data:{user_id:1, vehicle_id:vehicle_id, big_item:big_item, where_from:where_from, floor_from:floor_from, where_to:where_to, floor_to:floor_to,
            //         when:when, description:description,phone:phone, photo_0:photo_0, price:price},
            //     success:function(data){
            //         alert(data.success);
            //     }
            // });

        });

        // Add Baggage Scripts
        $('#handlingService').click(function() {
            if(this.checked) {
                $("#addBaggage").show();
            } else {
                $("#addBaggage").hide();
            }
            handlingService = this.checked;

            putSession('handlingService', handlingService);

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

            putSession('helper_count', helper_count);
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

        function getSelectedVehicle(id) {
            for (let i = 0 ; i < vehicles.length ; i ++) {
                if (parseInt(id) === vehicles[i].id) {
                    selectedIndex = i;
                    return vehicles[i];
                }
            }
            return null;
        }

        function putSession(key, value) {
            $.ajax({
                type: 'POST',
                url: '/put_session',
                data: {key: key, value: value}
            });
        }

        $(document).ready( function() {
            photoMultiThumb.init();
            vehicles = {!! $vehicles !!};

            @foreach($vehicles as $vehicle)
                distancePrices.push({!! $vehicle->distancePrices !!});
            @endforeach

            selectedVehicle = vehicles[0];

            let sessionData = {!! json_encode(session()->all(), JSON_FORCE_OBJECT) !!};
            if (!sessionData) {
                return;
            }
            let vId = {!! session()->get('vehicle_id') !!};
            console.log(vId);
            if (sessionData.vehicle_id) {
                selectedVehicle = getSelectedVehicle(sessionData.vehicle_id);
            }

            $("#vehicleSelBtn").text(selectedVehicle.name);

            $('#handlingService')[0].checked = handlingService = sessionData.handlingService ? sessionData.handlingService : 0;
            $('#addBaggage').show(handlingService);

            big_item = sessionData.big_item ? sessionData.big_item : 0;
            $('#itemCount').text(big_item);
            $('#qty').text(big_item);

            when = sessionData.when ? sessionData.when : '';
            if (when.length) {
                $('#myTimeBtn').text(when);
            }

            helper_count = sessionData.helper_count ? sessionData.helper_count : 0;
            if (parseInt(helper_count) === 1) {
                $('#one').addClass('checked');
            } else if (parseInt(helper_count) === 2) {
                $('#two').addClass('checked');
            } else if (parseInt(helper_count) === 3) {
                $('#one').addClass('checked');
                $('#small').addClass('checked');
            } else {
                $('#two').addClass('checked');
                $('#small').addClass('checked');
            }

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
