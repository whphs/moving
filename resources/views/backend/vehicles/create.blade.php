@extends('backend.master')

@section('title')
    {{ _('string.vehicles') }}
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_vehicle'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.vehicles.store']) !!}
            {!! Form::token() !!}
            {!! Form::inputGroup('name', __('string.name')) !!}
            {!! Form::selectGroup('movetype', __('string.move_type'), Config::get('constants.MOVE_TYPES')) !!}
            {!! Form::inputGroup('size', __('string.size')) !!}
            {!! Form::inputGroup('load_weight', __('string.load_weight'), null, 'number') !!}
            {!! Form::inputGroup('volume', __('string.volume'), null, 'number') !!}
            {!! Form::inputGroup('description', __('string.description'), null, 'textarea') !!}
            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary']) !!}
            {!! link_to('admin/vehicles', __('string.cancel'), ['class' => 'btn btn-cancel']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')

@endsection

