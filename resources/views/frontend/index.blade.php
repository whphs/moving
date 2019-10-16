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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    {!! Html::style('frontend/assets/south/style.css') !!}
    {!! Html::style('frontend/assets/south/css/custom-modal.css') !!}
    {!! Html::style('frontend/assets/south/css/mystyle.css') !!}
    {!! Html::style('frontend/assets/south/css/mytabs.css') !!}    
    
</head>

<body>  
  <header class="header-area">
        <!-- Top Header Area -->        
        <header>
          <div class="phone-number d-flex"> 
              <div class = "icon">              
                  {!! Html::image('frontend/assets/south/img/icons/house1.png') !!}
              </div>
              <div class="icon">
                  {!! Html::image('frontend/assets/south/img/icons/flat.png') !!}
              </div>
              <div class="number">                        
                {!! link_to('tel:+86 13394260131', $title = '+86 13394260131', $attributes = [], $secure = null) !!}
              </div>
          </div>
        </header>
        <main>        
    </header>
    <!-- Top slider start -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/south/img/bg-img/hero1.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!--<h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/south/img/bg-img/hero2.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                               <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ URL::asset('frontend/assets/south/img/bg-img/hero3.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!--<h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Top slider end -->
<!-- Tabs Area start -->
    
    <div class="wrapper"> 
          <nav class="tabs">
            <div class="selector"></div>
            {!! link_to('esay_move', __('string.esay_move'), $attributes = ['class'=>'active'], $secure = null) !!}
            {!! link_to('safe_move', __('string.safe_move'), $attributes = [], $secure = null) !!}
            {!! link_to('standard_costs', __('string.standard_costs'), $attributes = [], $secure = null) !!}                 
          </nav>
    </div>    
    <!-- Tabs Area end -->
    <!-- Moving notes  start-->
    <div class="section-heading wow fadeInUp">                
        <p>{{__('string.easy_moving_notes')}}</p>
    </div>    
    <!-- Move type start -->
    @foreach($vehicles as $value)
     <section class="featured-properties-area section-padding-10-50">
            <div class="container">             
                <div class="row">                    
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">                            
                            <div class="property-content">  
                            <p class="location" id = "moveType">
                            {!! Html::image($value->vehicle) !!} {{$value->name}}</p><span>$50</span>     
                                <div class="row">
                                    <div class="col-8">
                                        <p>{{$value->description}}</p>                                       
                                        <!-- easy to move modal details button -->
                                        <button type="button" class="btn btn-link btn-sm" id="myBtn">{{__('string.more_button')}}</button>
                                    </div>    
                                    <div class="col-4">                                       
                                       {!! Html::image($value->baggage_thumb) !!}
                                       <button type="submit" class="btn south-btn">{{__('string.detail_button')}}</button>
                                    </div>
                                </div>      
                           </div>
                        </div>
                    </div>                                          
                </div>
            </div>
  </section>
	@endforeach		
</main>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">      
        
            <!-- Nav Start -->
            <div class="classynav">
                <ul>                    
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Properties</a></li>
                    <li><a href="#">Blog</a></li>                               
                    <li><a href="#">Contact</a></li>                    
                </ul>
                <span class="close" style="padding: unset;margin-top: -28px; margin-right: auto;">&times;</span>
            </div>
            <!-- Nav End -->                         
    </div>
    <div class="modal-body">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
      
    <!-- The slideshow -->
      <div class="carousel-inner" style="min-width: 310px;max-width:768px;height: 100px;">
        <div class="carousel-item active">
          <img src="img/bg-img/about.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/bg-img/cta.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/bg-img/editor.jpg" alt="New York" width="1100" height="500">
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- Truck descrition -->
    <div class="row">
      <div class="col-12">
        <h6 style="font-weight: bold;color: #000000d9;line-height: 2; ">????</h6>
        <p style="background-color: #dee2e6a1;font-size: 12px; ">??????,?????????</p>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; color: #000000d9;">????? :</p>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">?????????</p>  
        </div>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block;color: #000000d9; ">?????? : </p> 
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">??1.5???????????</p>
        </div>   
        <div>
          <p style= "font-size: 12px;font-weight: bold; ">PS: ?????????,????????</p>
        </div>     
      </div>      
    </div>    
  </div>

    <div class="modal-footer">
      <button type = "submit" class="btn south-btn m-1">????</button>
    </div>
    </div>
<!-- Modal content end -->
   

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    {!! Html::script('frontend/assets/south/js/jquery/jquery-2.2.4.min.js') !!}      
    <!-- Popper js -->
    {!! Html::script('frontend/assets/south/js/popper.min.js') !!}      
    <!-- Bootstrap js -->
    {!! Html::script('frontend/assets/south/js/bootstrap.min.js') !!}    
    <!-- Plugins js -->
    {!! Html::script('frontend/assets/south/js/plugins.js') !!}  
    {!! Html::script('frontend/assets/south/js/classy-nav.min.js') !!} 
    {!! Html::script('frontend/assets/south/js/jquery-ui.min.js') !!}
    <!-- Custom js -->
    {!! Html::script('frontend/assets/south/js/custom-modal.js') !!} 
    {!! Html::script('frontend/assets/south/js/mytabs.js') !!}      
    <!-- Active js -->    
    {!! Html::script('frontend/assets/south/js/active.js') !!}
    {!! Html::script('frontend/assets/south/js/dump.js') !!} 

</body>

</html>