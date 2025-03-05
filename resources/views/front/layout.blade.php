<!DOCTYPE html>
<html lang="en">
<head>
@yield('meta')
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
@yield('css')
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>

    <!-- Main Header -->
    <header class="main-header header-style-one">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="contact-info">
                        <li><a href="mailto:needhelp@company.com"><i class="flaticon-email-1"></i>needhelp@company.com</a></li>
                        <li><a href="tel:928886660000"><i class="flaticon-telephone"></i>92 888 666 0000</a></li>
                        <li><i class="flaticon-pin"></i>80 Golden Street USA</li>
                    </ul>
                </div>
                <div class="right-column">
                    <ul class="social-icon">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{route('home')}}"><img src="/assets/images/logo.png" alt="GWASF"></a></div>
                </div>
                <div class="right-column">
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
        <ul class="navigation">
            <!-- Home link -->
            <li class="{{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                <a href="{{ route('home') }}">Home</a>
            </li>

            <!-- Dynamic Menus -->
            @foreach($parent_menu->where('display_menu', 'Y')->where('status', 'Active') as $main_menu)
                @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)
                    <li class="dropdown {{ request()->is($main_menu->slug) ? 'current-menu-item' : '' }}">
                        <a href="{{ route('dynamicpage', [$main_menu->slug]) }}">{{ $main_menu->name }}</a>
                        <ul>
                            @foreach($main_menu->submenus as $submenu)
                                @if($submenu->sub_menu == 'Y' && $submenu->submenus->count() !== 0)
                                    <li class="dropdown">
                                        <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug]) }}">{{ $submenu->name }}</a>
                                        <ul>
                                            @foreach($submenu->submenus as $childmenu)
                                                <li>
                                                    <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug, $childmenu->slug]) }}">{{ $childmenu->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug]) }}">{{ $submenu->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="{{ request()->is($main_menu->slug) ? 'current-menu-item' : '' }}">
                        <a href="{{ route('dynamicpage', [$main_menu->slug]) }}">{{ $main_menu->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('home')}}"><img src="/assets/images/logo.png" alt="GWASF"></a></div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light"></nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-remove"></span></div>

        <nav class="menu-box">
    <div class="nav-logo">
        <a href="{{route('home')}}"><img src="/assets/images/decor-logo.png" alt=""></a>
    </div>
    <div class="menu-outer">
        <ul>
            <li class="{{ request()->routeIs('home') ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}">Home</a>
            </li>
            @foreach($parent_menu->where('display_menu', 'Y')->where('status', 'Active') as $main_menu)
                <li class="menu-item-has-children {{ request()->is($main_menu->slug.'*') ? 'current-menu-item current-menu-ancestor' : '' }}">
                    <a href="{{ route('dynamicpage', [$main_menu->slug]) }}">{{ $main_menu->name }}</a>
                    @if($main_menu->sub_menu == 'Y' && $main_menu->submenus->count() !== 0)
                        <ul>
                            @foreach($main_menu->submenus as $submenu)
                                @if($submenu->sub_menu == 'Y' && $submenu->submenus->count() !== 0)
                                    <li class="menu-item-has-children {{ request()->is($main_menu->slug.'/'.$submenu->slug.'*') ? 'current-menu-item current-menu-ancestor' : '' }}">
                                        <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug]) }}">{{ $submenu->name }}</a>
                                        <ul>
                                            @foreach($submenu->submenus as $childmenu)
                                                <li class="{{ request()->is($main_menu->slug.'/'.$submenu->slug.'/'.$childmenu->slug.'*') ? 'current-menu-item' : '' }}">
                                                    <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug, $childmenu->slug]) }}">{{ $childmenu->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="{{ request()->is($main_menu->slug.'/'.$submenu->slug.'*') ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('dynamicpage', [$main_menu->slug, $submenu->slug]) }}">{{ $submenu->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>

    <!--Social Links-->
    <div class="social-links">
        <ul class="clearfix">
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
        </ul>
    </div>
</nav>


    </div>
    <!-- End Mobile Menu -->

    <div class="nav-overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
</header>

    <!-- End Main Header -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>




    @yield('main')



 <!--Main Footer-->
 <footer class="main-footer" style="background-image: url(assets/images/background/bg-5.jpg);">
        <div class="upper-box">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget about-widget">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></div>
                            <div class="text">Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor incididunt ut labore et.</div>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget links-widget">
                            <h4 class="widget_title">Links</h4>
                            <div class="widget-content">
                                <ul class="list">
                                    <li><a href="#"> About </a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Latest Projects</a></li>
                                    <li><a href="#">News & Articles</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget news-widget">
                            <h4 class="widget_title">Latest News</h4>
                            <div class="news-widget-wrapper">
                                <div class="post">
                                    <div class="image"><a href="blog-details.html"><img src="assets/images/resource/news-4.jpg" alt=""></a></div>
                                    <div class="content">
                                        <div class="date">15 Aug, 2020</div>
                                        <h4><a href="blog-details.html"> We’re creating a Metal <br>Product</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="image"><a href="blog-details.html"><img src="assets/images/resource/news-5.jpg" alt=""></a></div>
                                    <div class="content">
                                        <div class="date">15 Aug, 2020</div>
                                        <h4><a href="blog-details.html"> We’re creating a Metal <br>Product</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget contact-widget">
                            <h4 class="widget_title">Contact</h4>
                            <div class="wrapper-box">
                                <div class="icon-box">
                                    <div class="icon"><span class="flaticon-pin"></span></div>
                                    <div class="text">88 broklyn golden street, New
                                        York. USA</div>
                                </div>
                                <div class="icon-box">
                                    <div class="icon"><span class="flaticon-email-1"></span></div>
                                    <div class="text"><a href="mailto:needhelp@company.com">needhelp@company.com</a></div>
                                </div>                                
                                <div class="icon-box">
                                    <div class="icon"><span class="flaticon-telephone"></span></div>
                                    <div class="text"><a href="tel:926668880000">92 666 888 0000</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>               
    </footer>
    <!--End Main Footer-->

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="content">
                <ul class="social-icon">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="copyright-text">© Copyright 2022 by Company.com</div>
            </div>            
        </div>
    </div>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-4"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>
</html>










































   



   