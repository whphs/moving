@extends('frontend.app')

@section('content')
   <section class="south-contact-area">
        <div class="container">
          <!-- Define Title  -->
            <div class="row">
                <div class="col-12 " style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 0px;">
                        <h6>Title(big family move)</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 " style="text-align: center;max-height: 28px;">
                    <p>This is big baggage</p>                    
                </div>
            </div>
            <div class="row">
                <div class="col-12 " style="text-align: center;">
                    <p>baggage weight is 30kg and size is 49m3.</p>                    
                </div>
            </div>

            <!-- Define Photo -->
            <div class="row">
              <div class="col-6">
                  <img src="frontend/assets/south/img/blog-img/c-1.jpg"/>
              </div>
              <div class="col-6">
                  <img src="frontend/assets/south/img/blog-img/c-2.jpg"/>
              </div>
            </div>
            
            <div class="row">
               <!-- Pakage normal description -->
                <div class="col-12 col-lg-6" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 0px;margin-top:30px;">
                        <h6>Description</h6>
                    </div>
                    <div class="content-sidebar">
                     <div class="weekly-office-hours">
                        <ul>
                          <li class="d-flex align-items-center justify-content-between"><span>Within 15 km of transportation</span> <span>free</span></li>
                          <li class="d-flex align-items-center justify-content-between"><span>Full elevator or no elevator 1st floor</span><span>free</span></li>
                        </ul>
                     </div>
                    </div>
                </div>
                <!-- Package beyond description -->
                <div class="col-12 col-lg-6" style="text-align: center;">
                    <div class="contact-heading" style="margin-bottom: 0px;margin-top:30px;">
                        <h6>Beyond Description</h6>
                    </div>
                    <div class="content-sidebar">
                       <div class="weekly-office-hours">
                          <ul>
                            <li class="d-flex align-items-center justify-content-between"><span>Transportation 15~30 km</span> <span>9yuan/km</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span>Transportation 30~50 km</span><span>11yuan/km</span></li>
                          </ul>
                       </div>
                    </div>
                </div>
            </div>

            <!-- Note description -->
            <div class="row">                
                <div class="col-12">
                    <p style="font-size: 12px;">Note:surcharges for exceeding the package or dismanting will be settled according to the 
                      <a href = "#" style="color: #ff7000">expense standard</a></p>
                </div>
            </div>
            <div class="row">                
                <div class="col-12">
                    <p>&nbsp</p>
                </div>
            </div>
        </div>
    </section>
   
   <!-- footer start -->
   <div class="footer" style="background-color: #947054;color: white;text-align: center;padding-top:10px; ">
       Reservation Now
   </div>
@endsection