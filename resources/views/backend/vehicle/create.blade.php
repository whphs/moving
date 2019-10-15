@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_vehicle'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.vehicle.store', 'files' => 'true']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('name', __('string.name')) !!}
            {!! Form::selectGroup('move_type_id', __('string.move_type'), $moveTypes) !!}
            {!! Form::selectGroup('area_id', __('string.area'), $areas) !!}
            {!! Form::inputGroup('size', __('string.size')) !!}
            {!! Form::inputGroup('load_weight', __('string.load_weight'), null, 'number') !!}
            {!! Form::inputGroup('volume', __('string.volume'), null, 'number') !!}
            {!! Form::inputGroup('description', __('string.description'), null, 'textarea') !!}
            {!! Form::inputGroup('available_baggages', __('string.available_baggages'), null, 'textarea') !!}
            {!! Form::inputGroup('unavailable_baggages', __('string.unavailable_baggages'), null, 'textarea') !!}

            {!! Form::inputGroup('vehicle_thumb', __('string.vehicle_thumbnail'), null, 'file') !!}
            {!! Form::inputGroup('baggage_thumb', __('string.baggage_thumbnail'), null, 'file') !!}
            {!! Form::inputGroup('photo_0', __('string.photo_side'), null, 'file') !!}
            {!! Form::inputGroup('photo_1', __('string.photo_back'), null, 'file') !!}
            {!! Form::inputGroup('photo_2', __('string.photo_half_side'), null, 'file') !!}

            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/vehicle', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

