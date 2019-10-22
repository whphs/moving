@extends('frontend.app')
@section('content')
    <section class="south-contact-area">
        <div class="container">
            <!-- Defined Price  -->
            <div class="row">
                <div class="col-12 " style="text-align: center;">
                    <div class="d-inline-flex preview-heading">
                        <span>{{__('string.format_price')}}</span>
                        <h1>2994</h1>
                        <span>(886km in Total)</span>
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
                                    <span>{{__('string.format_price')}}30</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Super Mileage</span>
                                    <span>{{__('string.format_price')}}60</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Handing Charging</span>
                                    <span>{{__('string.format_price')}}321</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
