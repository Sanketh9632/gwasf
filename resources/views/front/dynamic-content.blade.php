@extends('front.layout')

@section('meta')

@section('title', ucwords(strtolower((@$dynamic_contents['seo_title']))))
<meta name="author" content="GWASF">
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

<section class="page-title" style="background-image: url({{ @$dynamic_contents->banner_image ? @$dynamic_contents->banner_image : '/assets/images/background/bg-9.jpg' }});">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <div class="title">
                    <h1>
                        @if(@$child_menu_id->name) 
                            {{ @$child_menu_id->name }} 
                        @elseif(@$sub_menu_id->name) 
                            {{ @$sub_menu_id->name }} 
                        @else 
                            {{ @$parent_menu_id->name }} 
                        @endif
                    </h1>
                </div>
                <ul class="bread-crumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>
                        @if(@$child_menu_id->name) 
                            {{ @$child_menu_id->name }} 
                        @elseif(@$sub_menu_id->name) 
                            {{ @$sub_menu_id->name }} 
                        @else 
                            {{ @$parent_menu_id->name }} 
                        @endif
                    </li>
                </ul>
            </div>                    
        </div>
    </div>
</section>




@if($parent_menu_id->layout_name == 'ABOUT')

  <!-- Welcome Section Three -->
  <section class="welcome-section-three">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one wow fadeInUp" data-wow-duration="1500ms">
                            <img src="assets/images/resource/image-8.jpg" alt="">
                            <div class="experience-years">
                                <div class="icon"><span class="fab fa-twitter"></span></div>
                                <h4>36 Years of <br> Expericence</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-side">
                        <div class="sec-title mb-40">
                            <div class="sub-title">Welcome to Welbim</div>
                            <h2>We’re Committed <br> To quality</h2>
                        </div>
                        <div class="text mb-35">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud exercitation.</div>
                        <div class="bottom-content">

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li>We provide 24/7 service</li>
                                        <li>We strick to deadline</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li>We offer upfront pricing</li>
                                        <li>We use latest technology</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="progress-levels">
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>Welding</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="91"><div class="percent"></div></div></div>
                                        </div>                                
                                    </div>
                                </div>
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>Metal Work</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="78"><div class="percent"></div></div></div>
                                        </div>                                
                                    </div>
                                </div>
                                <!--Skill Box-->
                                <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <h5>Steel Weld</h5>
                                    <div class="inner">
                                        <div class="bar">
                                            <div class="bar-innner"><div class="bar-fill" data-percent="64"><div class="percent"></div></div></div>
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


<!-- Service details -->
<section class="service-details">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-side">
                   
                    <h2>Metal Work</h2>
                    <div class="text">
                        <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum take a look at our round. When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                    </div>
                    <div class="row mb-30">
                        <div class="col-md-6">
                            <div class="image"><img src="assets/images/resource/image-16.jpg" alt=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="image"><img src="assets/images/resource/image-17.jpg" alt=""></div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <aside class="col-lg-4 sidebar service-sidebar">
                <div class="widget consult-widget">
                    <div class="icon"><span class="fab fa-twitter"></span></div>
                    <div class="text">Contact with <br> us for any <br> project</div>
                    <div class="phone"><a href="tel:928886660000">92 888 666 0000</a></div>
                </div>
            </aside>
        </div>                        
    </div>
</section>






    <!-- Testimonials section two -->
    <section class="testimonials-section-two style-two" style="background-image: url(assets/images/resource/map.png)">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title text-center">Testimonials</div>
                <h2>What they say</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                    <div class="testimonial-block-two">
                        <div class="inner-box">                            
                            <div class="text">There are many variations of passage of lorem ipsum but the majority alteration in some form, by rando mised words noted digital simply look.
                            </div>
                            <h4>Jessica Brown <span>Co-Founder</span></h4>
                            <div class="author-thumb">
                                <img src="assets/images/resource/author-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">                            
                            <div class="text">There are many variations of passage of lorem ipsum but the majority alteration in some form, by rando mised words noted digital simply look.
                            </div>
                            <h4>John Smith  <span>Co-Founder</span></h4>
                            <div class="author-thumb">
                                <img src="assets/images/resource/author-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-two">
                        <div class="inner-box">                            
                            <div class="text">There are many variations of passage of lorem ipsum but the majority alteration in some form, by rando mised words noted digital simply look.
                            </div>
                            <h4>Christine eve <span>Co-Founder</span></h4>
                            <div class="author-thumb">
                                <img src="assets/images/resource/author-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>            
        </div>
    </section>



    <!-- Team Section -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="wrapper-box">
                <h3>Looking for a quality and <br>affordable project?</h3>
                <div class="link">
                    <a href="#" class="theme-btn btn-style-one"><span>Contact With Us</span></a>
                </div>
            </div>
        </div>
    </section>

		
		

@elseif($parent_menu_id->layout_name == 'SERVICES')

<!-- Services Section -->
<section class="services-section style-two">



        <div class="auto-container">
            <div class="row">
            @foreach(@$services as $service)
                <div class="col-lg-4 col-md-6 service-block">
                    <div class="inner-box">
                        <div class="image"><span class="border-shape"></span><img src="{{@$service->image}}" alt=""></div>
                        <div class="content">
                            <h3><a href="{{route('service-detail',[@$service->subMenu->slug])}}"> {{@$service->title}}</a></h3>
                            <div class="text">{{@$service->excerpt}}</div>
                            <div class="link">
                                <a href="{{route('service-detail',[@$service->subMenu->slug])}}" class="theme-btn btn-style-one"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
