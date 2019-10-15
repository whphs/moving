<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Moving app</title>

    <!-- Favicon  -->
    <link rel="icon" href="frontend/assets/south/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="frontend/assets/south/style.css">
    <link rel="stylesheet" href="frontend/assets/south/css/custom-modal.css">
    <link rel="stylesheet" href="frontend/assets/south/css/mystyle.css">
    <link rel="stylesheet" href="frontend/assets/south/css/mytabs.css">
    
</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="south-load"></div>
    </div> -->
  
  <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="frontend/assets/south/img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+86 13394260131">+86 13394260131</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <!-- <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a> -->
                    <a href="/user_center" style="color: white;">user</a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Top slider start -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(frontend/assets/south/img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your moving peoples</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(frontend/assets/south/img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your moving truck</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(frontend/assets/south/img/bg-img/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect moving turck</h2>
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
            <a href="#" class="active">便捷搬家</a>
            <a href="#">无忧搬家</a>
            <a href="#">费用标准</a>        
          </nav>
    </div>    
    <!-- Tabs Area end -->
    
    <div class="section-heading wow fadeInUp">                
        <p>选套餐,搬家无忧</p>
    </div>
    <section class="featured-properties-area section-padding-10-50">
            <div class="container">             
                <div class="row">
                    <!-- Single Featured Property -->
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">                       
                            <!-- Property Content -->
                            <div class="property-content">  
                            <p class="location" id = "moveType"><img src="frontend/assets/south/img/icons/location.png" alt="">Small Move</p><span>$65</span>     
                                <div class="row">
                                    <div class="col-8">
                                        <p>Integer nec.</p>
                                        <p>Integer nec.</p>
                                        <p>Integer nec.</p>
                                        <!-- easy to move modal details start -->
                                        <button type="button" class="btn btn-link btn-sm" id="myBtn">Details</button>
                                    </div>    
                                    <div class="col-4">
                                       <img src="frontend/assets/south/img/furniture.jpg" style="width: 60px;"/>
                                       <button type="submit" class="btn south-btn">Details</button>
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>                                          
                </div>
            </div>
    </section>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">      
        
            <!-- Nav Start -->
            <div class="classynav">
                <ul>                    
                    <li><a href="#">small</a></li>
                    <li><a href="#">big</a></li>
                    <li><a href="#">small</a></li>                               
                    <li><a href="#">big</a></li>                    
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
          <img src="frontend/assets/south/img/bg-img/hero4.jpg" alt="Los Angeles" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="frontend/assets/south/img/bg-img/cta.jpg" alt="Chicago" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="frontend/assets/south/img/bg-img/future4.jpg" alt="New York" width="1100" height="500">
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
        <h6 style="font-weight: bold;color: #000000d9;line-height: 2; ">用车提示</h6>
        <p style="background-color: #dee2e6a1;font-size: 12px; ">适合单人搬家,无大型家电家具人群</p>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; color: #000000d9;">可装载物品 :</p>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">小型洗衣机或空调等</p>  
        </div>
        <div>
          <p style= "font-size: 12px;font-weight: bold;display: inline-block;color: #000000d9; ">不可装载物品 : </p> 
          <p style= "font-size: 12px;font-weight: bold;display: inline-block; ">超过1.5米床垫以及双门以上家电</p>
        </div>   
        <div>
          <p style= "font-size: 12px;font-weight: bold; ">PS: 照片、尺寸仅供参考,以实际接单车为准</p>
        </div>     
      </div>      
    </div>    
  </div>

    <div class="modal-footer">
      <button type = "submit" class="btn south-btn m-1">立即下单</button>
    </div>
</div>
<!-- Modal content end -->
   

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="frontend/assets/south/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="frontend/assets/south/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="frontend/assets/south/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="frontend/assets/south/js/plugins.js"></script>
    <script src="frontend/assets/south/js/classy-nav.min.js"></script>
    <script src="frontend/assets/south/js/jquery-ui.min.js"></script>
    <!-- Custom js -->
    <script src="frontend/assets/south/js/custom-modal.js"></script>
    <script src="frontend/assets/south/js/mytabs.js"></script>
    <!-- Active js -->    
    <script src="frontend/assets/south/js/active.js"></script>

</body>

</html>