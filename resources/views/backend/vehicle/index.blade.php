@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
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
                        <th>{{ __('string.prices') }}</th>
                        <th>{{ __('string.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $index => $vehicle)
                        <tr>
                            <td class="w-40">{{ $index + 1 }}</td>
                            <td class="w-120">{!! Html::image('storage/' . $vehicle->vehicle_thumb, null, ['width' => 100, 'height' => 100]) !!}</td>
                            <td>{{ $vehicle->name }}</td>
                            <td>{!! $vehicle->costsToString() !!}</td>
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

