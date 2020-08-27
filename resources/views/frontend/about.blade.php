@extends('frontendtemplate')
@section('content')

        <h1 class="text-center py-3">JOURNEY</h1>
        <p class="text-center">WHERE WE BEGINS AND MOVES ON</p>
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>Royal Hotel is a modern, upscale hospitality company that is passionate about ‘making moments’, recognising that small gestures make a big difference to our guests, our owners and our people. We do ordinary things in an extraordinary way – a philosophy that has defined our brand’s success from the very start.

                            We also embrace innovation to meet ever-changing guest needs and continue to celebrate our rich culinary legacy, setting trends but never compromising on quality and authenticity. An international company with a growing footprint, we take a sustainable and responsible approach, caring for local communities and protecting the environment in the destinations where we operate.</p>
                            {{-- <a href="#" class="button_hover theme_btn_two">Request Custom Price</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('frontend/img/about.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->

        {{-- flip card --}}

        <div class="container container-fluid py-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="{{asset('frontend/img/f1.jpg')}}" alt="Avatar" style="width:300px;height:200px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>John Doe</h1>
                          <p>Architect & Engineer</p>
                          <p>We love that guy</p>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="{{asset('frontend/img/f2.jpg')}}" alt="Avatar" style="width:300px;height:200px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>John Doe</h1>
                          <p>Architect & Engineer</p>
                          <p>We love that guy</p>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="{{asset('frontend/img/f3.jpg')}}" alt="Avatar" style="width:300px;height:200px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>John Doe</h1>
                          <p>Architect & Engineer</p>
                          <p>We love that guy</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection