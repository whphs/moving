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
        {{-- @component('components.table.action', [
            'columns'   => [__('string.thumbnail'), __('string.name'), __('string.move_type'), __('string.area'), __('string.size')],
            'rows'      => $vehicles,
            'keys'      => [['vehicle_thumb', 100, 100], 'name', ['move_type', 'name'], ['area', 'name'], 'size'],
            'route'     => 'admin.vehicle'
        ])
        @endcomponent --}}

        <div class="table-responsive">
            <table class="table">
                <thead class="text-primary">
                    <tr>
                        <th>{{ __('string.no') }}</th>
                        <th>{{ __('string.thumbnail') }}</th>
                        <th>{{ __('string.name') }}</th>
                        <th>{{ __('string.prices') }}</th>
                        <th>{{ __('string.edit') }}</th>
                        <th>{{ __('string.delete') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $index => $vehicle)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{!! Html::image('storage/' . $vehicle->vehicle_thumb, null, ['width' => 100, 'height' => 100]) !!}</td>
                            <td>{{ $vehicle->name }}</td>
                            <td>{!! $vehicle->costsToString() !!}</td>
                            <td>
                                {!! link_to_route('admin.vehicle.edit', __('string.edit'), $vehicle->id, ['class' => 'btn btn-success']) !!}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['admin.vehicle.destroy', $vehicle->id], 'method' => 'DELETE']) !!}
                                    {!! Form::token() !!}
                                    {!! Form::submit(__('string.delete'), ['class' => 'btn btn-danger']) !!}
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

