@extends('frontend.app')

@section('content')
    <section class="south-contact-area">
        <div class="container">
            <div class="row">
                <!-- Select location -->
                <div class="col-12 col-lg-6">
                    <div class="content-sidebar">
                        <div class="card" style="margin: 0px 0;">
                            <div class="card-header">{{__('string.moving_info')}}</div>
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
                                    <p class="detail" id="myTimeBtn">{{__('string.set_time')}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Upload baggage photo  -->
                <div class="col-12 col-lg-6">
                    <div class="content-sidebar">
                        <div class="card" style="margin: 10px 0">
                            <div class="card-header">{{__('string.order_remark')}}</div>
                            <div class="item-description" style="margin: 7px;">
                                <textarea id = "itemDescription" rows = "3" cols ="10" placeholder="{{__('string.big_item_description')}}"></textarea>
                                <div class="clear-description">
                                    <span>{{__('string.200character')}}</span>
                                    <span id = "clearBtn" style="float: right;">{{__('string.clear')}}</span>
                                </div>
                            </div>
                            <div class="upload-photo" style="margin-bottom: 10px;padding-left: 8px;margin-top: 0px;">
                                <p style="font-size: 15px;font-weight: bold">{{__('string.upload_photo')}}</p>
                                <div class="photo-multi-thumb" data-name = "main_photo" data-required = "true"></div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 14px;">{{__('string.contact_number')}}
                                    <input type="input" class="form-control" name="phoneNum" id="phoneNum" placeholder="13394260131" >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coupon -->
            <div class="row">
                <div class="col-12">
                    <div class="content-sidebar">
                        <div class="card" style="margin: 10px 0">
                            <div class="card-header">{{__('string.bonus')}}
                                <span onclick="goBonus();" class="btn btn-link btn-sm watch">
                                <span id="usedBonusPrice">{{__('string.bonus_list')}}</span>
                                <i class="fa fa-angle-right" style="padding-left: 3px;"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note description -->
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 12px;">after confirming the order, customer service will call you for details as soon as possible.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="position: relative; top:20px;">
        <p>&nbsp</p>
    </div>

    <!-- footer start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-8" style="padding-right: 15px; padding-left: 15px;">
                    <div style="position: relative;top: 5px;">
                        <p style="display: inline-block; font-size: 20px; margin-bottom: 0px; color:#ef6774; line-height: normal">
                            {{__('string.format_price')}}<span id="realPrice"></span>
                        </p>
                        <span style="text-decoration: line-through;"><span id="totalPrice"></span></span>
                    </div>
                    <p style="display: inline-block;">{{__('string.used_bonus_price')}} <span id="bonusPrice">--</span>{{__('string.money_unit')}}</p>
{{--                    <a href="/safe_move/preview" style="float: right; position: relative; top: -10px; left: 10px; color: #947054 ">preview</a>--}}
                </div>
                <div class="col-4">
                    <button type="button" class="btn south-btn resv-btn" data-toggle="modal" data-target="#reservationModal" style="margin-top: 2px;">{{__('string.reservation_btn')}}</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Time Modal -->
    <div id="timeModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <!-- Nav Start -->
                <div class="classynav">
                    <ul style="padding: 3px;">
                        <li><span class="time-setting" id="setting">{{__('string.setting')}}</span></li>
                        <li style="float: right;"><span id="close" class="time-setting">{{__('string.exit')}}</span></li>
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
                {{--                <button type="button" id = "reservationBtn" class ="btn south-btn m-1" data-dismiss="modal">Submit</button>--}}
                {!! Form::submit('Submit',['id' => 'reservationBtn','class'=>'btn south-btn m-1','data-dismiss' => 'modal'])!!}
            </div>
        </div>
    </div>
    {{--Reservation Modal End--}}
@endsection

@section('scripts')
    {!! Html::script('frontend/assets/js/custom-modal.js') !!}
    {!! Html::script('frontend/assets/js/upload-photo.js') !!}


    <script type="text/javascript">
        photoMultiThumb.init();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
        let distancePrices = [];
        let floorPrices = [];
        let realPrice = 0;
        let bonusPrice = 0;
        let bonusId = 0;

        let scales = null;
        let selectedScale = null;
        let selectedIndex = 0;

        function calcTotalPrice() {
            let totalPrice = selectedScale.init_price;
            let distancePrice = 0;
            let offset = 0;
            let floorFromPrice = 0;
            let floorToPrice = 0;

            for (let i = 0 ; i < distancePrices[selectedIndex].length ; i ++) {
                let min = distancePrices[selectedIndex][i].from;
                let max = distancePrices[selectedIndex][i].to;
                if (distance > min && distance < max)
                    offset = distance - min;
                else
                    if (distance > max)
                        offset = max - min;

                distancePrice += distancePrices[selectedIndex][i].amount * offset;
            }
            totalPrice += distancePrice;

            let floorFrom = floor_from;
            let floorTo = floor_to;
            if (floorFrom === 100) {
                floorFrom = 1;
            } else {
                floorFrom --;
            }
            for (let i = 0 ; i < floorPrices[selectedIndex].length ; i ++) {
                let min = floorPrices[selectedIndex][i].from;
                let max = floorPrices[selectedIndex][i].to;
                if (floorFrom > min && floorFrom < max)
                    offset = floorFrom - min;
                else
                    if (floorFrom > max)
                        offset = max - min;

                floorFromPrice += floorPrices[selectedIndex][i].amount * offset;
            }
            totalPrice += floorFromPrice;

            if (floorTo === 100) {
                floorTo = 1;
            } else {
                floorTo --;
            }
            for (let i = 0 ; i < floorPrices[selectedIndex].length ; i ++) {
                let min = floorPrices[selectedIndex][i].from;
                let max = floorPrices[selectedIndex][i].to;
                if (floorTo > min && floorTo < max)
                    offset = floorTo - min;
                else
                    if (floorTo > max)
                        offset = max - min;

                floorToPrice += floorPrices[selectedIndex][i].amount * offset;
            }
            totalPrice += floorToPrice;

            realPrice = totalPrice;

            $('#realPrice').text(realPrice);
            $('#reservationPrice').text(realPrice + '$');

            if (bonusPrice != 0)
            {
                realPrice = totalPrice - bonusPrice;
                $('#realPrice').text(realPrice);
                $('#totalPrice').text(totalPrice + '$');
                $('#bonusPrice').text(bonusPrice);
                $('#usedBonusPrice').text(bonusPrice + '{{__('string.money_unit')}}');
            }
        }

        // When clear description
        $('#clearBtn').click(function () {
            $('#itemDescription').val('');
        });

        $('#setting').click(function () {
            when = $('#datepicker').val();
            $('#myTimeBtn').text(when);
            putSession({when: when});
        });

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

        $("#reservationBtn").click(function () {
            let data = {
                user_id: 1,
                scale_id: selectedScale.id,
                big_item: parseInt(big_item),
                where_from: where_from,
                floor_from: parseInt(floor_from),
                where_to: where_to,
                floor_to: parseInt(floor_to),
                when: when,
                description: $('#itemDescription').val(),
                phone: $('#phoneNum').val(),
                distance: distance,
                price:  parseInt(realPrice),
                bonus_id: parseInt(bonusId),
            };

            description = $('#itemDescription').val();
            putSession({description: description});
            phone = $('#phoneNum').val();
            putSession({phone: phone});

            console.log(data);
            $.ajax({
                type:'POST',
                url:'/booking/submit',
                data: data,
                success:function(data){
                    alert(data.success);
                }
            });
        });

        function getSelectedScale(id) {
            for (let i = 0 ; i < scales.length ; i ++) {
                if (parseInt(id) === scales[i].id) {
                    selectedIndex = i;
                    return scales[i];
                }
            }
            return null;
        }

        $(document).ready(function () {
            scales = {!! $scales !!};

            @foreach($scales as $scale)
            distancePrices.push({!! $scale->distancePrices !!});
            @endforeach

            @foreach($scales as $scale)
            floorPrices.push({!! $scale->floorPrices !!});
            @endforeach

            selectedScale = scales[0];

            let sessionData = {!! json_encode(session()->all(), JSON_FORCE_OBJECT) !!};
            if (!sessionData) {
                return;
            }

            if (sessionData.scale_id) {
                selectedScale = getSelectedScale(sessionData.scale_id);
            }

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
            if(floor_from === 100) {
                $('#currentFloor').text("{{__('string.elevator')}}");
            } else {
                $('#currentFloor').text(floor_from + floor);
            }
            if(where_to !== "") {
                $('#destinationArea').text(where_to);
            } else {
                $('#destinationArea').text(areaName);
            }
            if(floor_to === 100){
                $('#destinationFloor').text("{{__('string.elevator')}}");
            }else{
                $('#destinationFloor').text(floor_to + floor);
            }

            // when set time
            when = sessionData.when ? sessionData.when : '';
            if (when.length) {
                $('#myTimeBtn').text(when);
            }

            description = sessionData.description ? sessionData.description : '';
            if (description.length) {
                $('#itemDescription').text(description);
            }

            phone = sessionData.phone ? sessionData.phone : '';
            if (phone.length) {
                $('#phoneNum').val(phone);
            }

            distance = 0;
            if (sessionData.bonus_id)
            {
                bonusId = sessionData.bonus_id;
                bonusPrice = sessionData.bonus_price;
            }

            console.log(sessionData);

            calcTotalPrice();
        });

        $('.current-location').on('click', function() {
            window.location.href = "/select_location/safe_move/from";
        });

        $('.destination-location').on('click',function () {
            window.location.href = "/select_location/safe_move/to";
        });

        function goBonus() {
            window.location.href = '/bonuses/fromDetail';
        }

        $('#datepicker').datepicker('setDate', 'today');
    </script>
@endsection
