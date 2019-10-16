@extends('frontend.app')

@section('content')
    <!-- Top Header Area -->        
    <header>
      <div class="phone-number d-flex"> 
          <div class = "icon">              
              {!! Html::image('frontend/assets/south/img/icons/house1.png') !!}
          </div>
          <div class="icon">
              {!! Html::image('frontend/assets/south/img/icons/flat.png') !!}
          </div>
          <div class="icon">
              {!! link_to('user_center', $title = 'user') !!}
          </div>
          <div class="number">                        
              {!! link_to('tel:+86 13394260131', $title = '+86 13394260131', $attributes = [], $secure = null) !!}
          </div>
      </div>
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
    <div class="section-heading wow fadeInUp">
        <p>{{__('string.easy_moving_notes')}}</p>
    </div>  
    <main>   
    <!-- Move type start -->    
      <section class="featured-properties-area section-padding-10-50">
            <div class="container">             
                <div class="row">  
                @foreach($vehicles as $value) <!-- Gettig vehicles info -->                  
                    <div class="col-12 col-lg-6" style="margin-bottom: -30px">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">                            
                            <div class="property-content">  
                            <p class="location" id = "moveType">
                            {!! Html::image($value->vehicle_thumb) !!} {{$value->name}}</p><span>$50</span>     
                                <div class="row">
                                    <div class="col-8">
                                        <p>{{$value->description}}</p>                                       
                                        <!-- easy to move modal details button -->                                        
                                        {!! Form::submit(__('string.more_button'),['class' => 'btn btn-link btn-sm','id' => 'modalBtn'.$value->id,'onclick' => 'modal_sel('.$value->id.')' ]) !!}

                                    </div>    
                                    <div class="col-4">                                       
                                       {!! Html::image($value->baggage_thumb) !!}
                                       <!-- <button type="submit" class="btn south-btn">{{__('string.detail_button')}}</button> -->
                                       <a href="easymove_detail" class="btn south-btn">details</a>
                                    </div>
                                </div>      
                           </div>
                        </div>

                    </div>  
                     <!-- Modal area  start-->
                    <div id="eMoveModal{{$value->id}}" class="modal">
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
                                    <span class="close" id = "eMoveClose{{$value->id}}" onclick="modal_close({{$value->id}})" style="padding: unset;margin-top: -28px; margin-right: auto;">&times;</span>
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
                                <img src="frontend/assets/south/img/bg-img/about.jpg" alt="Los Angeles" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="frontend/assets/south/img/bg-img/cta.jpg" alt="Chicago" width="1100" height="500">
                              </div>
                              <div class="carousel-item">
                                <img src="frontend/assets/south/img/bg-img/editor.jpg" alt="New York" width="1100" height="500">
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
                      <!-- Modal area end -->
                    </div>
                @endforeach                                             
                </div>
            </div>

        </section>  
    </main>
    
    <script type="text/javascript">
      
      function modal_sel(mbId)
      {
        let modalBtn = "modalBtn" + mbId;
        let eMoveModal = "eMoveModal" + mbId;            
        document.getElementById(eMoveModal).style.display = "block"; 

        window.onclick = function(event) 
        {  
          console.log(event.target.id);
          console.log(eMoveModal);

          if (event.target.id == eMoveModal) 
          {
            document.getElementById(eMoveModal).style.display = "none";             
          } 
        }
      }
     
      function modal_close(mbId)
      {
         let eMoveClose = "eMoveClose" + mbId;
         let eMoveModal = "eMoveModal" + mbId; 
         document.getElementById(eMoveModal).style.display = "none"; 
      }
    </script>
@endsection