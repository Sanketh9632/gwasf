@extends('front.layout')

@section('meta')

@section('title', 'Safety Guard | Contact Us')
<meta name="author" content="Safety Guard">
<meta name="description" content="">
<meta name="keywords" content="">

@endsection

@section('css')

@endsection

@section('main')

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<div class="container th-container2">
    <div class="breadcumb-wrapper  " data-bg-src="storage/files/Bread/Blog.jpg">
        <h1 class="breadcumb-title">Contact Us</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>


      @if (session()->has('success'))
      <div class="alert alert-success text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        {!! session()->get('success') !!}
      </div>
      @endif

<section class="spaces">
            <div class="container">
                 <div class="space-bottoms">
                     <div class="widget-area">

        <div class="row justify-content-between">
            <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.2s">
                <div class="widget footer-widget rests ">
                    <h4 class="widget_title">call</h4>
                    <h6 class="footer-info">
                        <a class="link" href="tel:{{@$address->phone}}">{{@$address->phone}}</a>
                        {{-- <a class="link" href="tel:+38012456789000">+380 1245 6789 000</a> --}}
                    </h6>
                </div>
            </div>
            <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.3s">
                <div class="widget footer-widget rests">
                    <h4 class="widget_title">Email</h4>
                    <h6 class="footer-info">
                        <a class="link" href="mailto:{{@$address->email}}">{{@$address->email}}</a>
                        {{--<a class="link" href="mailto:artraz@artrazmail.com">artraz@artrazmail.com</a>--}}
                    </h6>
                </div>
            </div>
            <div class="col-sm-6 col-lg-auto wow fadeInUp" data-wow-delay="0.4s">
                <div class="widget footer-widget rests">
                    <h4 class="widget_title">Visit</h4>
                    <h6 class="footer-info">
                        <a class="link" href="#">{!! @$address->address !!}</a>
                    </h6>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
      
    
		<section class="space">
        <div class="container">
             <div class="space-bottom">
            <div class="row justify-content-between">
                <div class="col-xl-6 mb-5 mb-xl-0 wow fadeInLeft" data-wow-delay="0.2s">
                    <span class="h6 mt-n2 mb-3 text-theme">Contact Us</span>
                    <h2 class="sec-title mb-45">Do you need any help? <br>Send <span class="text-theme">Message.</span></h2>
                    <form class="contact-form" method="post" action="{{ route('contact') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" Required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="phone" id="number" placeholder="Your Number" Required="">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" Required="">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" Required="">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message" Required=""></textarea>
                            </div>
                            <div class="form-group col-12">
                              <div class="cf-turnstile" data-sitekey="{{ config('app.cf_site_key') }}" data-theme="light" Required=""></div>
                            </div>
                            <div class="form-btn col-12 mt-10">
                                <button class="th-btn" type="submit"><span class="line left"></span>Send<span class="line"></span></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="contact-map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.8499024406738!2d55.37741347271263!3d25.275634179168563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ddc9bdddd6b%3A0x4533978975c7c0e8!2sSafety%20Gard%20Dubai!5e0!3m2!1sen!2sin!4v1716541967813!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('script')

@endsection
