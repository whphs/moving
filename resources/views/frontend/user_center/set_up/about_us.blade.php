@extends('frontend.user_center.app')

@section('title', 'About Us')

@section('content')
    <style type="text/css">
        label {
            width: 20%;
        }
        a {
            margin-left: 5%;
        }
    </style>
    <div class="container">
        <div class="mt-30 mb-30" style="text-align: center; background-color: #f1f2f4;">
            <img class="mx-auto d-block" src="{{ $aboutus->logo }}">
            <h4 style="padding-bottom: 20px; color: #ff6600;">{{ $aboutus->title }}</h4>
        </div>
        <p>{{ $aboutus->introduction }}</p>
        <hr>
        <div class="mt-30">
            <label>Phone</label>:<a>{{ $aboutus->phone }}</a>
            <label>Email</label>:<a>{{ $aboutus->email }}</a>
            <label>Website</label>:<a>{{ $aboutus->website }}</a>
        </div>
    </div>
@endsection