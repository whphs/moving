@extends('frontend.user_center.layout')

@section('title', 'Bookings')

@section('content')
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
    </style>

    <div class="container m-t-20">
        <div class="row">
            @foreach ($bookings as $booking)
                <div class="col-12 m-t-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="booking">
                                <div class="price">
                                    <div class="f-size-22">{{ $booking->vehicle_id ? $booking->vehicle->name : $booking->scale->name }}</div>
                                    <div class="txt-align-r">
                                        <a href="/booking/show/{{ $booking->id }}">more</a>
                                    </div>
                                </div>
                                <div class="m-t-10 m-l-5">
                                    <p>Price : {{ $booking->price }}$</p>
                                    <p>Date : {{ substr($booking->when, 0, 10) }}</p>
                                    <p>Distance : {{ $booking->distance }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
