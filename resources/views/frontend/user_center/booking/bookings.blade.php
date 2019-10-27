@extends('frontend.user_center.layout')

@section('title', 'Bookings')

@section('content')
    <div class="container m-t-20">
        <div class="row">
            @foreach ($bookings as $booking)
                <table class="w-100p m-t-10">
                    <tr class="h-80">
                        <td class="w-30p">
                            <img src="/storage/{{ $booking->vehicle_id ? $booking->vehicle->baggage_thumb : $booking->scale->main_photo }}" class="w-100" style="height: 100px;">
                        </td>
                        <td class="p-l-5">
                            <p class="h-10"><span style="font-weight: bold;">From : </span>{{ $booking->where_from }}</p>
                            <p class="h-10"><span style="font-weight: bold;">To : </span>{{ $booking->where_to }}</p>
                            <p class="h-10"><span style="font-weight: bold;">Price : </span>{{ $booking->price }}</p>
                            <p class="h-10"><span style="font-weight: bold;">Distance : </span>{{ $booking->distance }}</p>
                        </td>
                    </tr>
                </table>
            @endforeach
        </div>
    </div>
@endsection
