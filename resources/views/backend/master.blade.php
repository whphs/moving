<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    {!! Html::style('//fonts.googleapis.com/css?family=Montserrat:400,700,200') !!}
    {!! Html::style('//use.fontawesome.com/releases/v5.7.1/css/all.css') !!}
    <!-- CSS Files -->
    {!! Html::style('backend/assets/css/bootstrap.min.css') !!}
    {!! Html::style('backend/assets/css/now-ui-dashboard.css?v=1.3.0') !!}
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {!! Html::style('backend/assets/demo/demo.css') !!}
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
        <div class="logo">
            {!! link_to(null, '', ['class' => 'simple-text logo-mini']) !!}
            {!! link_to(null, __('string.app_title'), ['class' => 'simple-text logo-mini']) !!}
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="{{'dashboard' == substr(request()->path(), 0, 9) ? 'active' : ''}}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="now-ui-icons design_app"></i>
                        <p>{{ __('string.dashboard') }}</p>
                    </a>
                </li>
                <li class="{{'user' == substr(request()->path(), 0, 4) ? 'active' : ''}}">
                    <a href="{{ route('admin.user.index') }}">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>{{ __('string.user_management') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about_us') }}">
                        <i class="now-ui-icons education_atom"></i>
                        <p>{{ __('string.about_us') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.term_condition') }}">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>{{ __('string.terms_conditions') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.bonus.index') }}">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>{{ __('string.bonus_management') }}</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        {{-- <a href="{{ route('standard') }}"> --}}
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>{{ __('string.standard') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.area.index') }}">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>{{ __('string.areas') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.move_type.index') }}">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>{{ __('string.move_types') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.vehicle.index') }}">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>{{ __('string.vehicles') }}</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        {{-- <a href="{{ route('booking') }}"> --}}
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>{{ __('string.booking_list') }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">{{Auth::user()->role}}</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->


        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            @yield('content')
        </div>
        <footer class="footer">
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
{!! Html::script('backend/assets/js/core/jquery.min.js') !!}
{!! Html::script('backend/assets/js/core/popper.min.js') !!}
{!! Html::script('backend/assets/js/core/bootstrap.min.js') !!}
{!! Html::script('backend/assets/js/plugins/perfect-scrollbar.jquery.min.js') !!}
<!--  Google Maps Plugin    -->
{!! Html::script('//maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE') !!}
<!-- Chart JS -->
{!! Html::script('backend/assets/js/plugins/chartjs.min.js') !!}
<!--  Notifications Plugin    -->
{!! Html::script('backend/assets/js/plugins/bootstrap-notify.js') !!}
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
{!! Html::script('backend/assets/js/now-ui-dashboard.min.js?v=1.3.0') !!}
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
{!! Html::script('backend/assets/demo/demo.js') !!}

@yield('scripts')

</body>

</html>
