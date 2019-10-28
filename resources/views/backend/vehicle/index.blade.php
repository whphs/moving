@extends('backend.layout')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.vehicle_list'),
        'rightButton' => ['route' => 'admin.vehicle.create', 'title' => __('string.add'), 'params' => null],
        'showStatus' => true,
    ])
        <div class="table-responsive">
            <table class="mv-table">
                <thead class="text-primary">
                    <tr>
                        <th>{{ __('string.no') }}</th>
                        <th>{{ __('string.thumbnail') }}</th>
                        <th>{{ __('string.name') }}</th>
                        <th>{{ __('string.prices_for_distance') }}</th>
                        <th>{{ __('string.prices_for_item') }}</th>
                        <th>{{ __('string.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $index => $vehicle)
                        <tr>
                            <td class="w-40">{{ $index + 1 }}</td>
                            <td class="w-90">{!! Html::image('storage/' . $vehicle->vehicle_thumb, null, ['width' => 80, 'height' => 80]) !!}</td>
                            <td>{{ $vehicle->name }}</td>
                            <td>{!! $vehicle->distancePricesToString() !!}</td>
                            <td>{!! $vehicle->itemPricesToString() !!}</td>
                            <td class="w-150">
                                {!! Form::open(['route' => ['admin.vehicle.destroy', $vehicle->id], 'method' => 'DELETE']) !!}
                                    {!! Form::token() !!}
                                    {!! link_to_route('admin.vehicle.edit', __('string.edit'), $vehicle->id, ['class' => 'btn btn-info small w-60']) !!}
                                    {!! Form::submit(__('string.delete'), ['class' => 'btn btn-danger small w-60']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @endcomponent

@endsection

@section('scripts')

@endsection

