<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <title>@yield('title')</title>

    {!! Html::style('css/style.css') !!}

    {!! Html::style('frontend/assets/css/font-awesome.min.css') !!}
    {!! Html::style('css/app.css') !!}

    {!! Html::style('frontend/assets/css/swiper.min.css') !!}

    {!! Html::script('frontend/assets/js/jquery.js') !!}
    {!! Html::script('frontend/assets/js/jquery/jquery-2.2.4.min.js') !!}
    {!! Html::script('frontend/assets/js/bootstrap.min.js') !!}

    {!! Html::script('frontend/assets/js/swiper.min.js') !!}
</head>

<body style="font-family: Arial, Helvetica, sans-serif; background-color: #eee;">
@yield('content')
@yield('scripts')
</body>
</html>
