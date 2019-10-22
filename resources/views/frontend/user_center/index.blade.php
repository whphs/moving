@extends('frontend.user_center.app')

@section('title', 'User Center')

@section('content')
    <style>
        span {
            font-size; 14px;
            font-weight: 600;
        }
    </style>
    <div class="container">
        <div class="portlet light profile-sidebar-portlet">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img src="frontend/assets/image/profile_user.jpg" class="img-responsive" alt="" style="width: 30%;">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    <a href="/sign_in">Sign In</a>
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
        </div>
        <hr>
        <div class="mt-20" style="margin-left: 15px;">
            <a href="/bookings">
                <div class="mt-20 profile-desc-link">
                    <i class="fa fa-file-text"></i>
                    <span>Order Record</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
            <a href="/bonuses">
                <div class="mt-20 profile-desc-link">
                    <i class="fa fa-th-list"></i>
                    <span>Bonus List</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
            <a href="/setting">
                <div class="mt-20 profile-desc-link">
                    <i class="fa fa-cog"></i>
                    <span>Setting</span>
                    <i class="fa fa-angle-right" style="float: right;"></i>
                </div>
            </a>
        </div>
    </div>
@endsection