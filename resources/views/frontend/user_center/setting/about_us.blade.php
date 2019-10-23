@extends('frontend.user_center.layout')

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
        <div class="m-t-30 m-b-30 txt-align-c" style="background-color: #f1f2f4;">
            <img src="frontend/assets/img/icons/about.png">
            <h4 class="p-t-20 p-b-10" style="color: #ff6600;">{{ $aboutUs->title }}</h4>
        </div>
        <p>{{ $aboutUs->introduction }}</p>
        <hr>
        <div class="mt-30">
            <label>Phone</label>:<span>{{ $aboutUs->phone }}</span><br>
            <label>Email</label>:<span>{{ $aboutUs->email }}</span><br>
            <label>Website</label>:<span>{{ $aboutUs->website }}</span><br>
        </div>
    </div>
@endsection
