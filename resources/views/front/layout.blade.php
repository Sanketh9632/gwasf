<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Themeholy">
    <meta name="robots" content="INDEX,FOLLOW">
    @yield('meta')
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@100;200;300;400;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="/assets/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
@yield('css')
</head>

<body class="">

<!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--********************************
   		Code Start From Here 
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="th-cursor"></div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{route('home')}}"><img src="/assets/img/logo.png" alt="Safety Guard"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                @foreach($parent_menu->where('display_menu','Y')->where('status', 'Active') as $main_menu)
                @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)

                    <li class="menu-item-has-children"><a href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }} </a>
                    <ul class="sub-menu">
                    @foreach($main_menu->submenus as $main_sub_menu)
                    @if(@$main_sub_menu->link_active)
                        <li><a href="{{@$main_sub_menu->link}}" target="_blank">{{ $main_sub_menu->name }}</a></li>
                    @else
                        @if($main_sub_menu->child_menu == 'Y' && $main_sub_menu->childmenus->count() !== 0)
                        <li class="menu-item-has-children"><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug])}}">{{ $main_sub_menu->name }} </a>
                        <ul class="sub-menu">
                            @foreach($main_sub_menu->childmenus as $main_child_menu)
                            @if(@$main_child_menu->link_active)
                            <li><a href="{{@$main_child_menu->link}}" target="_blank">{{ $main_child_menu->name }}</a></li>
                            @else
                            <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug, $main_child_menu->slug]) }}">{{ $main_child_menu->name }}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug]) }}">{{ $main_sub_menu->name }}</a>
                    </li>
                    @endif
                    @endif
                    @endforeach
                </ul>
            </li>
            @else
            <li><a href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }}</a></li>
            @endif
            @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout4">
        <div class="header-top">
            <div class="th-container container">
                <div class="social-box">
                    <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <!-- Main Menu Area -->
                <div class="menu-area">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="{{route('home')}}"><img src="/assets/img/logo.png" alt="Safety Guard"></a>
                                </div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>

                                    @foreach($parent_menu->where('display_menu','Y')->where('status', 'Active') as $main_menu)
                                    @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)

                                        <li class="menu-item-has-children"><a href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }} </a>
                                        <ul class="sub-menu">
                                        @foreach($main_menu->submenus as $main_sub_menu)
							            @if(@$main_sub_menu->link_active)
                                            <li><a href="{{@$main_sub_menu->link}}" target="_blank">{{ $main_sub_menu->name }}</a></li>
							            @else
                                            @if($main_sub_menu->child_menu == 'Y' && $main_sub_menu->childmenus->count() !== 0)
                                            <li class="menu-item-has-children"><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug])}}">{{ $main_sub_menu->name }} </a>
                                            <ul class="sub-menu">
                                                @foreach($main_sub_menu->childmenus as $main_child_menu)
								                @if(@$main_child_menu->link_active)
								                <li><a href="{{@$main_child_menu->link}}" target="_blank">{{ $main_child_menu->name }}</a></li>
								                @else
                                                <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug, $main_child_menu->slug]) }}">{{ $main_child_menu->name }}</a></li>
								                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @else
                                        <li><a href="{{ route('dynamicpage',[$main_menu->slug, $main_sub_menu->slug]) }}">{{ $main_sub_menu->name }}</a>
                                        </li>
                                        @endif
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('dynamicpage',[$main_menu->slug]) }}">{{ $main_menu->name }}</a></li>
                                @endif
                                @endforeach

                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
    Hero Area
    ==============================-->

    @yield('main')

    <footer class="footer-wrapper footer-layout2">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">meet?</h4>
                        <div class="logo">
                            <img src="/assets/img/logo.png" alt="Safety Guard">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.2s">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">call</h4>
                        <h6 class="footer-info">
                            <a class="link" href="tel:{{@$address->phone}}">{{@$address->phone}}</a>
                            {{-- <a class="link" href="tel:+38012456789000">+380 1245 6789 000</a> --}}
                        </h6>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Email</h4>
                        <h6 class="footer-info">
                            <a class="link" href="mailto:{{@$address->email}}">{{@$address->email}}</a>
                            {{--<a class="link" href="mailto:artraz@artrazmail.com">artraz@artrazmail.com</a>--}}
                        </h6>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.4s">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Visit</h4>
                        <h6 class="footer-info">
                            <a class="link" href="#">{{@$address->address}}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="th-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://skype.com/"><i class="fab fa-skype"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-auto">
                    <p class="copyright-text">Copyright By © <a href="{{route('home')}}">Safety Guard</a> - 2024</p>
                </div>
            </div>

        </div>
    </div>
</footer>

<!--********************************
        Code End  Here 
******************************** -->

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>


    <!--********************************
			Code End  Here 
	******************************** -->


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- Slick Slider -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Magnific Popup -->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <!-- Tilt Js -->
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <!-- Wow Animation -->
    <script src="/assets/js/wow.min.js"></script>
    <!-- Main Js File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
