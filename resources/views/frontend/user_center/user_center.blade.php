@extends('frontend.user_center.app')

@section('title', 'User Center')

@section('content')
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
        <div class="mt-50">
            <div class="mt-20 profile-desc-link">
                <i class="fa fa-file-text"></i>
                <a href="/order_record">Order Record</a>
                <i class="fa fa-angle-right" style="float: right;"></i>
            </div>
            <div class="mt-20 profile-desc-link">
                <i class="fa fa-th-list"></i>
                <a href="/bonuses">Bonus List</a>
                <i class="fa fa-angle-right" style="float: right;"></i>
            </div>
            <div class="mt-20 profile-desc-link">
                <i class="fa fa-cog"></i>
                <a href="/set_up">Set Up</a>
                <i class="fa fa-angle-right" style="float: right;"></i>
            </div>
        </div>
    </div>
@endsection