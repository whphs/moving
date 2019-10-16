@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.edit_a_vehicle'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($vehicle, ['method' => 'PUT', 'route' => ['admin.vehicle.update', $vehicle->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $vehicle->name) !!}
            {!! Form::selectGroup('move_type_id', __('string.move_type'), $moveTypes, $vehicle->move_type_id) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas, $vehicle->area_id) !!}
            {!! Form::inputGroup('size', __('string.size'), $vehicle->size) !!}
            {!! Form::inputGroup('load_weight', __('string.load_weight'), $vehicle->load_weight, 'number') !!}
            {!! Form::inputGroup('volume', __('string.volume'), $vehicle->volume, 'number') !!}
            {!! Form::inputGroup('description', __('string.description'), $vehicle->description, 'textarea') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/vehicle', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

