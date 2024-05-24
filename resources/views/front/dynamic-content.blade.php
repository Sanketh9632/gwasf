@extends('front.layout')

@section('meta')

@section('title', ucwords(strtolower((@$dynamic_contents['seo_title']))))
<meta name="author" content="Safety Guard">
<meta name="description" content="{!! @$dynamic_contents['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_contents['meta_keywords'] !!}">

@endsection

@section('css')

@endsection

@section('header-script')
{!! @$dynamic_contents['header_script'] !!}
@endsection

@section('main')

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<div class="container th-container2">
    <div class="breadcumb-wrapper  " data-bg-src="{{@$dynamic_contents->banner_image ?  @$dynamic_contents->banner_image : '/assets/img/breadcumb/breadcumb-bg-2.jpg'}}">
        <h1 class="breadcumb-title">@if(@$child_menu_id->name) {{ @$child_menu_id->name }} @elseif(@$sub_menu_id->name) {{ @$sub_menu_id->name }} @else {{ @$parent_menu_id->name }} @endif</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>@if(@$child_menu_id->name) {{ @$child_menu_id->name }} @elseif(@$sub_menu_id->name) {{ @$sub_menu_id->name }} @else {{ @$parent_menu_id->name }} @endif</li>
        </ul>
    </div>
</div>

@if($parent_menu_id->layout_name == 'ABOUT')

    <!--==============================
About Area  
==============================-->
<div class="space-top mb-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="img-box3">
                    <div class="">
                        <img src="{{@$dynamic_contents->image}}" alt="About">
                    </div>
                    <div class="img2">
                        <img src="{{@$dynamic_contents->icon}}" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                <span class="big-title mb-35">A.</span>
                <p class="sub-title">Safety Gard Dubai: About Us</p>
                <h2 class="sec-title mb-40">Dubai's Window Tinting Experts,
                    <span class="text-theme">Dedicated to your Comfort</span>
                </h2>

                {!! removeExtraChar(@$dynamic_contents->body) !!}
                
                {{-- <p class="mb-4">Eraclis Papachristou Architects is one of the most established architectural offices in Cyprus. This is mainly due to its experimental attitude to construction methods along with innovative design in conjunction with the successful completion of various projects, especially in the last ten years.</p>
                <p class="mb-40">This is mainly due to its experimental attitude to construction methods along with innovative design in conjunction with the successful completion.</p> --}}
                <a href="/about-us" class="th-btn"><span class="line left"></span> About Us <span class="line"></span></a>
            </div>
        </div>
    </div>
{{--    <div class="shape-mockup jump" data-top="-15%" data-right="0"><img src="/assets/img/shape/shape_3.png" alt="shape"></div> --}}
</div><!--==============================
Testimonial Area  
==============================-->
    {{-- <section class="position-relative overflow-hidden space-top">
        <div class="testi-video-slide th-carousel" id="testiVideo" data-asnavfor="#testiSlide1" data-slide-show="1" data-fade="true">
           <div>
                <span class="big-title">VIDEO</span>
                <div class="testi-video">
                    <img src="/assets/img/testimonial/testi_bg_1_1.jpg" alt="video">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div>
                <span class="big-title">VIDEO</span>
                <div class="testi-video">
                    <img src="/assets/img/testimonial/testi_bg_1_3.jpg" alt="video">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div>
                <span class="big-title">VIDEO</span>
                <div class="testi-video">
                    <img src="/assets/img/testimonial/testi_bg_1_3.jpg" alt="video">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
        <div class="testi-box-area">
            <div class="testi-box-wrap wow fadeInRight" data-wow-delay="0.2s">
                <h3 class="text-uppercase mt-n2 mb-30">WHAT <span class="text-transparent">CLIENT'S SAY?</span></h3>
                <div class="row testi-box-slide th-carousel" id="testiSlide1" data-asnavfor="#testiVideo" data-slide-show="1" data-fade="true">
		
		@foreach(@$testimonial as $test)                    
		<div class="col-lg-6">
                        <div class="testi-box">
                            <p class="testi-box_text">{!!@$test->body!!}</p>
                            <div class="testi-box_profile">
                                <div class="testi-box_img">
                                    <img src="/assets/img/testimonial/testi_1_1.jpg" alt="Avater">
                                </div>
                                <div class="testi-box_info">
                                    <h3 class="testi-box_name">{{@$test->title}}</h3>
                                    <span class="testi-box_desig">{{@$test->designation}}</span>
                                </div>
                            </div>
                            <div class="testi-box_icon">
                                <img src="/assets/img/testimonial/testi_icon_1.svg" alt="icon">
                            </div>
                        </div>
                    </div>
		    @endforeach


                    <div class="col-lg-6">
                        <div class="testi-box">
                            <p class="testi-box_text">Nullam sit molestie iaculis. Nullam sit amet sem risus. Vivamus id ligula dignissim, aliquam elit quis, semper justo. Suspendisse lobortis gravida urna, ut luctus ex interdum sed. Aenean sit amet urna eros. Suspendisse quis felis eu nunc aliquet aliquam. Sed fermentum id purus et mollis. Maecenas non turpis ut magna auctor mollis.</p>
                            <div class="testi-box_profile">
                                <div class="testi-box_img">
                                    <img src="/assets/img/testimonial/testi_1_2.jpg" alt="Avater">
                                </div>
                                <div class="testi-box_info">
                                    <h3 class="testi-box_name">Santino Pedro</h3>
                                    <span class="testi-box_desig">Bank Manager</span>
                                </div>
                            </div>
                            <div class="testi-box_icon">
                                <img src="/assets/img/testimonial/testi_icon_1.svg" alt="icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testi-box">
                            <p class="testi-box_text">Id ligula molestie iaculis. Nullam sit amet sem risus. Vivamus id ligula dignissim, aliquam elit quis, semper justo. Suspendisse lobortis gravida urna, ut luctus ex interdum sed. Aenean sit amet urna eros. Suspendisse quis felis eu nunc aliquet aliquam. Sed fermentum id purus et mollis. Maecenas non turpis ut magna auctor turpis.</p>
                            <div class="testi-box_profile">
                                <div class="testi-box_img">
                                    <img src="/assets/img/testimonial/testi_1_3.jpg" alt="Avater">
                                </div>
                                <div class="testi-box_info">
                                    <h3 class="testi-box_name">Marcos Manuel </h3>
                                    <span class="testi-box_desig">CEO Founder</span>
                                </div>
                            </div>
                            <div class="testi-box_icon">
                                <img src="/assets/img/testimonial/testi_icon_1.svg" alt="icon">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="icon-box style1">
                    <button data-slick-prev="#testiSlide1" class="slick-arrow default"><i class="fat fa-long-arrow-left"></i></button>
                    <button data-slick-next="#testiSlide1" class="slick-arrow default"><i class="fat fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section> --}}
    <!--==============================
Team Area  
==============================-->
    {{-- <section class="space">
        <div class="container">
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-area">
                        <span class="big-title">E.</span>
                        <h2 class="sec-title">Expert
                            <span class="text-transparent">members</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sec-btn">
                        <div class="icon-box style2">
                            <button data-slick-prev="#teamSlide1" class="slick-arrow default"><i class="fat fa-long-arrow-left"></i></button>
                            <button data-slick-next="#teamSlide1" class="slick-arrow default"><i class="fat fa-long-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row th-carousel" id="teamSlide1" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-card style2">
                        <p class="team-desig">Architecture Designer</p>
                        <h3 class="h5 team-title"><a href="#">Kevin Martin</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_1.jpg" alt="Team">
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card style2">
                        <p class="team-desig">Interior Designer</p>
                        <h3 class="h5 team-title"><a href="#">Jonas Malini</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_2.jpg" alt="Team">
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-card style2">
                        <p class="team-desig">3D Autocad Designer</p>
                        <h3 class="h5 team-title"><a href="#">Aiden Samuel</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_3.jpg" alt="Team">
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card style2">
                        <p class="team-desig">Interior Designer</p>
                        <h3 class="h5 team-title"><a href="#">Andrew Maria</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_4.jpg" alt="Team">
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-card style2">
                        <p class="team-desig">3D Autocad Designer</p>
                        <h3 class="h5 team-title"><a href="#">Joseph Carter</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_5.jpg" alt="Team">
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-card style2">
                        <p class="team-desig">Interior Designer</p>
                        <h3 class="h5 team-title"><a href="#">Andrew Adrian</a></h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="team-img">
                            <img src="/assets/img/team/team_1_6.jpg" alt="Team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!--==============================
Counter Area  
==============================-->
{{-- <section class="space-bottom">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xxl-10">
                  <div class="row align-items-center">
                      <div class="col-auto wow fadeInUp" data-wow-delay="0.1s">
                          <span class="big-title mb-4 mb-md-0">AR.</span>
                      </div>
                      <div class="col-auto">
                          <div class="counter-card-wrap">
                              <div class="counter-card wow fadeInUp" data-wow-delay="0.2s">
                                  <h3 class="counter-card_number"><span class="counter-number">600</span></h3>
                                  <p class="counter-card_text">Projects</p>
                              </div>
                              <div class="counter-card wow fadeInUp" data-wow-delay="0.3s">
                                  <h3 class="counter-card_number"><span class="counter-number">60</span></h3>
                                  <p class="counter-card_text">Employees</p>
                              </div>
                              <div class="counter-card wow fadeInUp" data-wow-delay="0.4s">
                                  <h3 class="counter-card_number"><span class="counter-number">200</span></h3>
                                  <p class="counter-card_text">Conractors</p>
                              </div>
                              <div class="counter-card wow fadeInUp" data-wow-delay="0.5s">
                                  <h3 class="counter-card_number"><span class="counter-number">10000</span></h3>
                                  <p class="counter-card_text">More Then Publications in The World Press</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}

@elseif($parent_menu_id->layout_name == 'SERVICES')

<section class="space-top">
    <div class="container">
        <div class="row">

	   <div class="col-xl-12 col-lg-12 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                <div class="page-single">
                    {{-- <div class="page-img">
                        <img class="w-100" src="{{@$dynamic_contents->image}}" alt="Service Image">
                    </div> --}}
                    <h2 class="sec-title mb-40">
                    <span class="text-theme">{{@$dynamic_contents->title}}</span>
                    </h2>
                    <div class="service-content">

                        {!! removeExtraChar(@$dynamic_contents->body) !!}

                    </div>
                </div>

            </div>

            @foreach(@$services as $service)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="{{@$service->image}}" alt="service image">
                    </div>
                    {{-- <p class="service-card_num">0{{@$key+1}}</p> --}}
                    <a href="{{route('service-detail',[@$service->subMenu->slug])}}">
                        <h3 class="service-card_title">{{@$service->title}}</h3>
                    </a>
                    <p class="service-card_text">{{@$service->excerpt}}</p>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_1.svg" alt="service image">
                    </div>
                    <p class="service-card_num">01</p>
                    <h3 class="service-card_title">Architecture</h3>
                    <p class="service-card_text">We see architecture as the composition of all elements that define a particular space and inform the character of a building.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_2.svg" alt="service image">
                    </div>
                    <p class="service-card_num">02</p>
                    <h3 class="service-card_title">Interior Design</h3>
                    <p class="service-card_text">In Order architecture as the composition of all elements that define a particular space and inform the character of a interior.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_3.svg" alt="service image">
                    </div>
                    <p class="service-card_num">03</p>
                    <h3 class="service-card_title">Urban Interventions</h3>
                    <p class="service-card_text">The Urban architecture as the composition of all elements that define a particular space and inform the character of into.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_4.svg" alt="service image">
                    </div>
                    <p class="service-card_num">04</p>
                    <h3 class="service-card_title">Landscape Design</h3>
                    <p class="service-card_text">The Best architecture as composition of all elements that define a particular space and inform the character of a Landscape.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_5.svg" alt="service image">
                    </div>
                    <p class="service-card_num">05</p>
                    <h3 class="service-card_title">Interdisciple Entity</h3>
                    <p class="service-card_text">You see architecture as the composition of all elements that define a particular space and inform the character of a Gowring.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-card">
                    <div class="service-card_icon">
                        <img class="svg-img" src="assets/img/icon/service_1_6.svg" alt="service image">
                    </div>
                    <p class="service-card_num">06</p>
                    <h3 class="service-card_title">Safety Guard Everything</h3>
                    <p class="service-card_text">Safety Guard is architecture as the composition of all elements that define a particular space and inform the character of Design.</p>
                </div>
            </div> --}}


        </div>
    </div>
</section>
    <!--==============================
Job Area  
==============================-->
   <!-- <section class="space">
        <div class="container">
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="big-title">J.</span>
                        <h2 class="sec-title">POSITIONS
                            <span class="text-transparent">WANTED</span>
                        </h2>
                    </div>
                </div>
                <div class="col-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="sec-btn">
                        <span class="text-style1">Today was built yesterday, by looking at tomorrow</span>
                    </div>
                </div>
            </div>

            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">01</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Civil engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">02</span><a href="contact.html">Junior Engineer</a></h3>
                <span class="job-list_post">Paint engineer</span>
                <span class="job-list_time">Part-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">03</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Tiles engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">04</span><a href="contact.html">Junior Designer</a></h3>
                <span class="job-list_post">Inerior Designer</span>
                <span class="job-list_time">Part-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>
            <div class="job-list wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="job-list_title"><span class="job-list_num">05</span><a href="contact.html">Senior Engineer</a></h3>
                <span class="job-list_post">Civil engineer</span>
                <span class="job-list_time">Full-time</span>
                <a class="job-list_btn" href="contact.html"><i class="fa-regular fa-up-right-from-square"></i></a>
            </div>

        </div>
    </section> -->      

@else

<section class="space-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 align-self-center wow fadeInRight" data-wow-delay="0.2s">
                <div class="page-single">
                    {{-- <div class="page-img">
                        <img class="w-100" src="{{@$dynamic_contents->image}}" alt="Service Image">
                    </div> --}}
                    <h2 class="sec-title mb-40">
                    <span class="text-theme">{{@$dynamic_contents->title}}</span>
		    </h2>
                    <div class="service-content">

                        {!! removeExtraChar(@$dynamic_contents->body) !!}

                    </div>
                </div>

            </div>
        </div>
    </div>

@if(@$services)
   <section class="">
      <div class="container">
        <div class="row gy-30">

          @foreach(@$services as $service)
      	  @if(@$parent_menu_id->slug == Str::lower(@$service->constant))
	    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-card">
              <div class="service-card_icon">
                <img class="svg-img" src="{{@$service->image}}" alt="service image"/>
              </div>
              {{-- <p class="service-card_num">0{{@$key+1}}</p> --}}
              <h3 class="service-card_title">
                <a href="{{route('service-detail',[@$service->subMenu->slug])}}">{{@$service->title}}</a>
              </h3>

              <p class="service-card_text">
                {!! removeExtraChar(@$service->excerpt) !!}
              </p>
            </div>
          </div>
	  @endif
          @endforeach

	</div>
	</div>
</section>
@endif

</section

@endif

@endsection

@section('script')

@endsection
