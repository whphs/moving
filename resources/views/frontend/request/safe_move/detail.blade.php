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
                                <a href="/bonuses" class="btn btn-link btn-sm watch">80yuan off ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note description -->
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 12px;">after confirming the order, customer service will call yu for details as soon as possible.</p>
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
                        <p style="display: inline-block; font-size: 20px; margin-bottom: 0px; color:#ef6774; line-height: normal">{{ $scale->init_price }}$</p>
                        <span style="text-decoration: line-through;">{{ $scale->init_price }}$</span>
                    </div>
                    <p style="display: inline-block;">aaaaaa$5</p>
                    <a href="/safe_move/preview" style="float: right; position: relative; top: -10px; left: 10px; color: #947054 ">preview</a>
                </div>
                <div class="col-4">
                    <button type="button" class="btn south-btn" style="margin-top: 12px; min-width: 100px; min-height: 35px;">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Time Modal -->
    <div id="timeModal" class="modal">
        <!-- Modal content -->`
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
@endsection

@section('scripts')

    {!! Html::script('frontend/assets/js/custom-modal.js') !!}    
    <script type="text/javascript">
        $('#datepicker').datepicker('setDate', 'today');
    </script>

@endsection