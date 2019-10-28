<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {!! Html::style('css/style.css') !!}

    {!! Html::style('frontend/assets/css/font-awesome.min.css') !!}
    {!! Html::style('css/app.css') !!}

    {!! Html::style('frontend/assets/css/swiper.min.css') !!}

    {!! Html::style('frontend/assets/css/custom-modal.css') !!}
    {!! Html::style('frontend/assets/css/mystyle.css') !!}
    {!! Html::style('frontend/assets/css/timeline.css') !!}


</head>

<body style="font-family: Arial, Helvetica, sans-serif; background-color: #eee;">
@yield('content')

</body>
{!! Html::script('frontend/assets/js/jquery.js') !!}
{!! Html::script('frontend/assets/js/jquery/jquery-2.2.4.min.js') !!}
{!! Html::script('frontend/assets/js/bootstrap.min.js') !!}

{!! Html::script('frontend/assets/js/swiper.min.js') !!}

@yield('scripts')
</html>
