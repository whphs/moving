<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <title>@yield('title')</title>

    {!! Html::style('frontend/assets/css/custom.css') !!}

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {!! Html::style('frontend/assets/css/font-awesome.min.css') !!}
    {!! Html::style('css/app.css') !!}
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! Html::style('frontend/assets/css/profile.css') !!}
    {!! Html::style('frontend/assets/css/components.css') !!}
    {!! Html::style('frontend/assets/css/swiper.min.css') !!}

</head>

<body style="background-color: #eee;">

    @yield('content')

</body>
    {!! Html::script('frontend/assets/js/jquery.js') !!}
    {!! Html::script('frontend/assets/js/jquery/jquery-2.2.4.min.js') !!}
    {!! Html::script('frontend/assets/js/bootstrap.min.js') !!}
</html>
