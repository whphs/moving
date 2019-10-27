@extends('frontend.user_center.layout')

@section('title', 'Charging Standard')

@section('content')
    <style>
        h4, span {
            font-weight: bold;
        }
    </style>
    <div class="container">
        <h4 class="txt-align-c m-t-10">Cost calculation description</h4>
        <h4 class="txt-align-c m-b-10">({{ $selectVehicle->name }})</h4>
        <p><span>Basic handling fee : </span>{{ $selectVehicle->init_price_for_items }}$</p>
        <p><span>Floor fee/floor : </span>{{ $selectVehicle->price_per_floor }}$</p>
        <p><span>Extra charge for larage items</span> = basic handling charge for large items + floor charge for large items </p>
        large items basic handling fee : {{ $selectVehicle->price_per_big_item }}$/piece<br>
        large floor fee : {{ $selectVehicle->price_per_floor_for_big_item }}$/piece/floor<br><br>
        <p><span>Total cost</span> = basic handling fee + floor fee + large item surcharge(floor)</p>
        <p><span>Note : </span>If there is an  elevator, it will be charge according to the first floor.
            If you live on the first floor, no floor fee will be charged.</p>
        <h4>Description of out of limit articles</h4>
        <p>The following items are out of limit items, which are not applicable to platform pricing, and the pricing shall be negotiated with the driver.</p>
        <p><span>Refrigerator : </span>refrigerator with double doors or above.</p>
        <p><span>Wardrobe : </span>large wardrobe or fish tank with the sum of length, width and height greater than 3mmm, fish tank with the length greater than 1m</p>
        <p><span>Piano : </span>Grand Piano</p>
        <p><span>Printer : </span>color ink-jet printer or other special printer with a total mass of more than 45kg</p>
        <p><span>Other large pieces : </span>volume greater than 1.5m or total weight greater than 45kg.</p>
        <h4>Other instructions</h4>
        <p>1. In addition to handling upstairs, the pure manual handling distance shall not exceed 50m, and the excess part shall be handling by the customer, Negotiate with the driver about handling cost.</p>
        <p>2. If there are any items inconsistent with the order, the actual situation shall prevail, and the handling cost shall be negotiated with the diver according to the cost reference.</p>
        <p>3. If the goods need to be disassembled, additional porters shall be added, and the handling cost shall be negotiated with the driver</p>
        <p><span>Note : </span>The above handling costs generated through negotitated with the driver can be paid through the order additional cost in the app after the driver reveives the order.</p>
    </div>
@endsection
