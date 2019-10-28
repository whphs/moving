@extends('frontend.app')
@section('content')
    <section class="south-contact-area">
        <div class="container">
            <!-- Defined Price  -->
            <div class="row">
                <div class="col-12 " style="text-align: center;">
                    <div class="d-inline-flex preview-heading">
                        <span>{{__('string.format_price')}}</span>
                        <h1 id="totalPrice"> 0 </h1><span>(</span>
                        <span id="totalDistance">886</span><span>km in Total)</span>
                    </div>
                </div>
            </div>
{{--            Preview Note--}}
            <div class="row" >
                <div class="col-12 " style="text-align: center;">
                    <p style="font-size: 15px;">baggage weight is 30kg and size is 49m3.</p>
                </div>
            </div>
{{--            Preview Prices--}}
            <div class="row" style="margin-right: 5px; margin-left: 5px;">
                <div class="col-12" >
                    <p style="color:#323232">To be paid</p>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                <li>
                                    <span style="display: inline-block">Starting Price(small van)</span>
                                    <div class="preview-start-price">
                                        <span>{{__('string.format_price')}}</span>
                                        <span id="initPrice">30</span>
                                    </div>

                                </li>
                                <li>
                                    <div style="display: inline-block">
                                        <span>Super Mileage</span>
                                        <span id="plusDistance"></span>
                                    </div>
                                    <div class="preview-start-price">
                                        <span>{{__('string.format_price')}}</span>
                                        <span id="plusPrice">60</span>
                                    </div>

                                </li>
                                <li>
                                    <span>Handing Charging</span>
                                    <div class="preview-start-price">
                                        <span>{{__('string.format_price')}}</span>
                                        <span id="priceForItems">0</span></li>
                                    </div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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

            let _totalDistance = _param.distance ? _param.distance : 0;
            let _floor_from = _param.floor_from ? _param.floor_from : 100;
            let _floor_to = _param.floor_to ? _param.floor_to : 100;
            let _handlingService = _param.handlingService ? parseInt(_param.handlingService) : 0;
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
                if (_handlingService) {
                    let priceForItems = _vehicle.init_price_for_items;

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
                    $('#priceForItems').text(priceForItems);
                }

                $('#totalPrice').text(totalPrice);
                $('#totalDistance').text(_totalDistance);
                $('#initPrice').text(_vehicle.init_price);
                $('#plusDistance').text(plusDistance);
                $('#plusPrice').text(plusPrice);
            }

        });
    </script>
@endsection
