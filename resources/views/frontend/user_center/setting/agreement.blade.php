@extends('frontend.user_center.layout')

@section('title', 'User Agreement')

@section('content')
    <div class="container m-t-20">
        {!! $agreement->content !!}
    </div>
@endsection
