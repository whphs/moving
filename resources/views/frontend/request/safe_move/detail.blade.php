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
                                    <span>{{__('string.moving_location')}}</span>
                                </li>
                                <li class="destination-location">
                                    <span>{{__('string.moving_destination')}}</span>
                                </li>
                            </ul>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    {!! Html::image("frontend/assets/img/icons/garage.png") !!}
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
                            <div class="card-header">Order remark</div>
                            <input type="input" class="form-control" name="orderNote" id="orderNote" placeholder="Enter notes(e.g moving item type)" >
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" style="font-size: 14px;">Contact Number
                                    <input type="input" class="form-control" name="phoneNum" id="phoneNum" placeholder="phone-number" >
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
                            <div class="card-header">Bonus
                                <span onclick="goBonus();" class="btn btn-link btn-sm watch"><span id="usedBonusPrice1">Bonus list</span> ></span>
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

    <!-- footer start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-8" style="padding-right: 15px; padding-left: 15px;">
                    <div>
                        <p style="display: inline-block; font-size: 20px; margin-bottom: 0px; color:#ef6774; line-height: normal">
                            <span id="realPrice"></span>$
                        </p>
                        <span style="text-decoration: line-through;"><span id="totalPrice"></span>$</span>
                    </div>
                    <p style="display: inline-block;">Used bonus price <span id="usedBonusPrice2">--</span>$</p>
{{--                    <a href="/safe_move/preview" style="float: right; position: relative; top: -10px; left: 10px; color: #947054 ">preview</a>--}}
                </div>
                <div class="col-4">
                    <button id="submitBtn" class="btn south-btn" style="margin-top: 10px; min-width: 100px; min-height: 35px;">Submit</button>
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
                        <li><span class="time-setting" id="setting">Setting</span></li>
                        <li style="float: right;"><span id="close" class="time-setting" >Exit</span></li>
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
@endsection

@section('scripts')
    {!! Html::script('frontend/assets/js/custom-modal.js') !!}

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
        let distancePrices = [];
        let floorPrices = [];

        let scale;

        function calcTotalPrice() {
            let totalPrice = scale.init_price;
            let distancePrice = 0;
            let offset = 0;
            let floorFromPrice = 0;
            let floorToPrice = 0;

            for (let i = 0 ; i < distancePrices.length ; i ++) {
                let min = distancePrices[i].from;
                let max = distancePrices[i].to;
                if (distance > min && distance < max)
                    offset = distance - min;
                else
                    if (distance > max)
                        offset = max - min;

                distancePrice += distancePrices[i].amount * offset;
            }
            totalPrice += distancePrice;

            let floorFrom = floor_from;
            let floorTo = floor_to;
            if (floorFrom === 100) {
                floorFrom = 1;
            } else {
                floorFrom --;
            }
            for (let i = 0 ; i < floorPrices.length ; i ++) {
                let min = floorPrices[i].from;
                let max = floorPrices[i].to;
                if (floorFrom > min && floorFrom < max)
                    offset = floorFrom - min;
                else
                    if (floorFrom > max)
                        offset = max - min;

                floorFromPrice += floorPrices[i].amount * offset;
            }
            totalPrice += floorFromPrice;

            if (floorTo === 100) {
                floorTo = 1;
            } else {
                floorTo --;
            }
            for (let i = 0 ; i < floorPrices.length ; i ++) {
                let min = floorPrices[i].from;
                let max = floorPrices[i].to;
                if (floorTo > min && floorTo < max)
                    offset = floorTo - min;
                else
                    if (floorTo > max)
                        offset = max - min;

                floorToPrice += floorPrices[i].amount * offset;
            }
            totalPrice += floorToPrice;

            $('#totalPrice').text(totalPrice);
        }

        $(document).ready(function () {
            scale = {!! $scale !!};
            distancePrices = {!! $scale->distancePrices !!};
            floorPrices = {!! $scale->floorPrices !!};

            let sessionData = {!! json_encode(session()->all(), JSON_FORCE_OBJECT) !!};
            if (!sessionData) {
                return;
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

        }

        $('#datepicker').datepicker('setDate', 'today');
    </script>
@endsection
