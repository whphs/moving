<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   

    <!-- Title  -->
    <title>{{__('string.app_title')}}</title>

    <!-- Favicon  -->
    <link rel="icon" href="frontend/assets/south/img/core-img/favicon.ico">

    <!-- Style CSS -->
    {!! Html::style('frontend/assets/south/style.css') !!}
    {!! Html::style('frontend/assets/south/css/bootstrap-datepicker.standalone.min.css') !!}
    {!! Html::style('frontend/assets/south/css/custom-modal.css') !!}
    {!! Html::style('frontend/assets/south/css/mystyle.css') !!}
    {!! Html::style('frontend/assets/south/css/mytabs.css') !!}
    {!! Html::style('frontend/assets/south/css/custom-switch.css') !!}
    {!! Html::style('frontend/assets/south/css/timeline.css') !!}
    
</head>

<body>  
    @yield('content')
</body>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    {!! Html::script('frontend/assets/south/js/jquery/jquery-2.2.4.min.js') !!}      
    <!-- Popper js -->
    {!! Html::script('frontend/assets/south/js/popper.min.js') !!}      
    <!-- Bootstrap js -->
    {!! Html::script('frontend/assets/south/js/bootstrap.min.js') !!}    
    {!! Html::script('frontend/assets/south/js/bootstrap-datetimepicker.min.js') !!}
    <!-- Plugins js -->
    {!! Html::script('frontend/assets/south/js/plugins.js') !!}  
    {!! Html::script('frontend/assets/south/js/classy-nav.min.js') !!} 
    {!! Html::script('frontend/assets/south/js/jquery-ui.min.js') !!}
    <!-- Custom js -->
    <!-- {!! Html::script('frontend/assets/south/js/custom-modal.js') !!}  -->
    {!! Html::script('frontend/assets/south/js/mytabs.js') !!}      
    <!-- Active js -->    
    {!! Html::script('frontend/assets/south/js/active.js') !!}
    {!! Html::script('frontend/assets/south/js/dump.js') !!}


    @yield('scripts')
</html>