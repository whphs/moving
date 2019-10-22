@extends('backend.layout')

@section('title')
    {{ __('string.scales') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.add_a_scale'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: open(['route' => 'admin.scale.store', 'files' => 'true']) !!}
            {!! Form::token() !!}
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('name', __('string.name')) !!}
                </div>
                <div class="mv-col">
                    {!! Form::selectGroup('area_id', __('string.area'), $areas) !!}
                </div>
            </div>
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('vehicle_description', __('string.vehicle')) !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('helper_description', __('string.helpers')) !!}
                </div>
            </div>
            {!! Form::inputGroup('init_price', __('string.init_price'), null, 'number') !!}
            <div>
                <label class="group-title">{{ __('string.prices_for_distance') }}</label>
                <a href="#" class="btn btn-info add-distance float-right w-30">+</a>
            </div>
            <div class="distance-group m-t-10">
            </div>

            <div>
                <label class="group-title">{{ __('string.prices_for_floor') }}</label>
                <a href="#" class="btn btn-info add-floor float-right w-30">+</a>
            </div>
            <div class="floor-group m-t-10">
            </div>

            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('main_photo', __('string.main_photo'), null, 'file') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('vehicle_photo', __('string.vehicle_photo'), null, 'file') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('helper_photo', __('string.helper_photo'), null, 'file') !!}
                </div>
            </div>

            <div class="m-t-10">
                {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary w-80']) !!}
                {!! link_to('admin/scale', __('string.cancel'), ['class' => 'btn btn-cancel w-80']) !!}
            </div>
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')
    <script>
        $('.add-distance').on('click', function() {
            let distanceGroup =
                '<div class="form-group">' +
                    '<div class="mv-row">' +
                        '<div class="mv-col">' +
                            '{!! Form::number("distance_from[]", null, ["class" => "form-control", "placeholder" => __('string.from')]) !!}' +
                        '</div>' +
                        '<div class="mv-col">' +
                            '{!! Form::number("distance_to[]", null, ["class" => "form-control", "placeholder" => __('string.to')]) !!}' +
                        '</div>' +
                        '<div class="mv-col">' +
                            '{!! Form::number("amount[]", null, ["class" => "form-control", "placeholder" => __('string.price')]) !!}' +
                        '</div>' +
                        '<div class="mv-col w-30">' +
                            '<a href="#" class="btn btn-danger delete-distance w-30">-</a>' +
                        '</div>' +
                    '</div>' +
                '</div>';
            $('.distance-group').append(distanceGroup);
        });

        $('.distance-group').on('click', '.delete-distance', function() {
            $(this).parent().parent().parent().remove();
        });

        $('.add-floor').on('click', function() {
            let floorGroup =
                '<div class="form-group">' +
                    '<div class="mv-row">' +
                        '<div class="mv-col">' +
                            '{!! Form::number("floor_from[]", null, ["class" => "form-control", "placeholder" => __('string.from')]) !!}' +
                        '</div>' +
                        '<div class="mv-col">' +
                            '{!! Form::number("floor_to[]", null, ["class" => "form-control", "placeholder" => __('string.to')]) !!}' +
                        '</div>' +
                        '<div class="mv-col">' +
                            '{!! Form::number("amount[]", null, ["class" => "form-control", "placeholder" => __('string.price')]) !!}' +
                        '</div>' +
                        '<div class="mv-col w-30">' +
                            '<a href="#" class="btn btn-danger delete-floor w-30">-</a>' +
                        '</div>' +
                    '</div>' +
                '</div>';
            $('.floor-group').append(floorGroup);
        });

        $('.floor-group').on('click', '.delete-floor', function() {
            $(this).parent().parent().parent().remove();
        });
    </script>
@endsection

