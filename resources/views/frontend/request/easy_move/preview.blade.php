@extends('frontend.app')
@section('content')
    <section class="south-contact-area" style="background-color: #003eff">
        <div class="container">
            <!-- Defined Price  -->
            <div class="row">
                <div class="col-12 " style="text-align: center;">
                    <div class="d-inline-flex preview-heading">
                        <span>{{__('string.format_price')}}</span>
                        <h1 id="totalPrice"> 0 </h1>
                        (<span id="totalDistance">886</span>km in Total)
                    </div>
                </div>
            </div>
{{--            Preview Note--}}
            <div class="row" >
                <div class="col-12 " style="text-align: center;">
                    <p>baggage weight is 30kg and size is 49m3.</p>
                </div>
            </div>
{{--            Preview Prices--}}
            <div class="row" style="margin-right: 5px; margin-left: 5px;">
                <div class="col-12" >
                    <p>To be paid</p>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Starting Price(small van)</span>
                                    {{__('string.format_price')}}<span id="initPrice">30</span></li>
                                <li class="d-flex align-items-center justify-content-between">Super Mileage<span id="plusDistance"></span>
                                    {{__('string.format_price')}}<span id="plusPrice">60</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Handing Charging</span>
                                    {{__('string.format_price')}}<span id="priceForItems">321</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/easy_move/detail">aaa</a>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            let _vehicle = {!! $vehicle !!};
            let _param = {!! json_encode(session()->all(), JSON_FORCE_OBJECT) !!};
            console.log(_param);
            let _distancePrices = {!! $vehicle->distancePrices !!};

            let _totalDistance = _param.distance ? _param.distance : 31;
            let _floor_from = _param.floor_from ? _param.floor_from : 9;
            let _floor_to = _param.floor_to ? _param.floor_to : 7;
            let _handlingService = _param.handlingService ? 1 : 0;
            let _big_item = _param.big_item ? _param.big_item : 0;

            calcTotalPrice();

            function calcTotalPrice() {
                let totalPrice = _vehicle.init_price;
                let plusPrice = 0;
                let plusDistance = _totalDistance - _vehicle.init_distance;
                if (plusDistance <= 0) {
                    plusDistance = 0;
                } else {
                    for (let i = 0 ; i < _distancePrices.length ; i ++) {
                        let min = _distancePrices[i].from;
                        let max = _distancePrices[i].to;
                        if (_totalDistance > min && _totalDistance < max) {
                            let offset = _totalDistance - min;
                            plusPrice = _distancePrices[i].amount * offset;
                            break;
                        }
                    }
                }

                totalPrice += plusPrice;

                let priceForItems = _handlingService * _vehicle.init_price_for_items;

                let floorFrom = _floor_from;
                let floorTo = _floor_to;
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

                priceForItems += (floorFrom + floorTo) * _vehicle.price_per_floor;
                priceForItems += _vehicle.price_per_big_item * _big_item;
                priceForItems += (floorFrom + floorTo) * _big_item * _vehicle.price_per_floor_for_big_item;

                totalPrice += priceForItems;

                $('#totalPrice').text(totalPrice);
                $('#totalDistance').text(_totalDistance);
                $('#initPrice').text(_vehicle.init_price);
                $('#plusDistance').text(plusDistance);
                $('#plusPrice').text(plusPrice);
                $('#priceForItems').text(priceForItems);
            }

        });
    </script>
@endsection
