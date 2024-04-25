@extends('front.layout')

@section('meta')
@section('title', 'Career')
<meta name="author" content="Safety Guard">
<meta name="description" content="{!! @$dynamic_content['meta_description'] !!}">
<meta name="keywords" content="{!! @$dynamic_content['meta_keywords'] !!}">

@endsection

@section('header-script')
{!! @$dynamic_content['header_script'] !!}
@endsection

@section('main')

<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img3">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Career</h1>
        <ul>
            <li title="SGS">
                <a class="active" href="{{route('home')}}">Home</a>
            </li>
            <li>Career</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Contact Section Start -->
<div class="rs-contact pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="contact-widget">
                    <div class="sec-title2 mb-40">

                        <h2 class="title testi-title">Fill The Form Below</h2>

                    </div>
                    <div id="form-messages"></div>
                    <form class="form" method="post" action="{{ route('post-resume') }}" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="email" id="email" name="email" placeholder="E-Mail" required="">
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                </div>
                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                    <input class="from-control" type="file" id="file" name="file" placeholder="" required="">
                                </div>

                            </div>
                            <div class="btn-part">
                                <div class="form-group col-md-12">
                                    {{-- <div class="g-recaptcha" data-sitekey="{{ config('app.site_key') }}">
                                </div> --}}
                                <div class="cf-turnstile" data-sitekey="{{ config('app.cf_site_key') }}" data-theme="light"></div>
                            </div>
                            <div class="form-group mb-0">
                                <input class="readon learn-more submit" type="submit" value="Submit Now">
                            </div>
                </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Contact Section Start -->

@endsection