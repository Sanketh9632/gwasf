@extends('front.layout')

@section('meta')
@section('title', 'Safety Guard | Blog')
<meta name="author" content="Safety Guard">
<meta name="description" content="">
<meta name="keywords" content="">

@endsection

@section('css')

@endsection

@section('main')

<div class="container th-container2">
        <div class="breadcumb-wrapper  " data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
            <h1 class="breadcumb-title">Latest Blogs</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Latest Blogs</li>
            </ul>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-8">

                @foreach(@$recent_news as $news)
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="{{route('blog-detail', [$news->slug])}}"><img src="{{@$news->image}}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <!-- <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by Admin</a> -->
                            <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>{{@$news->event_date->format('M d, Y')}}</a>
                            <a href="{{route('blog')}}"><i class="fas fa-tags"></i>{{@$news->category->title}}</a>
                        </div>
                        <h2 class="blog-title"><a href="{{route('blog-detail', [$news->slug])}}">{{@$news->title}}</a></h2>
                        <p>{{@$news->excerpt}}</p>
                        <a href="{{route('blog-detail', [$news->slug])}}" class="th-btn">Read Details</a>
                    </div>
                </div>

                @endforeach


                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="#"><img src="/assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by David Smith</a>
                                <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>March 15, 2024</a>
                                <a href="{{route('blog')}}"><i class="fas fa-tags"></i>Architecture</a>
                            </div>
                            <h2 class="blog-title"><a href="#">Brief History on the Beginnings of Modern Architecture</a></h2>
                            <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate Rapidiously repurpose leading edge.</p>
                            <a href="#" class="th-btn">Read Details</a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-carousel" data-arrows="true" data-slide-show="1" data-fade="true">
                            <a href="#"><img src="/assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                            <a href="#"><img src="/assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by David Smith</a>
                                <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>March 16, 2024</a>
                                <a href="{{route('blog')}}"><i class="fas fa-tags"></i>Architecture</a>
                            </div>
                            <h2 class="blog-title"><a href="#">Drists History on the Beginnings of Modern Interior</a></h2>
                            <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate Rapidiously repurpose leading edge.</p>
                            <a href="#" class="th-btn">Read Details</a>
                        </div>
                    </div>

                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by David Smith</a>
                                <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>March 17, 2024</a>
                                <a href="{{route('blog')}}"><i class="fas fa-tags"></i>Architecture</a>
                            </div>
                            <h2 class="blog-title"><a href="#">History on the Beginnings of Modern Architecture</a></h2>
                            <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies</p>
                            <a href="#" class="th-btn">Read Details</a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="#"><img src="/assets/img/blog/blog-s-1-4.jpg" alt="Blog Image"></a>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by David Smith</a>
                                <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>March 17, 2024</a>
                                <a href="{{route('blog')}}"><i class="fas fa-tags"></i>Architecture</a>
                            </div>
                            <h2 class="blog-title"><a href="#">Origin of Art on the Beginnings of Modern Architecture</a></h2>
                            <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate Rapidiously repurpose leading edge..</p>
                            <a href="#" class="th-btn">Read Details</a>
                        </div>
                    </div>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-audio">
                            <iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD" width="751" height="200" src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{route('blog')}}"><i class="fas fa-user-circle"></i>by David Smith</a>
                                <a href="{{route('blog')}}"><i class="fas fa-calendar-alt"></i>March 19, 2024</a>
                                <a href="{{route('blog')}}"><i class="fas fa-tags"></i>Architecture</a>
                            </div>
                            <h2 class="blog-title"><a href="#">Brief History on the Beginnings of Modern Architecture</a></h2>
                            <p>Collaboratively pontificate bleeding edge is resources with inexpensive methodologies. Globally initiate multidisciplinary compatible architectures. Rapidiously repurpose leading edge growth strategies with just in time web readiness communicate Rapidiously repurpose leading edge.</p>
                            <a href="#" class="th-btn">Read Details</a>
                        </div>
                    </div>

                    <div class="th-pagination  ">

                        {{-- {{ @$recent_news->links() }}  --}}
                            
                        <ul>
                            <li><a href="{{route('blog')}}">1</a></li>
                            <li><a href="{{route('blog')}}">2</a></li>
                            <li><a href="{{route('blog')}}">3</a></li>
                            <li><a href="{{route('blog')}}"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <aside class="sidebar-area">
                        <!-- <div class="widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div> -->
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>

                                @foreach(@$categories as $category)
                                <li>
                                    <a href="{{route('blog-filter',[@$category->slug])}}">{{@$category->title}}</a>
                                </li>
                                @endforeach
                                
                                <li>
                                    <a href="{{route('blog')}}">Architecture</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">Landscape</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">Urban Interventions</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">Interdisciplinary entities</a>
                                </li>
                                <li>
                                    <a href="{{route('blog')}}">Safety Guard Everything</a>
                                </li>
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
                                            <a href="{{route('blog-detail',[@$news->slug])}}"><i class="fal fa-user-circle"></i>by Admin</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="{{route('blog-detail',[@$news->slug])}}">{{@$news->title}}</a></h4>
                                    </div>
                                </div>
                                @endforeach

                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="#"><img src="/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{route('blog')}}"><i class="fal fa-user-circle"></i>by Vivi Marian</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="#">Drists History on the Beginnings of Modern Interior</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="#"><img src="/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{route('blog')}}"><i class="fal fa-user-circle"></i>by John Deo</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="#">Origin of Art on the Beginnings of Modern Architecture</a></h4>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- <div class="widget  ">
                            <h4 class="widget_title">Gallery Posts</h4>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100">
                                </div>
                                <div class="gallery-thumb">
                                    <img src="/assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100">
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="{{route('blog')}}">Design</a>
                                <a href="{{route('blog')}}">Interior</a>
                                <a href="{{route('blog')}}">Safety Guard</a>
                                <a href="{{route('blog')}}">Agency</a>
                                <a href="{{route('blog')}}">Minimal</a>
                                <a href="{{route('blog')}}">Decor Plan</a>
                                <a href="{{route('blog')}}">Urban</a>
                            </div>
                        </div> -->
                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
