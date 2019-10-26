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
                            <span id="real_price"></span>$
                        </p>
                        <span style="text-decoration: line-through;"><span id="total_price"></span>$</span>
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
        $(document).ready(function () {
            let totalPrice = {!! $scale->init_price !!};

            let floorFrom = 0;
            let floorTo = 0;
            let distance = 0;
            let bonusPrice = 80;

            let distancePrices = {!! $scale->distancePrices !!};
            let distancePrice = 0;

            for (let i = 0; i < distancePrices.length; i++) {
                if ((distance > distancePrices[i].from && distance >= distancePrices[i].to)) {
                    distancePrice += (distancePrices[i].to - distancePrices[i].from) * distancePrices[i].amount;
                }

                if ((distance > distancePrices[i].from && distance < distancePrices[i].to)) {
                    distancePrice += (distance - distancePrices[i].from) * distancePrices[i].amount;
                }
            }

            let floorPrices = {!! $scale->floorPrices !!};
            let floorFromPrice = 0;

            for (let i = 0; i < floorPrices.length; i++) {
                if ((floorFrom > floorPrices[i].from && floorFrom >= floorPrices[i].to)) {
                    floorFromPrice += (floorPrices[i].to - floorPrices[i].from) * floorPrices[i].amount;
                }

                if ((floorFrom > floorPrices[i].from && floorFrom < floorPrices[i].to)) {
                    floorFromPrice += (floorFrom - floorPrices[i].from) * floorPrices[i].amount;
                }
            }

            let floorToPrice = 0;

            for (let i = 0; i < floorPrices.length; i++) {
                if ((floorTo > floorPrices[i].from && floorTo >= floorPrices[i].to)) {
                    floorToPrice += (floorPrices[i].to - floorPrices[i].from) * floorPrices[i].amount;
                }

                if ((floorTo > floorPrices[i].from && floorTo < floorPrices[i].to)) {
                    floorToPrice += (floorTo - floorPrices[i].from) * floorPrices[i].amount;
                }
            }

            totalPrice = totalPrice + distancePrice + floorFromPrice + floorToPrice;
            let realPrice = totalPrice - bonusPrice;

            $('#total_price').text(totalPrice);
            $('#real_price').text(realPrice);

            if (bonusPrice != 0)
            {
                $('#usedBonusPrice1').text(bonusPrice + ' $');
                $('#usedBonusPrice2').text(bonusPrice);
            }
        });

        $('.current-location').on('click', function() {
            window.location.href = "/safe_move/location";
        });

        $('.destination-location').on('click',function () {
            window.location.href = "/safe_move/location";
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function goBonus() {
            // $.ajax({
            //     url: '/safe_move/put_session',
            //     type: 'POST',
            //     data: {
            //         vehicle_id : selectedVehicle.id,
            //         // init_price: selectedVehicle.init_price,
            //         // init_distance: selectedVehicle.init_distance,
            //         // distancePrices: selectedVehicle.distancePrices,
            //         // floorPrices: selectedVehicle.floorPrices,
            //         // init_price_for_items: selectedVehicle.init_price_for_items,
            //         // price_per_floor: selectedVehicle.price_per_floor,
            //         // price_per_big_item: selectedVehicle.price_per_big_item,
            //         // price_per_floor_for_big_item: selectedVehicle.price_per_floor_for_big_item,
            //
            //         handlingService:handlingService,
            //         distance:distance,
            //         helper_count:helper_count,
            //         big_item:big_item,
            //         when:when,
            //         description:description,
            //         phone:phone,
            //         where_from:where_from,
            //         floor_from:floor_from,
            //         where_to:where_to,
            //         floor_to:floor_to
            //     },
            //     success:function(data){
            //         window.location.href = '/easy_move/preview/' + selectedVehicle.id;
            //     }
            // });
        }

        $('#datepicker').datepicker('setDate', 'today');
    </script>

@endsection
