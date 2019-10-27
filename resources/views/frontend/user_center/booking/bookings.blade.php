@extends('frontend.user_center.layout')

@section('title', 'Bookings')

@section('content')
    <div class="container m-t-20">
        @foreach ($bookings as $booking)
            <table class="w-100p m-t-10" style="background-color: white;">
                <tr>
                    <td class="w-30p" style="border: 2px solid grey;">
                        <img src="/storage/{{ $booking->vehicle_id ? $booking->vehicle->baggage_thumb : $booking->scale->main_photo }}" class="txt-align-c w-100p" style="height: 100px;">
                    </td>
                    <td class="p-l-10">
                        <table>
                            <tr>
                                <td class="w-55p">From : </td>
                                <td><span>{{ $booking->where_from }}</span></td>
                            </tr>
                            <tr>
                                <td>To : </td><td>{{ $booking->where_to }}</td>
                            </tr>
                            <tr>
                                <td>Price : </td><td>{{ $booking->price }}</td>
                            </tr>
                            <tr>
                                <td>Distance : </td><td>{{ $booking->distance }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
