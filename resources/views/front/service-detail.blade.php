@extends('front.layout')

@section('meta')
@section('title', ucwords(strtolower((@$dynamic_content['seo_title']))))
<meta name="author" content="Safety Guard">
<meta name="description" content="{!! @$dynamic_content['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_content['meta_keywords'] !!}">

@endsection

@section('header-script')
{!! @$dynamic_content['header_script'] !!}
@endsection

@section('main')

<!-- Breadcrumbs Start -->
<div class="container th-container2">
    <div class="breadcumb-wrapper  " data-bg-src="{{@$dynamic_content->banner_image}}">
        <h1 class="breadcumb-title">{{@$dynamic_content->title}}</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>{{@$sub_menu_id->name}}</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Project Section Start -->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="page-single">
                    <div class="page-img">
                        <img class="w-100" src="{{@$dynamic_content->image}}" alt="Service Image">
                    </div>
                    <h3 class="single-title">{{@$dynamic_content->excerpt}}</h3>
                    <div class="service-content">

                        {!! removeExtraChar(@$dynamic_content->body) !!}

                        <div class="row gy-30 mb-40">
			@if(@$post_tabs)
			@foreach($post_tabs as $tab)
			@if($tab->tab_image)
                            <div class="col-md-12">
                                <img class="w-100" src="{{@$tab->tab_image}}" alt="image">
                            </div>
                            <div class="col-md-12">
				<h4 class="text-uppercase mb-20">{{@$tab->tab_title}}</h4>
                                 {!! removeExtraChar(@$tab->tab_body) !!}
                            </div>
			@else
			<div class="col-md-12">
			<h4 class="text-uppercase mb-20">{{@$tab->tab_title}}</h4>
				 {!! removeExtraChar(@$tab->tab_body) !!}
			</div>
			@endif
			@endforeach
			@endif
                        </div>

                        {{-- <h4 class="text-uppercase mb-20">3 Simple Steps to Process</h4>
                        <p class="mb-30">Assertively e-enable catalysts for change before fully tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform distinctive collaboration.</p>
                        <p class="mb-30">Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently predominate revolutionary quality vectors through future-proof manufactured products.</p>
                        <div class="row gy-30">
                            <div class="col-md-6">
                                <img class="w-100" src="/assets/img/service/service_inner_2.jpg" alt="image">
                            </div>
                            <div class="col-md-6">
                                <img class="w-100" src="/assets/img/service/service_inner_3.jpg" alt="image">
                            </div>
                        </div>
                        <p class="mt-30 mb-n2">Conveniently predominate revolutionary quality vectors through future-proof manufactured products. Objectively envisioneer high in convergence through collaborative networks. Interactively generate B2C tailers for business data restore fully researched relationships through.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area">
                    <!-- <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">Interior Design</a>
                            </li>
                            <li>
                                <a href="blog.html">Architecture</a>
                            </li>
                            <li>
                                <a href="blog.html">Landscape</a>
                            </li>
                            <li>
                                <a href="blog.html">Urban Interventions</a>
                            </li>
                            <li>
                                <a href="blog.html">Interdisciplinary entities</a>
                            </li>
                            <li>
                                <a href="blog.html">Safety Guard Everything</a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="widget widget_download  ">
                        <h4 class="widget_title">Download</h4>
                        <div class="donwload-media-wrap">
                            <div class="download-media">
                                <div class="download-media_icon">
                                    <i class="fal fa-file-pdf"></i>
                                </div>
                                <div class="download-media_info">
                                    <h5 class="download-media_title">Our Brochures</h5>
                                    <a href="">
                                        <span class="download-media_text">Download</span>
                                    </a>
                                </div>
                                <a href="/about-us" class="download-media_btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                            <div class="download-media">
                                <div class="download-media_icon">
                                    <i class="fal fa-file-lines"></i>
                                </div>
                                <div class="download-media_info">
                                    <h5 class="download-media_title">Company Details</h5>
                                    <span class="download-media_text">Download</span>
                                </div>
                                <a href="/about-us" class="download-media_btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget  ">
                        <div class="widget-banner">
                            <h4 class="title" data-bg-src="/assets/img/bg/widget_banner.jpg">Best Architecture <br> <span class="text-transparent">Services</span></h4>
                            <div class="content">
                                <a href="+12345678900" class="link"><i class="fas fa-phone"></i>(123) 4567 8900</a>
                                <p class="text">Monday – Friday: 7:00 am -8:00 pm 24/7 Emergency Service</p>
                                <a href="/about-us" class="th-btn"><span class="line left"></span> About Us <span class="line"></span></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

    </div>
</section>

<!-- Project Section End -->

@endsection
