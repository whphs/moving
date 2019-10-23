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
            <img class="mx-auto d-block" src="frontend/assets/img/icons/about.png">
            <h4 style="padding-bottom: 20px; color: #ff6600;">{{ $aboutUs->title }}</h4>
        </div>
        <p>{{ $aboutUs->introduction }}</p>
        <hr>
        <div class="mt-30">
            <label>Phone</label>:<a>{{ $aboutUs->phone }}</a><br>
            <label>Email</label>:<a>{{ $aboutUs->email }}</a><br>
            <label>Website</label>:<a>{{ $aboutUs->website }}</a><br>
        </div>
    </div>
@endsection
