<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="msvalidate.01" content="3F35566F94C734BD5677B6F1941A593F" />

    <meta name="DC.title" content="Safety Guard" />
    <meta name="geo.region" content="AE" />
    <meta name="geo.placename" content="Dubai Emirate" />
    <meta name="geo.position" content="25.07501;55.188761" />
    <meta name="ICBM" content="25.07501, 55.188761" />
    <meta name="google-site-verification" content="2BPleQqi5ozU39CzKd-uisZeESNOFhQnyXWGfQxYjnM" />

    <meta name="Language" content="English" />
    <meta name="rating" content="General">
    <meta name="revisit-after" content="2 days">
    <meta name="YahooSeeker" content="INDEX, FOLLOW">
    <meta name="msnbot" content="INDEX, FOLLOW">
    <meta name="allow-search" content="yes">

    <meta name="revisit-after" content="2 days">

    <meta name="facebook-domain-verification" content="bmmb0ibkm3kh8evyv55ysaok84fz8a" />

    <!--favicon icon-->
    <link rel="icon" href="/assets_new/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Safety Guard</title>

    <!--build:css-->
    <link rel="stylesheet" href="/assets_new/css/main.css?v=1.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- endbuild -->

    <!------ Include the above in your HEAD tag ---------->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HD8FFHGP8M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HD8FFHGP8M');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KPDHVMB');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPDHVMB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="/assets_new/img/logo_new.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="background: url('/assets_new/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-8 col-12">

                        <div class="register-wrap px-5 py-3 bg-light shadow rounded-custom">
                            <h1 class="h3 text-center">Get a quote</h1>
                            <p class="text-center text-dark">Thank you for your interest in Safety Guard.<br> Complete the form and click the submit button. <br>We'll get in touch with you soon.
                            </p>
                            <form class="mt-4 register-form" method="post" action="{{ route('contact') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" id="Name" name="name" required aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Phone Number" id="Phone" name="phone" required aria-label="Phone" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email ID" id="email" name="email" required aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Company Name" id="companyname" name="company" required aria-label="companyname">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">

                                        <div class="input-group mb-3">
                                            <input type="number" min="0" type="number" step="1" class="form-control" placeholder="Number of Vehicles" id="Number of Vehicle" name="no_of_vehicle" required aria-label="Number of Vehicle">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-5">
                                        <div class="g-recaptcha" data-sitekey="{{ config('app.site_key') }}"></div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" id="contact_form_submit" name="submit" class="btn btn-primary mt-3 d-block w-100">Submit</button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <div class="share">
        <ul class="d-none d-sm-block">
            <li>
                <a href="https://web.whatsapp.com/send?phone=971556751770" target="_blank"><span class="fa-brands fa-whatsapp" aria-hidden="true"></<span></a>
            </li>
        </ul>
        <ul class="d-lg-none d-md-none">
            <li>
                <a href="https://api.whatsapp.com/send?phone=971556751770" target="_blank"><span class="fa-brands fa-whatsapp" aria-hidden="true"></span></a>
            </li>
        </ul>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var $_Tawk_API = {},
            $_Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5751a89ae71b037a13ef25f8/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!--build:js-->
    <script src="/assets_new/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="/assets_new/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/assets_new/js/vendors/swiper-bundle.min.js"></script>
    <script src="/assets_new/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="/assets_new/js/vendors/parallax.min.js"></script>
    <script src="/assets_new/js/vendors/aos.js"></script>
    <script src="/assets_new/js/app.js"></script>
    <!--endbuild-->
</body>

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '595601368558953');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=595601368558953&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '205249665125756');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=205249665125756&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

</html>