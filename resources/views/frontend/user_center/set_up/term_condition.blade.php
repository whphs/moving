@extends('frontend.user_center.app')

@section('title', 'User Agreement')

@section('content')
    <style>
        h4 {
            font-weight: bold;
        }
    </style>
    <div class="container">
        {!! $termCondition->content !!}
    </div>
@endsection