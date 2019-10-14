@extends('frontend.user_center.app')

@section('title', 'Set Up')

@section('content')
    <div class="container">
        <div class="margin-top-20 profile-desc-link">
            <a href="/user_agreement">User Agreement</a>
            <i class="fa fa-angle-right" style="float: right;"></i>
        </div>
        <div class="margin-top-20 profile-desc-link">
            <a href="/charging_standard">Charging Standard</a>
            <i class="fa fa-angle-right" style="float: right;"></i>
        </div>
        <div class="margin-top-20 profile-desc-link">
            <a href="/about_us">About Us</a>
            <i class="fa fa-angle-right" style="float: right;"></i>
        </div>
    </div>
@endsection