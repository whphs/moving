@extends('frontend.user_center.layout')

@section('title', 'Bookings')

@section('content')
    <div class="container">
		<div class="m-t-30">
            @foreach ($bookings as $booking)

            @endforeach
		</div>
    </div>
@endsection
