@extends('backend.layout')

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
                    {!! Form::inputGroup('load_weight', __('string.load_weight'), $vehicle->load_weight) !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('volume', __('string.volume'), $vehicle->volume) !!}
                </div>
            </div>
            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::inputGroup('init_distance', __('string.init_distance'), $vehicle->init_distance, 'number') !!}
                </div>
                <div class="mv-col">
                    {!! Form::inputGroup('init_price', __('string.init_price'), $vehicle->init_price, 'number') !!}
                </div>
            </div>
            <div>
                <label class="group-title">{{ __('string.prices_for_distance') }}</label>
                <a href="#" class="btn btn-info add-price float-right w-30">+</a>
            </div>
            <div class="price-group">
                @foreach ($vehicle->distancePrices as $price)
                <div class="form-group">
                    <div class="form-group">
                        <div class="mv-row">
                            <div class="mv-col">
                                {!! Form::number('distance_from[]', $price->from, ['class' => 'form-control', 'placeholder' => __('string.from')]) !!}
                            </div>
                            <div class="mv-col">
                                {!! Form::number('distance_to[]', $price->to, ['class' => 'form-control', 'placeholder' => __('string.to')]) !!}
                            </div>
                            <div class="mv-col">
                                {!! Form::number('amount[]', $price->amount, ['class' => 'form-control', 'placeholder' => __('string.price')]) !!}
                            </div>
                            <div class="mv-col w-30">
                                <a href="#" class="btn btn-danger delete-price w-30">-</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="m-t-10">
                <label class="group-title">{{ __('string.prices_for_item') }}</label>

                <div class="mv-row">
                    <div class="mv-col">
                        {!! Form::inputGroup('init_price_for_items', __('string.init_price'), $vehicle->init_price_for_items, 'number') !!}
                    </div>
                    <div class="mv-col">
                        {!! Form::inputGroup('price_per_floor', __('string.price_per_floor'), $vehicle->price_per_floor, 'number') !!}
                    </div>
                </div>
                <div class="mv-row">
                    <div class="mv-col">
                        {!! Form::inputGroup('price_per_big_item', __('string.price_per_big_item'), $vehicle->price_per_big_item, 'number') !!}
                    </div>
                    <div class="mv-col">
                        {!! Form::inputGroup('price_per_floor_for_big_item', __('string.price_per_floor_for_big_item'), $vehicle->price_per_floor_for_big_item, 'number') !!}
                    </div>
                </div>
            </div>

            {!! Form::inputGroup('description', __('string.description'), $vehicle->description, 'textarea') !!}
            {!! Form::inputGroup('available_items', __('string.available_items'), $vehicle->available_items, 'textarea') !!}
            {!! Form::inputGroup('unavailable_items', __('string.unavailable_items'), $vehicle->unavailable_items, 'textarea') !!}

            <div class="mv-row">
                <div class="mv-col">
                    {!! Form::label('vehicle_thumb', __('string.vehicle_thumbnail')) !!}
                    <div class="photo-single-thumb" data-name = "vehicle_thumb" data-value ="{{ $vehicle->vehicle_thumb }}"></div>
                </div>
                <div class="mv-col">
                    {!! Form::label('baggage_thumb', __('string.baggage_thumbnail')) !!}
                    <div class="photo-single-thumb" data-name = "baggage_thumb" data-value ="{{ $vehicle->baggage_thumb }}"></div>
                </div>
            </div>
            <div class="mv-row my-2">
                <div class="mv-col">
                    {!! Form::label('photo_0', __('string.photo_side')) !!}
                    <div class="photo-single-thumb" data-name = "photo_0" data-value ="{{ $vehicle->photo_0 }}"></div>
                </div>
                <div class="mv-col">
                    {!! Form::label('photo_1', __('string.photo_back')) !!}
                    <div class="photo-single-thumb" data-name = "photo_1" data-value ="{{ $vehicle->photo_1 }}"></div>
                </div>
                <div class="mv-col">
                    {!! Form::label('photo_2', __('string.photo_half_side')) !!}
                    <div class="photo-single-thumb" data-name = "photo_2" data-value ="{{ $vehicle->photo_2 }}"></div>
                </div>
            </div>

            {!! Form::submit(__('string.save'), ['class' => 'btn btn-primary w-80']) !!}
            {!! link_to('admin/vehicle', __('string.cancel'), ['class' => 'btn btn-cancel w-80']) !!}
        {!! Form:: close() !!}

    @endcomponent

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            photoSingleThumb.init();
        });

        $('.add-price').on('click', function() {
            let priceGroup =
            '<div class="form-group">' +
                '<div class="mv-row">' +
                    '<div class="mv-col">' +
                        '{!! Form::number("distance_from[]", null, ["class" => "form-control", "placeholder" => __('string.distance_from')]) !!}' +
                    '</div>' +
                    '<div class="mv-col">' +
                        '{!! Form::number("distance_to[]", null, ["class" => "form-control", "placeholder" => __('string.distance_to')]) !!}' +
                    '</div>' +
                    '<div class="mv-col">' +
                        '{!! Form::number("amount[]", null, ["class" => "form-control", "placeholder" => __('string.price')]) !!}' +
                    '</div>' +
                    '<div class="mv-col w-30">' +
                        '<a href="#" class="btn btn-danger delete-price w-30">-</a>' +
                    '</div>' +
                '</div>' +
            '</div>';
            $('.price-group').append(priceGroup);
        });

        $('.price-group').on('click', '.delete-price', function() {
            $(this).parent().parent().parent().remove();
        });
    </script>

@endsection

