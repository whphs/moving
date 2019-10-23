@extends('backend.layout')

@section('title')
    {{ __('string.booking_detail') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="title">{{ __('string.booking_detail') }}</span>
                </div>
                <div class="card-body">
                    <div class="booking">
                        <div class="price">
                            <div class="f-size-22">{{ $booking->vehicle_id ? $booking->vehicle->name : $booking->scale->name }}</div>
                            <div class="txt-align-r">
                                <p class="f-size-18">Total : ${{ $booking->price }}</p>
                                <p>{{ $booking->created_at }}</p>
                            </div>
                        </div>
                        <div class="road">
                            <p class="f-size-16">Start : {{ $booking->when }}</p>
                            <table>
                                <tr>
                                    <td class="w-30"><div class="circle from"></div></td>
                                    <td>{{ $booking->where_from }} - {{ $booking->floor_from }}</td>
                                </tr>
                                <tr>
                                    <td class="w-30"><div class="line"></div></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="w-30"><div class="circle to"></div></td>
                                    <td>{{ $booking->where_to }} - {{ $booking->floor_to }}</td>
                                </tr>
                            </table>
                            <p class="p-t-10 m-0 f-size-16">Distance : {{ $booking->distance }} km</p>
                        </div>
                        <div class="m-t-5">
                            <p>Number of big items : {{ $booking->big_item }}</p>
                            <p>Number of Helpers : {{ $booking->helper_count }}</p>
                            <p>{{ $booking->description }}</p>
                        </div>
                        @if($booking->photo_0)
                            {!! Html::image('storage/' . $booking->photo_0, null, ['width' => 80, 'height' => 80]) !!}
                        @endif
                        @if($booking->photo_1)
                            {!! Html::image('storage/' . $booking->photo_1, null, ['width' => 80, 'height' => 80]) !!}
                        @endif
                        @if($booking->photo_2)
                            {!! Html::image('storage/' . $booking->photo_2, null, ['width' => 80, 'height' => 80]) !!}
                        @endif
                        <div class="f-size-15 m-t-b-10">
                            <span>Customer : {{ $booking->user->name }}</span>
                            <span class="float-right">Phone : {{ $booking->phone }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('styles')
    <style>
        .booking {
            font-size: 13px;
        }
        .booking p {
            margin-bottom: 5px !important;
        }
        .booking .price {
            display: table;
            width: 100%;
            background: #ddd;
        }
        .booking .price div {
            display: table-cell;
            padding-left: 10px;
            padding-right: 10px;
            vertical-align: middle;
        }
        .booking .road {
            background: #eee;
            padding: 10px;
            margin-top: 10px;
        }
        .booking .circle, .booking .line {
            margin: auto;
        }
        .booking .circle {
            width: 22px;
            height: 22px;
            border-radius: 50%;
        }
        .booking .circle.from {
            background: #ff8077;
            border: 3px double #b45a54;
        }
        .booking .circle.to {
            background: #7fff82;
            border: 3px double #4c9c50;
        }
        .booking .line {
            background: #888;
            width: 1px;
            height: 30px;
        }
    </style>
@endsection

@section('scripts')

@endsection

