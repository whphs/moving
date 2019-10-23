@extends('frontend.user_center.layout')

@section('title', 'Sign In')

@section('content')
    <div class="container">
        <div class="m-t-30">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Mobile phone number">
                <button class="btn default-haze" type="button">Get Code</button>
            </div>
        </div>
        <input type="text" class="form-control m-t-10" placeholder="Verif.Code">
        <button type="button" class="btn btn-success m-t-10" style="float: right;">Done</button>
    </div>
@endsection
