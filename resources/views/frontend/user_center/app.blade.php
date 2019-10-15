<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <title>@yield('title')</title>

    {!! Html::style('frontend/assets/css/style.css') !!}
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    {!! Html::style('frontend/assets/plugins/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('frontend/assets/plugins/bootstrap/css/bootstrap.min.css') !!}
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    {!! Html::style('frontend/assets/css/profile.css') !!}
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    {!! Html::style('frontend/assets/css/components.css') !!} 

    {!! Html::style('frontend/assets/css/swiper.min.css') !!} 

</head>

<body>

    @yield('content')

</body>
    {!! Html::script('frontend/assets/plugins/jquery.js') !!}
    {!! Html::script('frontend/assets/plugins/jquery.min.js') !!}
    {!! Html::script('frontend/assets/plugins/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('frontend/assets/js/swiper.min.js') !!}
</html>