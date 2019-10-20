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
        <a href="/bonus_guide" style="float: right;">Instructions</a>
        <div class="mt-30">
            @foreach ($bonuses as $bonus)
                <table>
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-size: 39px; font-weight: bold; color: grey;">{{ $bonus->price }}$</p>
                            <p>Order reduction</p>
                        </td>
                        <td style="padding-left: 10px;">
                            <p style="font-weight: bold;">{{ $bonus->title }}</p>
                            <p>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}</p>
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_{{ $bonus->id }}" aria-expanded="true">
                                More details <i class="fa fa-angle-down"></i>
                            </a>
                        </td>
                        <td style="padding-left: 20px;">
                            <a href="/" class="btn btn-circle btn-xs btn-default" style="color: #5b9bd1; width: 60px; font-weight: bold; padding: 0px;"> Use </a>
                        </td>
                    </tr>
                </table>
                <div class="panel panel-default" style="border: 0px solid;">
                    <div id="collapse_{{ $bonus->id }}" class="panel-collapse collapse" aria-expanded="true">
                        <div class="panel-body">
                            <span>Applicable models : </span><br>
                            <span>Applicable cities : </span><br>
                            <span>Effective time : </span>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}<br>
                            <span>Applicable scenario : </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection