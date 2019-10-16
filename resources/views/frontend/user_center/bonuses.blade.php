@extends('frontend.user_center.app')

@section('title', 'Bonus List')

@section('content')
    <div class="container">
        <div class="input-group input-group-sm mt-30">
            <div class="input-group-control">
                <input type="text" class="form-control input-sm" placeholder="Click here to enter the exchange code">
            </div>
            <span class="input-group-btn btn-right">
                <button class="btn grey-haze" type="button">Exchange</button>
            </span>
        </div>
        <hr>
        <span>You have <span style="font-weight: bold;">{{ count($bonuses) }}</span> tickets that is about to expire.</span>
        <a style="float: right;">Instructions</a>
        <div class="mt-30">
            @foreach ($bonuses as $bonus)
                <table class="mb-10">
                    <td style="text-align: center;">
                        <p style="font-size: 40px; font-weight: bold; color: grey;">{{ $bonus->price }}$</p>
                        <p>Order reduction</p>
                    </td>
                    <td style="padding-left: 20px;">
                        <p style="font-weight: bold;">{{ $bonus->title }}</p>
                        <p>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}</p>
                        <a>More details</a>
                    </td>
                </table>
            @endforeach
        </div>
    </div>
@endsection