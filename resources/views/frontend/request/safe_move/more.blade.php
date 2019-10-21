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
                    <img src="/storage/{{ $scale->vehicle_photo }}"/>
                </div>
                <div class="col-6">
                    <img src="/storage/{{ $scale->helper_photo }}"/>
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
                                <li class="d-flex align-items-center justify-content-between"><span>Within 15 km of transportation</span> <span>free</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Full elevator or no elevator 1st floor</span><span>free</span></li>
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
                                @for ($i = 0; $i < count($scale->distancePrices); $i ++)
                                    <li class="d-flex align-items-center justify-content-between">
                                        <span>Transportation {{ $scale->distancePrices[$i]->from }}~{{ $scale->distancePrices[$i]->to }} km</span>
                                        <span>{{ $scale->distancePrices[$i]->amount }}yuan/km</span>
                                    </li>
                                @endfor
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
                                    @for ($i = 0; $i < count($scale->floorPrices); $i ++)
                                        <li class="d-flex align-items-center justify-content-between">
                                            <span>Transportation {{ $scale->floorPrices[$i]->from }}~{{ $scale->floorPrices[$i]->to }} layer</span>
                                            <span>{{ $scale->distancePrices[$i]->amount }}yuan/layer</span>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Note description -->
            <div class="row" style="margin-top: 20px;">
                <div class="col-12">
                    <p style="font-size: 12px;">Note:surcharges for exceeding the package or dismanting will be settled according to the
                        <a href = "#" style="color: #ff7000">expense standard</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>&nbsp</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <div class="footer" style="background-color: #947054; color: white; text-align: center; padding-top:10px; ">
        Reservation Now
    </div>
@endsection
