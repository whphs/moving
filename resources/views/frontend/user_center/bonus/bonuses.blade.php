@extends('frontend.user_center.layout')

@section('title', 'Bonus List')

@section('content')
    <style>
        table {
            background-color: white;
            border-top: 2px dotted grey;
            border-bottom: 2px solid #f16622;
        }
    </style>
    <div class="container">
        <div class="m-t-20">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Click here to enter the exchange code">
                <button class="btn default-haze" type="button">Exchange</button>
            </div>
        </div>
        <hr>
        <span>You have <span style="font-weight: bold;">{{ count($bonuses) }}</span> tickets that can use.</span>
{{--        <a href="/bonus_guide" style="float: right;">Instructions</a>--}}
        <div class="m-t-10">
            @foreach ($bonuses as $bonus)
                <table class="w-100p m-t-10">
                    <tr>
                        <td class="txt-align-c w-30p">
                            <p style="font-size: 47px; font-weight: bold; color: grey;">{{ $bonus->price }}$</p>
                            <p>Reduction</p>
                        </td>
                        <td class="p-l-5">
                            <p style="font-weight: bold;">{{ $bonus->title }}</p>
                            <p>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}</p>
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_{{ $bonus->id }}" aria-expanded="true">
                                More details <i class="fa fa-angle-down"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-light text-dark" style="color: #5b9bd1; font-weight: bold;"> Use </a>
                        </td>
                    </tr>
                </table>
                <div class="panel panel-default m-t-5">
                    <div id="collapse_{{ $bonus->id }}" class="panel-collapse collapse" aria-expanded="true">
                        <div class="container panel-body">
                            <span>Applicable models : All bus and truck</span><br>
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
