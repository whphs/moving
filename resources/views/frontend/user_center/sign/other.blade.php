@extends('frontend.user_center.layout')

@section('title', 'Sign In')

@section('content')
    <div class="container">
        <div class="m-t-30">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="{{__('string.mobile_phone_number')}}">
                <button class="btn default-haze" type="button">{{__('string.get_code')}}</button>
            </div>
        </div>
        <input type="text" class="form-control m-t-10" placeholder="{{__('string.verification.code')}}">
        <button type="button" class="btn btn-success m-t-10" style="float: right;">{{__('string.done')}}</button>
    </div>
@endsection
