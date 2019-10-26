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
                        <h6>Description</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->distancePrices as $distanceprice)
                                    @if ($distanceprice->from == 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>Within {{ $distanceprice->to }}km of transportation</span>
                                            <span>free</span>
                                        </li>
                                    @endif
                                @endforeach
                                @foreach ($scale->floorPrices as $floorprice)
                                    @if ($floorprice->from == 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>Full elevator or no elevator {{ $floorprice->to }}st floor</span>
                                            <span>free</span>
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
                        <h6>Distance Description</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->distancePrices as $distanceprice)
                                    @if ($distanceprice->from != 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>Transportation {{ $distanceprice->from }}~{{ $distanceprice->to }} km</span>
                                            <span>{{ $distanceprice->amount }} yuan/km</span>
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
                        <h6>Floor Description</h6>
                    </div>
                    <div class="content-sidebar">
                        <div class="weekly-office-hours">
                            <ul>
                                @foreach ($scale->floorPrices as $floorprice)
                                    @if ($floorprice->from != 0)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>Transportation {{ $floorprice->from }}~{{ $floorprice->to }} floor</span>
                                            <span>{{ $floorprice->amount }} yuan/floor</span>
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
                        <a href="#" style="color: #ff7000">expense standard</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <div class="footer" style="background-color: #947054; color: white; text-align: center; padding-top:10px;" onclick="safeMoveDetail({{ $scale->id }});">
        Reservation Now
    </div>

    <script>
        function safeMoveDetail(scaleId) {
            window.location.href = "/safe_move/detail/" + scaleId;
        }
    </script>
@endsection
