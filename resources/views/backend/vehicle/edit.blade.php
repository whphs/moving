@extends('backend.master')

@section('title')
    {{ __('string.vehicles') }}
@endsection

@section('header')
    <div class="panel-header panel-header-sm"></div>
@endsection

@section('content')

    @component('components.normal.container', [
        'title' => __('string.edit_a_vehicle'),
        'rightButton' => null,
        'showStatus' => false,
    ])
        {!! Form:: model($vehicle, ['method' => 'PUT', 'route' => ['admin.vehicle.update', $vehicle->id], 'files' => 'true']) !!}
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('name', __('string.name'), $vehicle->name) !!}
                </div>
                <div class="mv-col">
                    {!! Form::selectGroup('area_id', __('string.area'), $areas, $vehicle->area_id) !!}
                </div>
            </div>
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('size', __('string.size'), $vehicle->size) !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('load_weight', __('string.load_weight'), $vehicle->load_weight, 'number') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('volume', __('string.volume'), $vehicle->volume, 'number') !!}
                </div>
            </div>
            <div>
                <label class="p-t-10">Price Standards For Distance</label>
                <a href="#" class="btn btn-info add-price float-right w-30">+</a>
            </div>
            <div class="price-group">
                @foreach ($vehicle->distancePrices as $cost)
                <div class="form-group">
                    <div class="form-group">
                        <div class="mv-row">
                            <div class="mv-col">
                                {!! Form::number('distance_from[]', $cost->distance_from, ['class' => 'form-control', 'placeholder' => 'Distance From']) !!}
                            </div>
                            <div class="mv-col">
                                {!! Form::number('distance_to[]', $cost->distance_to, ['class' => 'form-control', 'placeholder' => 'Distance To']) !!}
                            </div>
                            <div class="mv-col">
                                {!! Form::number('amount[]', $cost->amount, ['class' => 'form-control', 'placeholder' => 'Cost']) !!}
                            </div>
                            <div class="mv-col w-30">
                                <a href="#" class="btn btn-danger delete-price w-30">-</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {!! Form::inputGroup('description', __('string.description'), $vehicle->description, 'textarea') !!}
            {!! Form::inputGroup('available_items', __('string.available_items'), $vehicle->available_items, 'textarea') !!}
            {!! Form::inputGroup('unavailable_items', __('string.unavailable_items'), $vehicle->unavailable_items, 'textarea') !!}

            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('vehicle_thumb', __('string.vehicle_thumbnail'), null, 'file') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('baggage_thumb', __('string.baggage_thumbnail'), null, 'file') !!}
                </div>
            </div>
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('photo_0', __('string.photo_side'), null, 'file') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('photo_1', __('string.photo_back'), null, 'file') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('photo_2', __('string.photo_half_side'), null, 'file') !!}
                </div>
            </div>

            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary w-80']) !!}
            {!! link_to('admin/vehicle', __('string.cancel'), ['class' => 'btn btn-cancel w-80']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')
    <script>
        $('.add-price').on('click', function() {
            var plus_costs =
            '<div class="form-group">' +
                '<div class="mv-row">' +
                    '<div class="mv-col">' +
                        '{!! Form::number("distance_from[]", null, ["class" => "form-control", "placeholder" => "Distance From"]) !!}' +
                    '</div>' +
                    '<div class="mv-col">' +
                        '{!! Form::number("distance_to[]", null, ["class" => "form-control", "placeholder" => "Distance To"]) !!}' +
                    '</div>' +
                    '<div class="mv-col">' +
                        '{!! Form::number("amount[]", null, ["class" => "form-control", "placeholder" => "Cost"]) !!}' +
                    '</div>' +
                    '<div class="mv-col w-30">' +
                        '<a href="#" class="btn btn-danger delete-price w-30">-</a>' +
                    '</div>' +
                '</div>' +
            '</div>';
            $('.price-group').append(plus_costs);
            console.log('add-price');
        });

        $('.price-group').on('click', '.delete-price', function() {
            $(this).parent().parent().parent().remove();
            console.log('delete-price');
        });
    </script>

@endsection

