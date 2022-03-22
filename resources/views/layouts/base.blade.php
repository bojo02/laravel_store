<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>
        @if(View::hasSection('title'))
            @yield('title')
        @else
            Static Website Title Here
        @endif
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <!--********************************** 
        all css files 
    *************************************-->

    <!--*************************************************** 
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--**************************** 
         Minified  css 
    ****************************-->

    <!--*********************************************** 
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/style.min.css" /> -->
</head>

<body>
    

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/4.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/5.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/6.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <a href="wishlist.html" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/1.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/2.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/3.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">$144.00</span>
        </div>
        <a href="cart.html" class="btn theme--btn-default btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
        <a href="checkout.html"
            class="btn theme-btn--dark1 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
        <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- header start -->
<header>
    <!-- header top start -->
    <div class="header-top theme1 bg-dark py-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 order-last order-md-first">
                    <div class="static-info text-center text-md-left">
                        <p class="text-white">Join our showroom and get <span class="theme-color">50 % off</span> !
                            Coupon code : <span class="theme-color">Junno50</span></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <nav class="navbar-top pb-2 pb-md-0 position-relative">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                            <li>
                                <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">Setting <i class="ion ion-ios-arrow-down"></i></a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a href="myaccount.html">My account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Sign out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">USD $ <i class="ion ion-ios-arrow-down"></i> </a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown2">
                                    <li class="active"><a href="#">EUR €</a></li>
                                    <li><a href="#">USD $</a></li>
                                </ul>
                            </li>
                            <li class="english">
                                <a href="#" id="dropdown3" class="pr-0" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{asset('assets/img/logo/us-flag.jpg')}}" alt="us flag"> English
                                    <i class="ion ion-ios-arrow-down"></i>
                                </a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown3">
                                    <li class="active">
                                        <a href="#"><img src="{{asset('assets/img/logo/us-flag.jpg')}}" alt="us flag">
                                            English</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{asset('assets/img/logo/france.jpg')}}" alt="france flag">
                                            Français</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <div class="header-middle pt-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-2 order-first">
                    <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="{{route('home')}}"><img src="{{asset('assets/img/logo/logo-dark.jpg')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="media static-media mr-50 d-none d-lg-flex">
                            <img class="mr-3 align-self-center" src="assets/img/icon/1.png" alt="icon">
                            <div class="media-body">
                                <div class="phone">
                                    <span class="text-muted">Call us:</span>
                                </div>
                                <div class="phone">
                                    <a href="tel:(+123)4567890" class="text-dark">(+123)4567890</a>
                                </div>
                            </div>
                        </div>
                        <!-- static-media end -->
                        <div class="cart-block-links theme1">
                            <ul class="d-flex">
                                <li>
                                    <a href="compare.html">
                                        <span class="position-relative">
                                            <i class="icon-shuffle"></i>
                                            <span class="badge cbdg1">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                                        <span class="position-relative">
                                            <i class="icon-heart"></i>
                                            <span class="badge cbdg1">3</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="mr-0 cart-block position-relative">
                                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                                        <span class="position-relative">
                                            <i class="icon-bag"></i>
                                            <span class="badge cbdg1">3</span>
                                        </span>
                                        <span class="cart-total position-relative">$90.00</span>
                                    </a>
                                </li>
                                <!-- cart block end -->
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme1 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 order-lg-first">
                    <div class="search-form pt-30 pt-lg-0">
                        <form class="form-inline position-relative">
                            <input class="form-control theme1-border" type="search"
                                placeholder="Enter your search key ...">
                            <button class="btn search-btn theme-bg btn-rounded" type="submit"><i
                                    class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->

    <!-- header bottom start -->
    <nav id="sticky" class="header-bottom theme1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 offset-lg-2 d-flex flex-wrap align-items-center position-relative">
                    <ul class="main-menu d-flex">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="contact.html">contact Us</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!-- header bottom end -->

     <!-- Category menu start -->
    @yield('menu')
    <!-- Category menu end -->

</header>
<!-- header end -->

@yield('content')

<!-- footer strat -->
<footer class="bg-light theme1 position-relative">
    <!-- footer bottom start -->
    <div class="footer-bottom pt-80 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget mx-w-400">
                        <div class="footer-logo mb-35">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-dark.jpg" alt="footer logo">
                            </a>
                        </div>
                        <p class="text mb-30">We are a team of designers and developers that create high quality
                            Magento, Prestashop, Opencart.</p>
                        <div class="address-widget mb-30">
                            <div class="media">
                                <span class="address-icon mr-3">
                                    <img src="assets/img/icon/phone.png" alt="phone">
                                </span>
                                <div class="media-body">
                                    <p class="help-text text-uppercase">NEED HELP?</p>
                                    <h4 class="title text-dark"><a href="tel:+1(123)8889999">(+800) 345 678</a></h4>
                                </div>
                            </div>
                        </div>

                        <div class="social-network">
                            <ul class="d-flex">
                                <li><a href="https://www.facebook.com/" target="_blank"><span
                                            class="icon-social-facebook"></span></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><span
                                            class="icon-social-twitter"></span></a></li>
                                <li><a href="https://www.youtube.com/" target="_blank"><span
                                            class="icon-social-youtube"></span></a></li>
                                <li class="mr-0"><a href="https://www.instagram.com/" target="_blank"><span
                                            class="icon-social-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Information</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="#">Secure payment</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Stores</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Custom Links</h2>
                            </div>
                        </div>
                        <!-- footer-menu start -->
                        <ul class="footer-menu">
                            <li><a href="#">Legal Notice</a></li>
                            <li><a href="#">Prices drop</a></li>

                            <li><a href="#">New products</a></li>

                            <li><a href="#">Best sales</a></li>

                            <li><a href="login.html">Login</a></li>

                            <li><a href="myaccount.html">My account</a></li>
                        </ul>
                        <!-- footer-menu end -->
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-30">
                    <div class="footer-widget">
                        <div class="border-bottom cbb1 mb-25">
                            <div class="section-title pb-20">
                                <h2 class="title text-dark text-uppercase">Newsletter</h2>
                            </div>
                        </div>
                        <p class="text mb-20">You may unsubscribe at any moment. For that purpose, please find our
                            contact info in the legal notice.</p>
                        <div class="nletter-form mb-35">
                            <form class="form-inline position-relative"
                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                target="_blank" method="post">
                                <input class="form-control" type="text" placeholder="Your email address">
                                <button class="btn nletter-btn text-capitalize" type="submit">Sign
                                    up</button>
                            </form>
                        </div>

                        <div class="store d-flex">
                            <a href="https://www.apple.com/" class="d-inline-block mr-3"><img
                                    src="assets/img/icon/apple.png" alt="apple icon"> </a>
                            <a href="https://play.google.com/store/" class="d-inline-block"><img
                                    src="assets/img/icon/play.png" alt="apple icon"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom end -->
    <!-- coppy-right start -->
    <div class="coppy-right pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="text-left">
                        <p class="mb-3 mb-md-0">Copyright &copy; <a href="https://hasthemes.com/">HasThemes</a>. All
                            Rights Reserved</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="text-left">
                        <img src="assets/img/payment/1.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- coppy-right end -->
</footer>
<!-- footer end -->



    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--*************************** 
          Minified  js 
     ***************************-->

    <!--*********************************** 
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/main.js"></script> -->


</body>

</html>