@extends('backend.master')

@section('title')
    Bonus List
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit a Bonus
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        {!! Form:: model($bonus, ['method' => 'PUT', 'route' => ['admin.bonuses.update', $bonus->id]]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title') !!}
                            {!! Form::text('title', $bonus->title, ['class' => 'form-control', 'placeholder' => 'Title here ...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('move_type', 'Move Type') !!}
                            {!! Form::select('move_type', Config::get('constants.MOVE_TYPES'), $bonus->move_type, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price') !!}
                            {!! Form::text('price', $bonus->price, ['class' => 'form-control', 'placeholder' => 'Price here ...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('start_date', 'Start Date') !!}
                            {!! Form::date('start_date', $bonus->start_date, ['class' => 'form-control', 'placeholder' => 'Start Date here ...']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('end_date', 'Title') !!}
                            {!! Form::date('end_date', $bonus->end_date, ['class' => 'form-control', 'placeholder' => 'End Date here ...']) !!}
                        </div>
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

