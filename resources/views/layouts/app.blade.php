<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <title>Pacific-finance</title>
    
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/page-title.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/blog-details.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/feature.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/calculator.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/video.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/funfact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/apps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/testimonial.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/subscribe.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/process.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/card.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/exchange.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/contact.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/career.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/faq.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/module-css/requirements.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    
    <!-- External Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<!-- page wrapper -->
<body>
<main class="py-4">
    @yield('content')
    <div class="boxed_wrapper ltr">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="P" class="letters-loading">P</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="f" class="letters-loading">f</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="q" class="letters-loading">q</span>
                            <span data-text-preloader="f" class="letters-loading">f</span>
                            <span data-text-preloader="i" class="letters-loading">i</span>
                            <span data-text-preloader="n" class="letters-loading">n</span>
                            <span data-text-preloader="a" class="letters-loading">a</span>
                            <span data-text-preloader="n" class="letters-loading">n</span>
                            <span data-text-preloader="c" class="letters-loading">c</span>
                            <span data-text-preloader="e" class="letters-loading">e</span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->
</main>

<!-- jQuery plugins -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
<script src="{{ asset('assets/js/emi-calculator.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery et Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body><!-- End of .page_wrapper -->
</html>
