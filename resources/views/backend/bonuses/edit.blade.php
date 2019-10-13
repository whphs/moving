@extends('backend.master')

@section('title')
    {{ __('string.bonuses') }}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ __('string.edit_a_bonus') }}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        {!! Form:: model($bonus, ['method' => 'PUT', 'route' => ['admin.bonuses.update', $bonus->id]]) !!}
                            {!! Form::inputGroup('title', 'Title', $bonus->title) !!}
                            {!! Form::selectGroup('movetype', 'Move Type', Config::get('constants.MOVE_TYPES'), $bonus->movetype) !!}
                            {!! Form::inputGroup('price', 'Price', $bonus->price) !!}
                            {!! Form::inputGroup('start_date', 'Start Date', $bonus->start_date, 'date') !!}
                            {!! Form::inputGroup('end_date', 'End Date', $bonus->end_date, 'date') !!}
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        {!! Form:: close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

@endsection

