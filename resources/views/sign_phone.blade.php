@extends('app')

@section('title', 'Sign In')

@section('content')
    <div class="container" style="text-align: center;">
        <div class="mt-50">
            <img src="assets/logo.png" alt="">
        </div>
        <div class="mt-50">
            <div class="input-group has-success mb-30">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                <input type="text" class="form-control" placeholder="Please enter your cell phone number">
            </div>
            <button class="btn green btn-circle btn-block">SignIn</button>
        </div>
        <div class="mt-30">
            <a href="/user_agreement">Go to User Agreement</a>
        </div>
        <hr>
        <div>
            <p class="text-success">---------------One-click Signin---------------</p>
            <img class="img-circle" src="assets/wechat.png">
        </div>
    </div>
@endsection