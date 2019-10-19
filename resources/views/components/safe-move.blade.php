<main id = "safeMove">   
    <!-- Move type start -->    
    <section class="featured-properties-area section-padding-10-50">
        <div class="container">             
            <div class="row">  
                @foreach($vehicles as $value) <!-- Gettig vehicles info -->
                    <div class="col-12 col-lg-6" style="margin-bottom: -30px">
                        <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">                            
                            <div class="property-content">  
                                <p class="location" id = "moveType">{!! Html::image($value->vehicle_thumb) !!} {{$value->name}}</p><span>$555</span>     
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

