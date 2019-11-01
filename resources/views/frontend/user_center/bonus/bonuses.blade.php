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
                <button class="btn default-haze" type="button">{{__('string.exchange')}}</button>
            </div>
        </div>
        <hr>
        <span>{{__('string.you_have')}} <span style="font-weight: bold;">{{ count($bonuses) }}</span> {{__('string.tickets_that_can_use')}}</span>
        <div class="m-t-10">
            @foreach ($bonuses as $bonus)
                <table class="w-100p m-t-10">
                    <tr>
                        <td class="txt-align-c w-30p">
                            <p style="font-size: 42px; font-weight: bold; color: grey; padding-top: 10px;">{{ $bonus->price }}$</p>
                            <p>{{__('string.reduction')}}</p>
                        </td>
                        <td class="p-l-5">
                            <p style="font-weight: bold;">{{ $bonus->title }}</p>
                            <p>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}</p>
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_{{ $bonus->id }}" aria-expanded="true">
                                {{__('string.more_details')}}<i class="fa fa-angle-down"></i>
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-light text-dark" onclick="use({{ $bonus->id }}, {{ $bonus->price }});" style="color: #5b9bd1; font-weight: bold;"> {{__('string.use')}}</a>
                        </td>
                    </tr>
                </table>
                <div class="panel panel-default m-t-5">
                    <div id="collapse_{{ $bonus->id }}" class="panel-collapse collapse" aria-expanded="true">
                        <div class="container panel-body">
                            <span>{{__('string.applicable_models')}} : {{__('string.all_bus_and_truck')}}</span><br>
                            @if ($bonus->area_id == 0)
                                <span>{{__('string.applicable_cities')}} : {{__('string.all_cities')}}</span><br>
                            @else
                                <span>{{__('string.applicable_cities')}} : {{ $bonus->area->name }}</span><br>
                            @endif
                            <span>{{__('string.effective_time')}} : </span>{{ $bonus->start_date }} ~ {{ $bonus->end_date }}<br>
                            <span>{{__('string.applicable_scenario')}} : {{ $bonus->description }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function use(id, price) {
            if ('{{ $where }}' === 'fromAny')
                window.location.href = '/';
            else
            if ('{{ $where }}' === 'fromDetail') {
                $.ajax({
                    type: 'POST',
                    url: '/put_session',
                    data: {bonus_id: id, bonus_price: price},
                    success: function(data) {
                        window.history.back();
                        return false;
                    }
                });
            }
        }
    </script>
@endsection
