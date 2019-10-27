@extends('frontend.user_center.layout')

@section('title', 'Charging Standard')

@section('content')
    <div class="container m-t-10">
        <div class="row">
            <div class="col-12">
                <div class="content-sidebar" data-toggle="modal" data-target="#selectTruckModal">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Selected Vehicle
                                <span style="float: right;">
                                    <span id="vehicleName">{{ $selectVehicle->name }}</span><i class="fa fa-angle-right direct"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="content-sidebar">
                    <div class="card" style="margin:10px 0">
                        <div class="card-header">Please select the handling floor</div>
                        <ul class="timeline">
                            <li class="current-location" data-toggle="modal" data-target="#selectFromFloorModal">
                                <span style="margin-left: -40px;">Your shipping floor</span>
                                <span style="float: right; margin-right: 20px;">
                                    <span id="fromFloorName">Select floor</span><i class="fa fa-angle-right direct"></i>
                                </span>
                            </li>
                            <li class="destination-location" data-toggle="modal" data-target="#selectToFloorModal">
                                <span style="margin-left: -40px;">Your Receiving floor</span>
                                <span style="float: right; margin-right: 20px;">
                                    <span id="toFloorName">Select floor</span><i class="fa fa-angle-right direct"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="content-sidebar">
                    <div class="card" style="margin:10px 0">
                        <div class="card-header">Large items</div>
                        <div class="card-body">
                            <span>Selection quantity</span>
                            <span style="float: right;">
                                <img src="/frontend/assets/img/icons/minus.png" class="min-button" alt="minus button" onclick="minItem();">
                                <span id="countItems" style="padding: 15px;"></span>
                                <img src="/frontend/assets/img/icons/plus.png" class="plus-button" alt="minus button" onclick="plusItem();">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" onclick="goDescription();">
            <div class="col-12">
                <div class="content-sidebar">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Description of pricing rules.
                                <span style="float: right;">
                                    <i class="fa fa-angle-right direct"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 h-30">
                        <p class="p-t-5" style="font-size: 20px; color: #ef6774;">Price : <span id="price">---</span>$</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="selectTruckModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="big-item-title">Select truck</span>
                <button type="button" class="close" data-dismiss="modal" style="font-size: 35px; margin-right: -18px;">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body txt-align-c m-t-30" style="min-height: 100px;">
                @foreach ($vehicles as $vehicle)
                    <button type="button" id="truck{{ $vehicle->id }}" class="btn btn-outline-dark btn-sm w-40p m-l-10 m-r-10 m-b-10"
                            data-dismiss="modal" onclick="selectVehicle({{ $vehicle->id }});">{{ $vehicle->name }}</button>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal" id="selectFromFloorModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="big-item-title">Select Shipping floor</span>
                <button type="button" class="close" data-dismiss="modal" style="font-size: 35px; margin-right: -18px;">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body m-t-30">
                <button type="button" id="fromFloor100" class="btn btn-outline-dark btn-block" data-dismiss="modal" onclick="selectFromFloor(100);">Full Elevator</button>
                <hr>
                <div class="txt-align-c">
                    @for ($i = 1; $i < 10; $i ++)
                        <button type="button" id="fromFloor{{ $i }}" class="btn btn-outline-dark btn-sm w-25p m-l-10 m-r-10 m-b-10"
                                data-dismiss="modal" onclick="selectFromFloor({{ $i }});">{{ $i }} floor</button>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="selectedFromFloor" value="">

    <div class="modal" id="selectToFloorModal" tabindex="-1" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="big-item-title">Select Receving floor</span>
                <button type="button" class="close" data-dismiss="modal" style="font-size: 35px; margin-right: -18px;">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body m-t-30">
                <button type="button" id="toFloor100" class="btn btn-outline-dark btn-block" data-dismiss="modal" onclick="selectToFloor(100);">Full Elevator</button>
                <hr>
                <div class="txt-align-c">
                    @for ($i = 1; $i < 10; $i++)
                        <button type="button" id="toFloor{{ $i }}" class="btn btn-outline-dark btn-sm w-25p m-l-10 m-r-10 m-b-10"
                                data-dismiss="modal" onclick="selectToFloor({{ $i }});">{{ $i }} floor</button>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="selectedToFloor" value="">

    <input type="hidden" id="vehicleId" value="{{ $selectVehicle->id }}">
    <input type="hidden" id="fromFloorCount" value="0">
    <input type="hidden" id="toFloorCount" value="0">
    <input type="hidden" id="countItemsInput" value="0">
    <input type="hidden" id="isSelectFromFloor" value="0">
    <input type="hidden" id="isSelectToFloor" value="0">
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#truck' + {{ $selectVehicle->id }}).removeClass('btn-outline-dark');
        });

        function selectVehicle(vehicleId) {
            let vehicles = {!! $vehicles !!};

            $('#vehicleName').text(vehicles[vehicleId - 1].name);
            $('#vehicleId').val(vehicles[vehicleId - 1].id);

            for (let i = 0; i < vehicles.length; i ++) {
                $('#truck' + vehicles[i].id).addClass('btn-outline-dark');
            }

            $('#truck' + vehicles[vehicleId - 1].id).removeClass('btn-outline-dark');

            if ($('#countItemsInput').val() == 0 && $('#isSelectFromFloor').val() == 0 && $('#isSelectToFloor').val() == 0)
                return;

            calPrice($('#vehicleId').val());
        }

        function selectFromFloor(floorId) {
            let selectedFromFloor = $('#selectedFromFloor').val();

            if (selectedFromFloor == floorId) {
                $('#fromFloorName').text('Select floor');
                $('#fromFloorCount').val(0);
                $('#selectedFromFloor').val('');

                $('#fromFloor' + floorId).addClass('btn-outline-dark');

                $('#isSelectFromFloor').val(0);
                calPrice($('#vehicleId').val());
                return;
            }

            if (floorId == 100) {
                $('#fromFloorName').text('Full elevator');
                $('#fromFloorCount').val(1);
            }
            else
                if (floorId == 1) {
                    $('#fromFloorName').text(floorId + ' floor');
                    $('#fromFloorCount').val(0);
                }
                else {
                    $('#fromFloorName').text(floorId + ' floor');
                    $('#fromFloorCount').val(floorId - 1);
                }

            $('#selectedFromFloor').val(floorId);

            $('#isSelectFromFloor').val(1);

            for (let i = 1; i <= 100; i ++)
            {
                $('#fromFloor' + i).addClass('btn-outline-dark');
            }

            $('#fromFloor' + floorId).removeClass('btn-outline-dark');

            if ($('#isSelectToFloor').val() == 1)
                calPrice($('#vehicleId').val());
        }

        function selectToFloor(floorId) {
            let selectedToFloor = $('#selectedToFloor').val();

            if (selectedToFloor == floorId) {
                $('#toFloorName').text('Select floor');
                $('#toFloorCount').val(0);
                $('#selectedToFloor').val('');

                $('#toFloor' + floorId).addClass('btn-outline-dark');

                $('#isSelectToFloor').val(0);
                calPrice($('#vehicleId').val());
                return;
            }

            if (floorId == 100) {
                $('#toFloorName').text('Full elevator');
                $('#toFloorCount').val(1);
            }
            else
            if (floorId == 1) {
                $('#toFloorName').text(floorId + ' floor');
                $('#toFloorCount').val(0);
            }
            else {
                $('#toFloorName').text(floorId + ' floor');
                $('#toFloorCount').val(floorId - 1);
            }

            $('#selectedToFloor').val(floorId);

            $('#isSelectToFloor').val(1);

            for (let i = 1; i <= 100; i ++)
            {
                $('#toFloor' + i).addClass('btn-outline-dark');
            }

            $('#toFloor' + floorId).removeClass('btn-outline-dark');

            if ($('#isSelectFromFloor').val() == 1)
                calPrice($('#vehicleId').val());
        }

        let countItems = '#countItems';
        let count = 0;
        $(countItems).html(count);

        function plusItem() {
            if (count < 15)
            {
                $(countItems).text(++count);
                $('#countItemsInput').val(count);
            }

            calPrice($('#vehicleId').val());
        }

        function minItem() {
            if (count >= 1)
            {
                $(countItems).text(--count);
                $('#countItemsInput').val(count);
            }

            if (count == 0 && ($('#isSelectFromFloor').val() == 0 || $('#isSelectToFloor').val() == 0))
            {
                $('#price').text('---');
                return;
            }

            calPrice($('#vehicleId').val());
        }

        function calPrice(vehicleId) {
            let vehicles = {!! $vehicles !!};
            let floor = 0;

            let initPriceForItems = vehicles[vehicleId - 1].init_price_for_items;
            let pricePerFloor = vehicles[vehicleId - 1].price_per_floor;
            if ($('#isSelectFromFloor').val() == 1 && $('#isSelectToFloor').val() == 1)
                floor = parseInt($('#fromFloorCount').val()) + parseInt($('#toFloorCount').val());
            let countItems = $('#countItemsInput').val();
            let pricePerItem = vehicles[vehicleId - 1].price_per_big_item;
            let pricePerFloorForItems = vehicles[vehicleId - 1].price_per_floor_for_big_item;

            let realPrice = initPriceForItems + pricePerFloor * floor + countItems * pricePerItem + countItems * pricePerFloorForItems * floor;

            $('#price').text(realPrice);
        }

        function goDescription()
        {
            let vehicleId = $('#vehicleId').val();

            window.location.href = '/standard/description/' + vehicleId;
        }
    </script>
@endsection
