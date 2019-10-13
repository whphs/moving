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
        {!! Form:: model($vehicle, ['method' => 'PUT', 'route' => ['admin.vehicles.update', $vehicle->id]]) !!}
            {!! Form::inputGroup('name', __('string.name'), $vehicle->name) !!}
            {!! Form::selectGroup('movetype', __('string.move_type'), Config::get('constants.MOVE_TYPES'), $vehicle->movetype) !!}
            {!! Form::inputGroup('size', __('string.size'), $vehicle->size) !!}
            {!! Form::inputGroup('load_weight', __('string.load_weight'), $vehicle->load_weight, 'number') !!}
            {!! Form::inputGroup('volume', __('string.volume'), $vehicle->volume, 'number') !!}
            {!! Form::inputGroup('description', __('string.description'), $vehicle->description, 'textarea') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/vehicles', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

