<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title  -->
    <title>{{__('string.app_title')}}</title>

    <!-- Favicon  -->
    <link rel="icon" href="/frontend/assets/south/img/core-img/favicon.ico">

    <!-- Style CSS -->
    {!! Html::style('css/app.css') !!}
    {!! Html::style('frontend/assets/style.css') !!}
    {!! Html::style('frontend/assets/css/bootstrap-datepicker.standalone.min.css') !!}
    {!! Html::style('frontend/assets/css/custom-modal.css') !!}
    {!! Html::style('frontend/assets/css/mystyle.css') !!}
    {!! Html::style('frontend/assets/css/mytabs.css') !!}
    {!! Html::style('frontend/assets/css/custom-switch.css') !!}
    {!! Html::style('frontend/assets/css/timeline.css') !!}
    {!! Html::style('frontend/assets/css/custom-checkbox.css') !!}

    {!! Html::style('frontend/assets/css/swiper.min.css') !!}

</head>

<body style ="font-family: Arial, Helvetica, sans-serif;background-color: #ffffff;">
    @yield('header')
    @yield('content')

</body>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    {!! Html::script('frontend/assets/js/jquery/jquery-2.2.4.min.js') !!}

    <!-- Popper js -->
    {!! Html::script('frontend/assets/js/popper.min.js') !!}
    <!-- Bootstrap js -->
    {!! Html::script('frontend/assets/js/bootstrap.min.js') !!}
    {!! Html::script('frontend/assets/js/bootstrap-datetimepicker.min.js') !!}
    <!-- Plugins js -->
    {!! Html::script('frontend/assets/js/plugins.js') !!}
{{--    {!! Html::script('frontend/assets/js/classy-nav.min.js') !!}--}}
{{--    {!! Html::script('frontend/assets/js/jquery-ui.min.js') !!}--}}
    <!-- Custom js -->
    {!! Html::script('frontend/assets/js/mytabs.js') !!}
    {!! Html::script('frontend/assets/js/jquery-mobile.js') !!}
    {!! Html::script('frontend/assets/js/custom-swipe.js') !!}
    <!-- Active js -->
    {!! Html::script('frontend/assets/js/active.js') !!}
    {!! Html::script('frontend/assets/js/dump.js') !!}


    @yield('scripts')
</html>
