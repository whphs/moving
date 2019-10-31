@extends('frontend.app')

@section('content')
    <section class="south-contact-area">
        <div class="container">
            <!-- Define Title  -->
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 0px;">
                        <h6>{{ $scale->name }}</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center; max-height: 28px;">
                    <p>{{ $scale->vehicle_description }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center;">
                    <p>{{ $scale->helper_description }}</p>
                </div>
            </div>

            <!-- Define Photo -->
            <div class="row">
                <div class="col-6">
                    <img src="/storage/{{ $scale->vehicle_photo }}" style="height: 100%; width: 100%;"/>
                </div>
                <div class="col-6">
                    <img src="/storage/{{ $scale->helper_photo }}" style="height: 100%; width: 100%;"/>
                </div>
            </div>

            <div class="row">
                <!-- Pakage normal description -->
                <div class="col-12 col-lg-6" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 10px; margin-top:30px;">
                        <h6>{{__('string.description')}}</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->distancePrices as $distanceprice)
                                    @if ($distanceprice->from == 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>{{__('string.within')}} {{ $distanceprice->to }}km {{__('string.of_transportation')}}</span>
                                            <span>{{__('string.free')}}</span>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach ($scale->floorPrices as $floorprice)
                                    @if ($floorprice->from == 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>{{__('string.full_elevator_or_no_elevator')}} {{ $floorprice->to }}{{__('string.floor')}}</span>
                                            <span>{{__('string.free')}}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Package beyond description -->
                <div class="col-12 col-lg-6" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 10px; margin-top:30px;">
                        <h6>{{__('string.distance_description')}}</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->distancePrices as $distanceprice)
                                    @if ($distanceprice->from != 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>{{__('string.transportation')}} {{ $distanceprice->from }}~{{ $distanceprice->to }} {{__('string.km')}}</span>
                                            <span>{{ $distanceprice->amount }} {{__('string.unit_km')}}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Package beyond description -->
                <div class="col-12 col-lg-6" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 10px; margin-top:30px;">
                        <h6>{{__('string.floor_description')}}</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->floorPrices as $floorprice)
                                    @if ($floorprice->from != 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>{{__('string.transportation')}} {{ $floorprice->from }}~{{ $floorprice->to }} {{__('string.floor')}}</span>
                                            <span>{{ $floorprice->amount }} {{__('string.unit_floor')}}</span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note description -->
            <div class="row" style="margin-top: 20px; margin-bottom: 50px;">
                <div class="col-12">
                    <p style="font-size: 12px;">Note:surcharges for exceeding the package or dismanting will be settled according to the
                        <a href="#" style="color: #ff7000">{{__('string.expense_standard')}}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <div class="footer" style="background-color: #947054; color: white; text-align: center; padding-top:10px;" onclick="safeMoveDetail({{ $scale->id }});">
        {{__('string.reservation_now')}}
    </div>

    <script>
        function safeMoveDetail(scaleId) {
            $.ajax({
                type: 'POST',
                url: '/put_session',
                data: {scale_id: scaleId}
            });

            window.location.href = "/safe_move/detail";
        }
    </script>
@endsection
