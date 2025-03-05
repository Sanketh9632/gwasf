@extends('front.layout')

@section('meta')

@section('title', 'GWASF')
{{-- <meta name="description" content="{!! @$home_content['meta_description'] !!}">
<meta name="keywords" content="{!! @$home_content['keywords'] !!}"> --}}
<meta name="description" content="">
<meta name="keywords" content="Twigs Design & Decor">

@endsection

@section('css')

@endsection

@section('main')

<!-- Bnner Section -->
<section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            @foreach(@$sliders as $slide)
                <div class="swiper-slide" style="background-image: url({{ @$slide->image }});">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner text-center">
                                <h1>{{ @$slide->title }}</h1>
                                <div class="link-box">
                                    <a href="/services" class="theme-btn btn-style-one">
                                        <span>Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<!-- Slider Navigation -->
<div class="banner-slider-nav">
    <div class="banner-slider-control banner-slider-button-prev">
        <span><i class="flaticon-left-arrow"></i></span>
    </div>
    <div class="banner-slider-control banner-slider-button-next">
        <span><i class="flaticon-left-arrow"></i></span>
    </div>
</div>
</section>

<section class="container text-center py-5">
    <!-- <h1 class="mb-4">Our Certifications & Expertise</h1> -->
    <div class="row justify-content-center">
        <div class="col-6 col-sm-4 col-md-2 icon-container">
            <img src="icon1.png" alt="ISO 9001 Certified" class="img-fluid">
            <p>ISO 9001 Certified</p>
        </div>
        <div class="col-6 col-sm-4 col-md-2 icon-container">
            <img src="icon2.png" alt="Expertise Icon" class="img-fluid">
            <p>25+ Years of Expertise</p>
        </div>
        <div class="col-6 col-sm-4 col-md-2 icon-container">
            <img src="icon3.png" alt="Prototyping Icon" class="img-fluid">
            <p>Rapid Prototyping</p>
        </div>
        <div class="col-6 col-sm-4 col-md-2 icon-container">
            <img src="icon4.png" alt="Castings Icon" class="img-fluid">
            <p>Stainless Steel Castings</p>
        </div>
        <div class="col-6 col-sm-4 col-md-2 icon-container">
            <img src="icon5.png" alt="Machining Icon" class="img-fluid">
            <p>Finish Machining</p>
        </div>
    </div>
</section>





    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="background-image"><img src="assets/images/resource/image-3.jpg" alt=""></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one wow fadeInUp" data-wow-duration="1500ms"><img src="assets/images/resource/image-1.jpg" alt=""></div>
                        <div class="image-two" data-parallax='{"y": 100}'><img src="assets/images/resource/image-2.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-side">
                        <div class="sec-title">
                            <div class="sub-title">Welcome to Welbim</div>
                            <h2>We’re Committed <br> To quality</h2>
                        </div>
                        <div class="text wow fadeInUp" data-wow-duration="1500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud exercitation.</div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list wow fadeInUp" data-wow-duration="1500ms">
                                    <li>We provide 24/7 service</li>
                                    <li>We strick to deadline</li>
                                    <li>We offer upfront pricing</li>
                                    <li>We use latest technology</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                    <div class="icon"><span class="flaticon-welder"></span></div>
                                    <h4>Welding joins <br>together </h4>
                                </div>
                                <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                                    <div class="icon"><span class="flaticon-welding-machine"></span></div>
                                    <h4>Have all metal <br> works tools </h4>
                                </div>
                            </div>
                        </div>
                        <div class="note">WELDER PRO PROFESSIONAL WELDING <br>  COMPANY IN USA</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <h3>Looking for a quality and <br>affordable project?</h3>
                <div class="link wow fadeInUp" data-wow-duration="1500ms">
                    <a href="#" class="theme-btn btn-style-one"><span>Contact With Us</span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section pb-0">
        <div class="sec-bg" style="background-image: url(assets/images/background/bg-1.jpg);"></div>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title">Our Services</div>
                <h2>What we offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/image-4.jpg" alt=""></div>
                        <div class="content">
                            <h3><a href="steel-welding.html"> Steel Welding</a></h3>
                            <div class="text">Lorem ipsum is simply free <br> text dolor sit am adipi we help you is in <br> the right jobs sicing elit.</div>
                            <div class="link">
                                <a href="steel-welding.html" class="theme-btn btn-style-one"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/image-5.jpg" alt=""></div>
                        <div class="content">
                            <h3><a href="metal-work.html"> Metal Works</a></h3>
                            <div class="text">Lorem ipsum is simply free <br> text dolor sit am adipi we help you is in <br> the right jobs sicing elit.</div>
                            <div class="link">
                                <a href="metal-work.html" class="theme-btn btn-style-one"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/image-6.jpg" alt=""></div>
                        <div class="content">
                            <h3><a href="pipe-welding.html">Pipe Welding</a></h3>
                            <div class="text">Lorem ipsum is simply free <br> text dolor sit am adipi we help you is in <br> the right jobs sicing elit.</div>
                            <div class="link">
                                <a href="pipe-welding.html" class="theme-btn btn-style-one"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section -->
    <section class="testimonials-section" style="background-image: url(assets/images/background/bg-2.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="sec-title">
                        <div class="sub-title">Our Testimonials</div>
                        <h2>What they say</h2>
                    </div>
                    <div class="testimonial-block-area">
                        <div class="swiper-container testimonial-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-3.jpg" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-2.jpg" alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src="assets/images/resource/author-3.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper -->
                        <div class="swiper-container testimonial-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Testimonial Block -->
                                    <div class="testimonial-block">
                                        <div class="inner-box">
                                            <div class="text">I have just had two of the most productive work weeks I have had in years. Ben was perfectly matched to my temperament, and has been taking all the backlogged work off my plate and finishing it.</div>
                                            <div class="author-title">Jessica Brown <span>/ Co-Founder</span></div>
                                        </div>
                                    </div>
                                </div>    
                            </div>                   

                        </div>                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="flaticon-welding"></span></div>
                        <h4>We’re Good in All <br>Metal Works</h4>
                    </div>
                    <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="flaticon-welder-1"></span></div>
                        <h4>Expert & Professional <br> Welder Workers</h4>
                    </div>
                    <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="flaticon-welding-machine-1"></span></div>
                        <h4>We’re Using Quality <br> Welding Tools</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <!-- <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Services</div>
                <h2>What we offer</h2>
            </div>
            <div class="row">   
                <div class="col-lg-4 col-md-6 team-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.jpg" alt=""></div>
                        <div class="content">
                            <h4>Robert Smith</h4>
                            <div class="designation">Co Founder</div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-block">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-2.jpg" alt=""></div>
                        <div class="content">
                            <h4>Christine eve</h4>
                            <div class="designation">Welder</div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-3.jpg" alt=""></div>
                        <div class="content">
                            <h4>Mike Hardson</h4>
                            <div class="designation">Mechanic</div>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Facts Section -->
    <section class="facts-section" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-7 offset-xl-5">
                    <div class="wrapper-box">
                        <div class="sec-title light">
                            <div class="sub-title">Our Fun Facts</div>
                            <h2>Dream it, We can <br>Build it</h2>
                        </div>
                        <div class="text">There are many variations of passages of Lorem Ipsum but the majority is have suffered alteration in some form, or randomised words which don't look even slightly believable.</div>
                        <div class="facts-area">
                            <div class="row">
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="800">0</span>
                                            </div>
                                            <div class="fact-text"> Projects <br> Completed</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="681">0</span>
                                            </div>
                                            <div class="fact-text"> Satisfied <br> Clients</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="column counter-column col-md-4">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="909">0</span>
                                            </div>
                                            <div class="fact-text">Metal <br> Works</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!-- News section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">From The Blog</div>
                <h2>News & artilces</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 news-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/news-1.jpg" alt=""></div>
                        <div class="content">
                            <div class="post-meta">by Admin  .  20 Aug, 2020</div>
                            <h4><a href="blog-details.html">It Joins two <br> pieces of metal</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 news-block style-two">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/news-2.jpg" alt=""></div>
                        <div class="content">
                            <div class="post-meta">by Admin  .  20 Aug, 2020</div>
                            <h4><a href="blog-details.html">when the welding <br> Output is on</a></h4>
                        </div>
                    </div>
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/news-3.jpg" alt=""></div>
                        <div class="content">
                            <div class="post-meta">by Admin  .  20 Aug, 2020</div>
                            <h4><a href="blog-details.html">We’re creating a <br> metal product</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Logo Section -->
    <section class="clients-logo-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                <div class="slide-item"><div class="image"><img src="assets/images/resource/clients-logo-1.png" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="assets/images/resource/clients-logo-2.png" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="assets/images/resource/clients-logo-3.png" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="assets/images/resource/clients-logo-4.png" alt=""></div></div>
                <div class="slide-item"><div class="image"><img src="assets/images/resource/clients-logo-5.png" alt=""></div></div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter-section" style="background-image: url(assets/images/background/bg-4.jpg);">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Subscribe to newsletter</h3>
                        <div class="icon-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-mail-1"></span></div>
                            <div class="text">Aliq is notm hendr erit a lorem ipsum insum simply free text image pellen tesion available.</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-form">
                            <form class="ajax-sub-form" method="post">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Your Email Address..." id="subscription-email">
                                    <button type="submit" class="theme-btn btn-style-one"><span>Subscribe</span></button>
                                    <label class="subscription-label" for="subscription-email"></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>            
        </div>        
    </section>


@endsection

@section('script')

@endsection
