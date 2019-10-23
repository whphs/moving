@extends('frontend.user_center.app')

@section('title', 'Order Record')

@section('content')
    <div class="container">
		<div class="mt-30">
			<div class="top-news">
				@foreach ($bookings as $booking)
					<a href="javascript:;" class="btn default">
						<em>Date: {{ $booking->when }}</em>
						<em>Distance : {{ $booking->distance }} Km</em>
						<em>Price : {{ $booking->price }}yuan</em>
						<i class="fa fa-globe top-news-icon"></i>
					</a>
				@endforeach
			</div>
		</div>
    </div>
@endsection