@php
  function checkRouteActive($route)
  {
    if (Route::current ()->uri == $route) {
        return 'active';
    }
  }  
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AnekaBibit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/admin')}}/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('public/admin')}}/css/preloader.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/meanmenu.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/animate.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/owl-carousel.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/backtotop.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/default.css">
    <link rel="stylesheet" href="{{url('public/admin')}}/css/style.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header-start -->
    @include('ecommerce.layout.header')
    <!-- header-end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                        <img src="{{url('public/admin')}}/img/logo/logo-white.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->
    
    @yield('content')

    <!-- footer-start -->
    @include('ecommerce.layout.footer')
    <!-- footer-end -->

    <!-- JS here -->
    <script src="{{url('public/admin')}}/js/vendor/jquery.js"></script>
    <script src="{{url('public/admin')}}/js/vendor/waypoints.js"></script>
    <script src="{{url('public/admin')}}/js/bootstrap-bundle.js"></script>
    <script src="{{url('public/admin')}}/js/meanmenu.js"></script>
    <script src="{{url('public/admin')}}/js/swiper-bundle.js"></script>
    <script src="{{url('public/admin')}}/js/tweenmax.js"></script>
    <script src="{{url('public/admin')}}/js/owl-carousel.js"></script>
    <script src="{{url('public/admin')}}/js/magnific-popup.js"></script>
    <script src="{{url('public/admin')}}/js/parallax.js"></script>
    <script src="{{url('public/admin')}}/js/backtotop.js"></script>
    <script src="{{url('public/admin')}}/js/nice-select.js"></script>
    <script src="{{url('public/admin')}}/js/countdown.min.js"></script>
    <script src="{{url('public/admin')}}/js/counterup.js"></script>
    <script src="{{url('public/admin')}}/js/wow.js"></script>
    <script src="{{url('public/admin')}}/js/isotope-pkgd.js"></script>
    <script src="{{url('public/admin')}}/js/imagesloaded-pkgd.js"></script>
    <script src="{{url('public/admin')}}/js/ajax-form.js"></script>
    <script src="{{url('public/admin')}}/js/main.js"></script>
</body>

</html>