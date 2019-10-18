@extends('frontend.user_center.app')

@section('title', 'Set Up')

@section('content')
    <style>
        span {
            font-size; 14px;
            font-weight: 600;
        }
    </style>
    <div class="container">
        <div class="mt-30" style="margin-left: 15px;">
            <a href="/terms">
                <div class="margin-top-20 profile-desc-link">
                    <span>User Agreement</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
            <a href="/vehicles">
                <div class="margin-top-20 profile-desc-link">
                    <span>Charging Standard</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
            <a href="/about_us">
                <div class="margin-top-20 profile-desc-link">
                    <span>About Us</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
        </div>
        <hr>
        <div style="text-align: center;">
            <a href="/" class="btn blue btn-sm" style="position: center;">Sign Out&nbsp;&nbsp;<i class="fa fa-sign-out"></i></a>
        </div>
    </div>
@endsection