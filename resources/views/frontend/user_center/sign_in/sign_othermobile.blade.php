@extends('frontend.user_center.app')

@section('title', 'Sign In')

@section('content')
    <div class="container">
        <div class="form-group form-md-line-input has-info form-md-floating-label" style="margin-top: 30px;">
            <div class="input-group input-group-sm">
                <div class="input-group-control">
                    <input type="text" class="form-control input-sm" placeholder="Mobile phone number">
                </div>
                <span class="input-group-btn btn-right">
                    <button class="btn default-haze" type="button">Get Code</button>
                </span>
            </div>
        </div>
        <div class="form-group form-md-line-input" style="margin-top: -20px;">
            <input type="text" class="form-control input-sm" id="form_control_1" placeholder="Vierif.Code">
        </div>
        <button type="button" class="btn btn-success" style="float: right;">Done</button>
    </div>
@endsection