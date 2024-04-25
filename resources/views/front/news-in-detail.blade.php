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

<div class="container th-container2">
    <div class="breadcumb-wrapper  " data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
        <h1 class="breadcumb-title">{{@$dynamic_content->title}}</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>{{@$dynamic_content->title}}</li>
        </ul>
    </div>
</div>

<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-8">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{@$dynamic_content->image}}" alt="Blog Image">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="#"><i class="fas fa-user"></i>by Admin</a>
                            <a href="#"><i class="far fa-calendar-alt"></i>{{@$dynamic_content->event_date->format('M d, Y')}}</a>
                            <a href="#"><i class="fas fa-tags"></i>{{@$dynamic_content->category->title}}</a>
                        </div>
                        <h2 class="blog-title">{{@$dynamic_content->title}}</h2>

                        {!! removeExtraChar(@$dynamic_content->body) !!}
                        
                    </div>
                    <div class="share-links clearfix  ">
                        <div class="row justify-content-between">
                            <!-- <div class="col-md-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <a href="#">Service</a>
                                    <a href="#">Repair</a>
                                </div>
                            </div> -->
                            <div class="col-md-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end -->
                        </div>
                    </div>
                    <!-- <div class="blog-author">
                        <div class="auhtor-img">
                            <img src="/assets/img/blog/blog-author.jpg" alt="Blog Author Image">
                        </div>
                        <div class="media-body">
                            <h3 class="author-name"><a class="text-inherit" href="team-details.html">Imon Hossain</a></h3>
                            <p class="author-text">Optimize resource eveling innoation whereas visionary value. Compellingly engage extensible process with business process improvements.</p>
                            <ul class="social-links">
                                <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="blog-navigation">
                        <a href="blog-details.html" class="nav-btn prev">
                            <img src="/assets/img/blog/blog-nav-1.jpg" alt="blog img" class="nav-img">
                            <span class="nav-text">Previous Post</span>
                        </a>
                        <a href="#" class="blog-btn"><i class="fa-solid fa-grid"></i></a>
                        <a href="blog-details.html" class="nav-btn next">
                            <img src="/assets/img/blog/blog-nav-2.jpg" alt="blog img" class="nav-img">
                            <span class="nav-text">Next Post</span>
                        </a>
                    </div>
                    <!-- <div class="th-comments-wrap  ">
                        <h2 class="blog-inner-title h3">Comments (03)</h2>
                        <ul class="comment-list">
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="/assets/img/blog/comment-author-1.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="far fa-calendar-alt"></i>14 March, 2024</span>
                                        <h3 class="name">David Malan</h3>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets whereas synergistic scenarios.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater">
                                                <img src="/assets/img/blog/comment-author-2.jpg" alt="Comment Author">
                                            </div>
                                            <div class="comment-content">
                                                <span class="commented-on"><i class="far fa-calendar-alt"></i>15 March, 2024</span>
                                                <h3 class="name">Anadi Juila</h3>
                                                <p class="text">Competently provide access to fully researched methods of empowerment
                                                    without sticky models. Credibly morph front-end niche markets.</p>
                                                <div class="reply_and_edit">
                                                    <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="th-comment-item">
                                <div class="th-post-comment">
                                    <div class="comment-avater">
                                        <img src="/assets/img/blog/comment-author-3.jpg" alt="Comment Author">
                                    </div>
                                    <div class="comment-content">
                                        <span class="commented-on"><i class="far fa-calendar-alt"></i>16 March, 2024</span>
                                        <h3 class="name">Tara sing</h3>
                                        <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets whereas synergistic scenarios.</p>
                                        <div class="reply_and_edit">
                                            <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                        <!-- Comment end --> <!-- Comment Form -->
                    <!-- <div class="th-comment-form  ">
                        <div class="form-title">
                            <h3 class="blog-inner-title h3">Leave a Comment</h3>
                            <p class="form-text">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Name*" class="form-control">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" placeholder="Your Email*" class="form-control">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" placeholder="Website" class="form-control">
                                <i class="fal fa-globe"></i>
                            </div>
                            <div class="col-12 form-group">
                                <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                                <i class="fal fa-pencil"></i>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <button class="th-btn"><span class="line left"></span> Post Comment <span class="line"></span></button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 ps-lg-2">
                <aside class="sidebar-area">
                    <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach(@$categories as $category)
                            <li>
                                <a href="#">{{@$category->title}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">

                            @foreach(@$recent_news as $news)
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="{{route('blog-detail',[@$news->slug])}}"><img src="{{@$news->image}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <div class="recent-post-meta">
                                        <a href="#"><i class="fal fa-user-circle"></i>by Admin</a>
                                    </div>
                                    <h4 class="post-title"><a class="text-inherit" href="{{route('blog-detail',[@$news->slug])}}">{{@$news->title}}</a></h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="#">Design</a>
                            <a href="#">Interior</a>
                            <a href="#">Artraz</a>
                            <a href="#">Agency</a>
                            <a href="#">Minimal</a>
                            <a href="#">Decor Plan</a>
                            <a href="#">Urban</a>
                        </div>
                    </div> -->
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

@endsection