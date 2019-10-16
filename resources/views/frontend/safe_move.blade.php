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
                                        <!-- {!! Form::submit(__('string.more_button'),['class' => 'btn btn-link btn-sm','id' => 'modalBtn'.$value->id,'onclick' => 'modal_sel('.$value->id.')' ]) !!} -->
                                        {!! link_to('safemove_more', $title = 'more') !!}
                                    </div>    
                                    <div class="col-4">
                                       {!! Html::image($value->baggage_thumb) !!}
                                       <!-- <button type="submit" class="btn south-btn">{{__('string.detail_button')}}</button> -->
                                       <a href="safemove_detail" class="btn south-btn">details</a>
                                    </div>
                                </div>      
                           </div>
                        </div>

                    </div>  
                @endforeach                                             
                </div>
            </div>

      </section>  
</main>
@endsection