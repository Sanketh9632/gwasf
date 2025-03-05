@extends('front.layout')

@section('meta')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('title', ucwords(strtolower((@$dynamic_content['seo_title']))))
<meta name="author" content="">
<meta name="description" content="{!! @$dynamic_content['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_content['meta_keywords'] !!}">

@endsection

@section('header-script')
{!! @$dynamic_content['header_script'] !!}
@endsection

@section('main')

<div id="content" class="site-content">
            <div class="page-header dtable text-center header-transparent pheader-service-detail1" data-bg-src="/{{@$dynamic_content->banner_image}}">
                <div class="dcell">
                    <div class="container">
                        <h1 class="page-title"><b>{{@$dynamic_content->title}}</b></h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html"><b>Home</b></a></li>
                            <li><a href="our-services.html"><b>Our Services</b></a></li>
                            <li class="active"><b>{{@$dynamic_content->title}}</b></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>


        <section class="services-single">
            <div class="container">
                <div class="row">
                    <div class="widget-area col-lg-3 col-md-12 d-none d-sm-block">
                        <div class="widget widget_nav_menu">
                            <ul class="services-menu">
                                <li class="current-menu-item"><a href="servcies-detail-1.html"><span>01.</span> Design & Planning</a></li>
                                <li><a href="servcies-detail-2.html"><span>02.</span> Exterior Design</a></li>
                                <li><a href="servcies-detail-3.html"><span>03.</span> Custom Solutions</a></li>
                                <li><a href="servcies-detail-4.html"><span>04.</span> Furniture & Decor</a></li>
                                <li><a href="servcies-detail-5.html"><span>05.</span> Creating Concept</a></li>
                                <li><a href="servcies-detail-6.html"><span>06.</span> Author`s Control</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="services-detail-content">
                            <div class="ot-heading ">
                                <span>[ what we offer ]</span>
                                <h2 class="main-heading">{{@$dynamic_content->excerpt}}</h2>
                            </div>
                            {!! removeExtraChar(@$dynamic_content->body) !!}
                            <!-- <div class="simple-slide owl-theme owl-carousel">
                                <div class="item">
                                    <img src="images/Service-details/servicepage1.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/Service-details/servicepage2.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/Service-details/servicepage1.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="images/Service-details/servicepage2.png" alt="">
                                </div>
                            </div> -->
                            
                            <!-- <img src="/images/Service-details/middle.jpg" class="detail-img" alt="">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                                    <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
                                        <div class="inner-bar" data-percent="">
                                            <span><span class="percent"><i class="bi bi-badge-3d"></i></span></span>
                                        </div>
                                        <h4>3D modeling</h4>
                                    </div>
                                    <p>Studio provides a full range<br>of 3D interior modeling</p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-3 mb-lg-0 text-center">
                                    <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
                                        <div class="inner-bar" >
                                            <span><span class="percent"><i class="bi bi-rulers"></i></span></span>
                                        </div>
                                        <h4>ROOM MEASUREMENT</h4>
                                    </div>
                                    <p>Development of iperfect design<br>of the project</p>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="circle-progress tbottom" data-color="#939393" data-height="2" data-size="165" data-processed="true">
                                        <div class="inner-bar" data-percent="">
                                            <span><span class="percent"><i class="bi bi-bounding-box"></i></span></span>
                                        </div>
                                        <h4>2d planning</h4>
                                    </div>
                                    <p>We provide 2D planning<br>for great visualization</p>
                                </div>
                            </div>
                           -->
                           @if(@$post_tabs)
			@foreach($post_tabs as $tab)
			@if($tab->tab_image)
                            <section class="cta bka" data-bg-src="{{@$tab->tab_image}}">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-8 mb-0 mb-lg-0">
                                            <h2 class="text-light mb-0" style="font-size: 2rem;">{{@$tab->tab_title}}</h2>
                                            <div class="space-5"></div>
                                            <p class=" mb-0 text-white">{!! removeExtraChar(@$tab->tab_body) !!}</p>
                                        </div>
                                        <div class="col-lg-4 text-left text-lg-right align-self-center">
                                            <div class="ot-button">
                                                <a href="contact.html" class="octf-btn octf-btn-light border-hover-light">get in touch</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            @endif
			@endforeach
			@endif

                            
                        </div> 
                    </div>
                </div>
            </div>
        </section>

    
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>       

@endsection
