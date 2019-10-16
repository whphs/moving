@extends('frontend.user_center.app')

@section('title', 'About Us')

@section('content')
    <style type="text/css">
        label {
            width: 20%;
        }
        span {
            margin-left: 5%;
        }
    </style>
    <div class="container">
        <div class="mt-30 mb-30" style="text-align: center;">
            <img class="mx-auto d-block" src="{{ $aboutus->logo }}">
            <h4 style="color: #ff6600;">{{ $aboutus->title }}</h4>
        </div>
        <p>{{ $aboutus->introduction }}</p>
        <hr>
        <div class="mt-30">
            <label>Phone</label>:<span>{{ $aboutus->phone }}</span><br>
            <label>Email</label>:<span>{{ $aboutus->email }}</span><br>
            <label>Website</label>:<span>{{ $aboutus->website }}</span>
        </div>
    </div>
@endsection