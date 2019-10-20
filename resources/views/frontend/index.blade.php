@extends('frontend.app')

@section('header')
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
            {!! link_to('easy-move', __('string.esay_move'), $attributes = ['class'=>'active'], $secure = null) !!}
            {!! link_to('safe-move', __('string.safe_move'), $attributes = [], $secure = null) !!}
            {!! link_to('standard-costs', __('string.standard_costs'), $attributes = [], $secure = null) !!}                       
          </nav>
    </div>    
    <!-- Tabs Area end -->    
    <div class="section-heading wow fadeInUp">
        <p>{{__('string.easy_moving_notes')}}</p>
    </div>  
@endsection('header')
@section('content')
    <main id = "easyMove">   
    <!-- Move type start -->
    <section class="featured-properties-area section-padding-10-50">
            <div class="container">             
                <div class="row">  
                @foreach($vehicles as $indexKey => $value) <!-- Gettig vehicles info -->                  
                    <div class="col-12 col-lg-6" style="margin-bottom: -30px">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">                            
                            <div class="property-content">  
                            <p class="location" id = "moveType">
                            {!! Html::image($value->vehicle_thumb) !!} {{$value->name}}</p><span>$50</span>     
                                <div class="row">
                                    <div class="col-8 more-btn">
                                        <p>{{$value->description}}</p>                                       
                                        <!-- easy to move modal details button -->                                        
                                        <button id = "vBtn{{$indexKey}}" class = "btn btn-link btn-sm" data-toggle = "modal" data-target = "#vehiclesModal">{{__('string.more_button')}}</button>
                                    </div>    
                                    <div class="col-4">                                       
                                       {!! Html::image($value->baggage_thumb) !!}
                                       <!-- {!! Form::submit(__('string.detail_button'),['class' =>'','id' => '']) !!} -->
                                       <button type="button" class="btn south-btn" onclick = easymove_details({{$value->id}})>
                                         {{__('string.detail_button')}}
                                       </button>
                                       <input type="hidden" id="detailsBtn{{$value->id}}" value="{{$value->id}}">
                                    </div>
                                </div>      
                           </div>
                        </div>
                    </div>
                @endforeach                                                   
                </div>
            </div>
    </section>   

    <!-- Safe move -->   
    </main>
    <!-- Modal area start -->
    <div class="modal" id="vehiclesModal" tabindex="-1" role="dialog">
      <div class="modal-content">
        <div class="modal-header">
          <div class="vehicle-tab">        
              <ul id="vehiclesTab" class="nav">
                  @foreach($vehicles as $index => $vehicle)
                  <li id="li{{$index}}" class="nav-item active">
                      <a href="#vehicle{{$index}}"  class="nav-link active">{{$vehicle->name}}</a>
                      <input type="hidden"  id = "vehicleId{{$index}}" value="{{$vehicle->id}}">
                  </li>
                 @endforeach                                   
              </ul> 
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        </div>
        <!-- Modal body -->
        <div class="modal-body"> 
            <div class="tab-content">
               @foreach($vehicles as $index => $vehicle)
                <div class="tab-pane fade" id="vehicle{{$index}}">
                   <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ul>
                      
                    <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          
                          {!! Html::image($vehicle->photo_0,'fornt truck',['width'=>'1920', 'height' => '200']) !!}
                        </div>
                        <div class="carousel-item">
                          
                          {!! Html::image($vehicle->photo_1,'middle truck',['width'=>'1920', 'height' => '200']) !!}
                        </div>
                        <div class="carousel-item">
                          
                          {!! Html::image($vehicle->photo_2,'back truck',['width'=>'1920', 'height' => '500']) !!}
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
                      <div class="col-12 truck-des">
                        <h6>{{__('string.car_tips')}}</h6>
                        <p> {{$vehicle->description}}</p>
                        <div class="truck-des-content">
                          <p style= "color: #000000d9;">{{__('string.available_items')}} :</p>
                          <p>{{$vehicle->available_items}}</p>  
                        </div>
                        <div class="truck-des-content">
                          <p style= "color: #000000d9; ">{{__('string.unavailable_items')}} : </p> 
                          <p>{{$vehicle->unavailable_items}}</p>
                        </div>   
                        <div class="truck-des-note">
                          <p>PS: {{__('string.ps_note')}}</p>
                        </div>     
                      </div>      
                    </div> 
                </div>
                @endforeach
            </div>          
      </div>
        <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" id = "orderBtn" class ="btn south-btn m-1" data-dismiss="modal">{{__('string.order_now')}}</button>
      </div>

      </div>
    </div>
    <!-- Modal area end -->

    @component('components.safe-move',['vehicles' =>$vehicles ])
    @endcomponent
    @component('components.normal-price')
    @endcomponent
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){ 
    var selectedId = 0;  

    $("#orderBtn").click(function(){               
        let vehicleId = $('#vehicleId'+selectedId).val();
        window.location.href = "easymove_detail/" + vehicleId;
    });
    $('.more-btn').on('click', 'button', function() {
      var moreBtnIndex = $(this)[0].id.substring(4, 5);//get id
      selectedId = moreBtnIndex;
      $('.tab-pane').removeClass('show active');
      $('#vehicle'+moreBtnIndex).addClass('show active');
    });

    $('.modal-header').on('click', 'li', function() {
      var index = $(this)[0].id.substring(2, 3);//get id
      selectedId = index;

      $(this).parent().parent().parent().parent().find('.tab-pane').removeClass('show active');
      $(this).parent().parent().parent().parent().find('#vehicle' + index).addClass('show active');
    });
  });

   function easymove_details(id)
   { 
      let vehicleIds = $('#detailsBtn'+id).val();
      window.location.href = "easymove_detail/" + vehicleIds;
   }
</script>
@endsection
