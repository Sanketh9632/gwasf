@extends('front.layout')

@section('meta')

@section('title', 'Safety Guard')
{{-- <meta name="description" content="{!! @$home_content['meta_description'] !!}">
<meta name="keywords" content="{!! @$home_content['keywords'] !!}"> --}}
<meta name="description" content="">
<meta name="keywords" content="Safety Guard">

@endsection

@section('css')

@endsection

@section('main')

<div class="th-hero-wrapper hero-4">
        <div class="hero-slider-4 th-carousel" id="heroSlide4" data-fade="false" data-slide-show="1">
            <div>
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="/assets/img/bg/hero_bg_4_1.jpg" data-overlay="black" data-opacity="6"></div>
                    <div class="container">
                        <div class="hero-style4">
                            <span class="h4 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">DESIGN IS MAKING SENSE OF THINGS.</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Architecture</h1>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">With Different</h1>
                            <h1 class="hero-title text-transparent" data-ani="slideinup" data-ani-delay="0.5s">Approach</h1>
                            <a href="/services" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s"><span class="line left"></span> View Services <span class="line"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="/assets/img/bg/hero_bg_4_2.jpg" data-overlay="black" data-opacity="6"></div>
                    <div class="container">
                        <div class="hero-style4">
                            <span class="h4 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">DESIGN IS MAKING SENSE OF THINGS.</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Architecture</h1>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">With Different</h1>
                            <h1 class="hero-title text-transparent" data-ani="slideinup" data-ani-delay="0.5s">Approach</h1>
                            <a href="/services" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s"><span class="line left"></span> View Services <span class="line"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="th-hero-slide">
                    <div class="th-hero-bg" data-bg-src="/assets/img/bg/hero_bg_4_3.jpg" data-overlay="black" data-opacity="6"></div>
                    <div class="container">
                        <div class="hero-style4">
                            <span class="h4 hero-subtitle" data-ani="slideinup" data-ani-delay="0.1s">DESIGN IS MAKING SENSE OF THINGS.</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">Architecture</h1>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.5s">With Different</h1>
                            <h1 class="hero-title text-transparent" data-ani="slideinup" data-ani-delay="0.5s">Approach</h1>
                            <a href="/services" class="th-btn" data-ani="slideinup" data-ani-delay="0.7s"><span class="line left"></span> View Services <span class="line"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-box">
            <button data-slick-prev="#heroSlide4" class="slick-arrow default cursor-btn"><i class="fal fa-long-arrow-left"></i></button>
            <button data-slick-next="#heroSlide4" class="slick-arrow default cursor-btn"><i class="fal fa-long-arrow-right"></i></button>
        </div>
    </div>
    
    <!-- <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-5 mb-xl-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="/assets/img/normal/about_3_1.jpg" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <p class="sub-title">Eraclis Papachristou Architectural Office</p>
                    <h2 class="sec-title mb-40">About <span class="text-transparent">Safety Guard</span></h2>
                    <p class="mb-30">Eraclis Papachristou Architects is one of the most established architectural offices in Cyprus. This is mainly due to its experimental attitude to construction methods along with innovative design in conjunction with the successful completion of various projects, especially in the last ten years.</p>
                    <p class="mb-40">Enthusiastically exploit wireless ROI before cooperative deliverables. Collaboratively administrate client-focused intellectual capital after multifunctional schemas. Competently pontificate cutting-edge e-markets without.</p>
                    <a href="about.html" class="th-btn"><span class="line left"></span> About Us <span class="line"></span></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump" data-top="0" data-right="0"><img src="/assets/img/shape/shape_3.png" alt="shape"></div>
    </div>==============================
Project Area  
==============================--> 

<!--======== / Hero Section ========--><!--==============================
Mockup Area  
==============================-->
<section class="space" id="about-sec">
    <div class="container">
        <div class="row flex-row-reverse justify-content-between">
            <div class="col-xl-4 col-lg-4 mb-5 mb-xl-0 wow fadeInRight" data-wow-delay="0.2s">
                <div class="img-box2">
                    <div class="img1">
                        <img src="/assets/img/shape/shape_light.png" alt="shape">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 mt-lg-5 wow fadeInUp" data-wow-delay="0.2s">
                <span class="h5 text-theme mb-25">Hospitality & Leisure</span>
                <h2 class="sec-titile lt-2 mb-35">WHERE FLUID FORM <br> DESCRIBES <span class="text-transparent">FUNCTION</span></h2>
                <p class="mb-30">Progressively predominate 24/365 services with cutting-edge services. Intrinsicly visualize clicks-and-mortar "outside the box" thinking for long-term high-impact information. Continually build team driven growth strategies vis-a-vis front-end innovation. Proactively incentivize ubiquitous portals.</p>
            </div>
        </div>
         </div>
    </div>
</section>

<!--==============================
Feature Area  
==============================-->
<div class="why">
<div class="space ">
    <div class="container">
        <div class="choose-feature-area" data-bg-src="/assets/img/bg/choose_bg.png">
            <div class="row align-items-center">
                <div class="col-lg-auto">
                    <div class="title-circle wow fadeInUp" data-wow-delay="0.2s">
                        <span class="big-title mb-50">C.</span>
                        <h2 class="sec-title">Why <span class="text-theme">choose us </span></h2>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="choose-feature-wrap">
                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="choose-feature">
                                <div class="box-number">01</div>
                                <div class="box-icon">
                                    <img src="/assets/img/icon/choose_feature_1.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Smart Home Integration</h3>
                                    <p class="box-text">The interior of the house underwent the most mang remarkable transfor</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="choose-feature">
                                <div class="box-number">02</div>
                                <div class="box-icon">
                                    <img src="/assets/img/icon/choose_feature_2.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Space Crafting Solutions</h3>
                                    <p class="box-text">We offer eco-friendly design options and can incorporate sustainable practices</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="choose-feature">
                                <div class="box-number">03</div>
                                <div class="box-icon">
                                    <img src="/assets/img/icon/choose_feature_3.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Aesthetic Axis Services</h3>
                                    <p class="box-text">The duration varies based on the project's complexity, but we work efficiently</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="choose-feature">
                                <div class="box-number">04</div>
                                <div class="box-icon">
                                    <img src="/assets/img/icon/choose_feature_4.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Smart Home Interior</h3>
                                    <p class="box-text">Begin by scheduling a consultation with our architects to discuss</p>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="choose-feature">
                                <div class="box-number">05</div>
                                <div class="box-icon">
                                    <img src="/assets/img/icon/choose_feature_5.svg" alt="icon">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Illuminate Interiors</h3>
                                    <p class="box-text">We specialize in a wide range of projects, including residential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--==============================
Project Area  
==============================-->

<!--==============================
Service Area  
==============================-->
<section class="overflow-hidden space serv">
    <div class="container">
        <div class="row justify-content-lg-between align-items-end">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="title-area">
                    <h2 class="sec-title">High-quality architectural
                        <span class="text-transparent">services</span>
                    </h2>
                </div>
            </div>
            <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="sec-btn">
                    <a href="/services" class="link-btn">View all Services</a>
                </div>
            </div>
        </div>
        <div class="service-grid-area">
            <div class="service-list-slide">
                <button data-slick-prev="#sr-list" class="slick-btn top"><i class="fal fa-chevron-up"></i></button>
                <div class="th-carousel" id="sr-list" data-slide-show="4" data-lg-slide-show="4" data-md-slide-show="4" data-sm-slide-show="4" data-xs-slide-show="4" data-vertical="true" data-verticalSwiping="true" data-asnavfor="#sr-grid, #sr-img">
                    <div>
                        <div class="service-list">
                            <span class="service-list_number">01</span>
                            <h4 class="service-list_title">Architecture</h4>
                        </div>
                    </div>
                    <div>
                        <div class="service-list">
                            <span class="service-list_number">02</span>
                            <h4 class="service-list_title">Interior Design</h4>
                        </div>
                    </div>
                    <div>
                        <div class="service-list">
                            <span class="service-list_number">03</span>
                            <h4 class="service-list_title">Urban Interventions</h4>
                        </div>
                    </div>
                    <div>
                        <div class="service-list">
                            <span class="service-list_number">04</span>
                            <h4 class="service-list_title">Landscape Design</h4>
                        </div>
                    </div>
                    <div>
                        <div class="service-list">
                            <span class="service-list_number">05</span>
                            <h4 class="service-list_title">Interdisciple Entity</h4>
                        </div>
                    </div>
                </div>
                <button data-slick-next="#sr-list" class="slick-btn bottom"><i class="fal fa-chevron-down"></i></button>
            </div>
            <div class="service-grid-slide">
                <div class="th-carousel" id="sr-grid" data-slide-show="1" data-md-slide-show="1" data-asnavfor="#sr-list, #sr-img">

                    @foreach(@$services as $service)
                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="{{@$service->image}}" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">01</p>
                            <h3 class="service-card_title">{{@$service->title}}</h3>
                            <p class="service-card_text">{{@$service->excerpt}}</p>
                            <a href="{{route('service-detail',[@$service->slug])}}" class="link-btn">View Details</a>
                        </div>
                    </div>
                    @endforeach


                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="/assets/img/icon/service_1_1.svg" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">01</p>
                            <h3 class="service-card_title">Architecture</h3>
                            <p class="service-card_text">We see architecture as the composition of all elements that define a particular space and inform the character of a building.</p>
                            <a href="#" class="link-btn">View Details</a>
                        </div>
                    </div>
                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="/assets/img/icon/service_1_2.svg" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">02</p>
                            <h3 class="service-card_title">Interior Design</h3>
                            <p class="service-card_text">In Order architecture as the composition of all elements that define a particular space and inform the character of a interior.</p>
                            <a href="#" class="link-btn">View Details</a>
                        </div>
                    </div>
                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="/assets/img/icon/service_1_3.svg" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">03</p>
                            <h3 class="service-card_title">Urban Interventions</h3>
                            <p class="service-card_text">The Urban architecture as the composition of all elements that define a particular space and inform the character of into.</p>
                            <a href="#" class="link-btn">View Details</a>
                        </div>
                    </div>
                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="/assets/img/icon/service_1_4.svg" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">04</p>
                            <h3 class="service-card_title">Landscape Design</h3>
                            <p class="service-card_text">The Best architecture as composition of all elements that define a particular space and inform the character of a Landscape.</p>
                            <a href="#" class="link-btn">View Details</a>
                        </div>
                    </div>
                    <div>
                        <div class="service-card style2">
                            <div class="service-card_icon">
                                <img class="svg-img" src="/assets/img/icon/service_1_5.svg" alt="service image">
                            </div>
                            <p class="service-card_num text-transparent">05</p>
                            <h3 class="service-card_title">Interdisciple Entity</h3>
                            <p class="service-card_text">You see architecture as the composition of all elements that define a particular space and inform the character of a Gowring.</p>
                            <a href="#" class="link-btn">View Details</a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="service-grid-img">
                <div class="th-carousel" id="sr-img" data-slide-show="1" data-md-slide-show="1" data-asnavfor="#sr-grid, #sr-list">
                    
                @foreach(@$services as $service)
                <div>
                    <div class="img">
                        <img src="{{@$service->image}}" alt="service Image">
                    </div>
                </div>
                @endforeach

                
                    <div>
                        <div class="img">
                            <img src="/assets/img/service/service_1_1.jpg" alt="service Image">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/assets/img/service/service_1_2.jpg" alt="service Image">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/assets/img/service/service_1_3.jpg" alt="service Image">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/assets/img/service/service_1_4.jpg" alt="service Image">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/assets/img/service/service_1_5.jpg" alt="service Image">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

  <!--==============================>
Team Area  
==============================-->
<section class="gallery gal ">
    <div class="container">
        <h2 class="sec-title text-center mb-4 wow fadeInUp" data-wow-delay="0.2s">Gallery <span class="text-transparent"></span></h2>
        <div class="row th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-card  ">
                    <!-- <p class="team-desig">Architecture Designer</p>
                    <h3 class="h5 team-title"><a href="team-details.html">Kevin Martin</a></h3> -->
                    <!-- <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div> -->
                    <div class="team-img">
                        <img src="/assets/img/team/team_2_1.jpg" alt="Team">
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-card  ">
                    <!-- <p class="team-desig">Interior Designer</p>
                    <h3 class="h5 team-title"><a href="team-details.html">Jonas Malini</a></h3> -->
                    <!-- <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div> -->
                    <div class="team-img">
                        <img src="/assets/img/team/team_2_2.jpg" alt="Team">
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-card  ">
                    <!-- <p class="team-desig">3D Autocad Designer</p>
                    <h3 class="h5 team-title"><a href="team-details.html">Aiden Samuel</a></h3> -->
                    <!-- <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div> -->
                    <div class="team-img">
                        <img src="/assets/img/team/team_2_3.jpg" alt="Team">
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-card  ">
                    <!-- <p class="team-desig">Interior Designer</p>
                    <h3 class="h5 team-title"><a href="team-details.html">Andrew Maria</a></h3> -->
                    <!-- <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div> -->
                    <div class="team-img">
                        <img src="/assets/img/team/team_2_4.jpg" alt="Team">
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-card  ">
                    <!-- <p class="team-desig">3D Autocad Designer</p>
                    <h3 class="h5 team-title"><a href="team-details.html">Joseph Carter</a></h3> -->
                    <!-- <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div> -->
                    <div class="team-img">
                        <img src="/assets/img/team/team_2_5.jpg" alt="Team">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <!--==============================
Testimonial Area  
==============================-->
<div class="testim">
<div class="space-bottom">
    <div class="container">
        <h2 class="sec-title text-center wow fadeInUp" data-wow-delay="0.2s">Testimonials<span class="text-transparent"></span></h2>
        <div class="testi-grid-wrap wow fadeInUp" data-wow-delay="0.2s" data-bg-src="/assets/img/bg/testi_bg_5.jpg">
            <div class="testi-grid-icon">
                <img src="/assets/img/icon/quote_1.png" alt="Icon">
            </div>
            <div class="testi-grid-slide" id="testiSlide4">
                <div class="">
                    <div class="testi-grid">
                        <div class="testi-grid_profile">
                            <div class="testi-grid_avater">
                                <img src="/assets/img/testimonial/testi_2_1.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-grid_title">David H. Smith</h3>
                                <p class="testi-grid_desig">Bank Manager</p>
                            </div>
                        </div>
                        <p class="testi-grid_text">What impressed me most about Safety Guard was their ability to provide innovative solutions to architectural challenges. They approached the project with a fresh perspective, incorporating cutting-edge technologies and sustainable practices that enhanced the overall appeal of the space.</p>
                    </div>
                </div>
                <div class="">
                    <div class="testi-grid">
                        <div class="testi-grid_profile">
                            <div class="testi-grid_avater">
                                <img src="/assets/img/testimonial/testi_2_2.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-grid_title">Danial M. Smith</h3>
                                <p class="testi-grid_desig">Business Man</p>
                            </div>
                        </div>
                        <p class="testi-grid_text">What impressed me most about Safety Guard was their ability to provide innovative solutions to architectural challenges. They approached the project with a fresh perspective, incorporating cutting-edge technologies and sustainable practices that enhanced the overall appeal of the space.</p>
                    </div>
                </div>
                <div class="">
                    <div class="testi-grid">
                        <div class="testi-grid_profile">
                            <div class="testi-grid_avater">
                                <img src="/assets/img/testimonial/testi_2_3.jpg" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-grid_title">Abraham D. Khalil</h3>
                                <p class="testi-grid_desig">Heart Doctor</p>
                            </div>
                        </div>
                        <p class="testi-grid_text">What impressed me most about Safety Guard was their ability to provide innovative solutions to architectural challenges. They approached the project with a fresh perspective, incorporating cutting-edge technologies and sustainable practices that enhanced the overall appeal of the space.</p>
                    </div>
                </div>
            </div>
            <div class="slider-nav-wrap">
                <div class="slider-nav">
                    <button data-slick-prev="#testiSlide4" class="nav-btn"><i class="fal fa-long-arrow-left"></i></button>
                    <div class="custom-dots"></div>
                    <button data-slick-next="#testiSlide4" class="nav-btn"><i class="fal fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!-- Freequently Asked Questions -->
<div class="faq">
<div class="accordion">
    <h1>Frequently Asked Questions</h1>
    <div class="accordion-item">
        <input type="checkbox" id="accordion1">
        <label for="accordion1" class="accordion-item-title"><span class="icon"></span>What is SEO, and why is it important for online businesses?</label>
        <div class="accordion-item-desc">SEO, or Search Engine Optimization, is the practice of optimizing a website to improve its visibility on search engines like Google. It involves various techniques to enhance a site's ranking in search results. SEO is crucial for online businesses as it helps drive organic traffic, increases visibility, and ultimately leads to higher conversions.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion2">
        <label for="accordion2" class="accordion-item-title"><span class="icon"></span>How long does it take to see results from SEO efforts?</label>
        <div class="accordion-item-desc">The timeline for seeing results from SEO can vary based on several factors, such as the competitiveness of keywords, the current state of the website, and the effectiveness of the SEO strategy. Generally, it may take several weeks to months before noticeable improvements occur. However, long-term commitment to SEO is essential for sustained success.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion3">
        <label for="accordion3" class="accordion-item-title"><span class="icon"></span>What are the key components of a successful SEO strategy?</label>
        <div class="accordion-item-desc">A successful SEO strategy involves various components, including keyword research, on-page optimization, quality content creation, link building, technical SEO, and user experience optimization. These elements work together to improve a website's relevance and authority in the eyes of search engines.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion4">
        <label for="accordion4" class="accordion-item-title"><span class="icon"></span>How does mobile optimization impact SEO?</label>
        <div class="accordion-item-desc">Mobile optimization is crucial for SEO because search engines prioritize mobile-friendly websites. With the increasing use of smartphones, search engines like Google consider mobile responsiveness as a ranking factor. Websites that provide a seamless experience on mobile devices are more likely to rank higher in search results.</div>
    </div>

    <div class="accordion-item">
        <input type="checkbox" id="accordion5">
        <label for="accordion5" class="accordion-item-title"><span class="icon"></span>What is the role of backlinks in SEO, and how can they be acquired?</label>
        <div class="accordion-item-desc">Backlinks, or inbound links from other websites to yours, play a significant role in SEO. They are considered a vote of confidence and can improve a site's authority. Quality over quantity is crucial when acquiring backlinks. Strategies for obtaining backlinks include creating high-quality content, guest posting, reaching out to industry influencers, and participating in community activities. It's important to focus on natural and ethical link-building practices.</div>
    </div>

</div>
</div>

<!-- end of the Section -->


 <!--==============================
Blog Area  
==============================-->
<div class="blogs">
<section class="space ">
    <div class="container">
        <div class="row justify-content-md-between align-items-end">
            <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="title-area">
                    <span class="big-title">B.</span>
                    <h2 class="sec-title">Fresh <span class="text-theme">Blog</span> content <br>
                        just published
                    </h2>
                </div>
            </div>
            <div class="col-auto mt-n4 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="sec-btn">
                    <a href="{{route('blog')}}" class="link-btn">View The Blogs</a>
                </div>
            </div>
        </div>
        <div class="row th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-block">
                    <div class="blog-content">
                        <div class="blog-meta style2">
                            <a href="{{route('blog')}}">Renovations</a>
                            <a href="{{route('blog')}}">February 15, 2024</a>
                        </div>
                        <h3 class="blog-title"><a href="#">Designing Environments, Creating Experiences</a></h3>
                        <div class="blog-text-wrap" data-bg-src="/assets/img/blog/blog_5_1.jpg">
                            <p class="blog-text">The timeline varies depending on the scope and complexity of the project. We provide detailed man timelines during the initial consultation, keeping you informed at every stage. Our approach combines innovative design solutions</p>
                        </div>
                        <a href="#" class="link-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-block">
                    <div class="blog-content">
                        <div class="blog-meta style2">
                            <a href="{{route('blog')}}">Renovations</a>
                            <a href="{{route('blog')}}">February 16, 2024</a>
                        </div>
                        <h3 class="blog-title"><a href="#">Elegance in Every Detail, Perfection in Every Space</a></h3>
                        <div class="blog-text-wrap" data-bg-src="/assets/img/blog/blog_5_2.jpg">
                            <p class="blog-text">The timeline varies depending on the scope and complexity of the project. We provide detailed man timelines during the initial consultation, keeping you informed at every stage. Our approach combines innovative design solutions</p>
                        </div>
                        <a href="#" class="link-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-block">
                    <div class="blog-content">
                        <div class="blog-meta style2">
                            <a href="{{route('blog')}}">Renovations</a>
                            <a href="{{route('blog')}}">February 17, 2024</a>
                        </div>
                        <h3 class="blog-title"><a href="#">Architects and interior designers bring expertise in spatial</a></h3>
                        <div class="blog-text-wrap" data-bg-src="/assets/img/blog/blog_5_3.jpg">
                            <p class="blog-text">The timeline varies depending on the scope and complexity of the project. We provide detailed man timelines during the initial consultation, keeping you informed at every stage. Our approach combines innovative design solutions</p>
                        </div>
                        <a href="#" class="link-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-block">
                    <div class="blog-content">
                        <div class="blog-meta style2">
                            <a href="{{route('blog')}}">Renovations</a>
                            <a href="{{route('blog')}}">February 18, 2024</a>
                        </div>
                        <h3 class="blog-title"><a href="#">Design indoor With Every Detail, Perfection Interior</a></h3>
                        <div class="blog-text-wrap" data-bg-src="/assets/img/blog/blog_5_4.jpg">
                            <p class="blog-text">The timeline varies depending on the scope and complexity of the project. We provide detailed man timelines during the initial consultation, keeping you informed at every stage. Our approach combines innovative design solutions</p>
                        </div>
                        <a href="#" class="link-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


<div class="logo-slider">
	<div class="logo-slide-track">
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/4Rivers.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/AVT.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/CareerSource.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/CFEC.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/CityofOrlando.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/CommunityCoordinatedCare.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/DentalSociety.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/DrPhillips.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Ferran.png" alt="" />
		</div>
		<div class="slidee">
			<img  src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/FloridaADA.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/FloridaHospital.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Goodwill.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/HarvardJolly.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/HiltonOrlando.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/IndraSystems.png" alt="" />
		</div>   
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/JobsPartnership.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Kenworth.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/L3.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Lockheed.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/MACF.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Marriott.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Mitsubishi.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/NCS.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Northrop.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/OrangeCountyFarmBureau.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/OrlandoHealth.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/ProImageSolutions.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/PublicAllies.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/SeaWorld.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/SecondHarvest.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/UF.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Universal.png" alt="" />
		</div>   
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/UP.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/WaltDisney.png" alt="" />
		</div>
		<div class="slidee">
			<img src="https://www.orangetechcollege.net/UserFiles/Servers/Server_86919/Image/Partners/Wyndham.png" alt="" />
		</div>
	</div>
</div>

@endsection

@section('script')

@endsection
