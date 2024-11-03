<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pet Haven || Pet Care Services HTML Template">

    <title>Pet Haven</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/media/favicon.png')}} ">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font-awesome.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/wow.min.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/slick-theme.css')}} ">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}} ">
</head>

<body class="tt-smooth-scroll">
<!-- Preloader-->
<div id="preloader">
    <svg id="svg-sprite">
        <symbol id="paw" viewBox="0 0 249 209.32">
            <ellipse cx="27.917" cy="106.333" stroke-width="0" rx="27.917" ry="35.833" />
            <ellipse cx="84.75" cy="47.749" stroke-width="0" rx="34.75" ry="47.751" />
            <ellipse cx="162" cy="47.749" stroke-width="0" rx="34.75" ry="47.751" />
            <ellipse cx="221.083" cy="106.333" stroke-width="0" rx="27.917" ry="35.833" />
            <path stroke-width="0"
                  d="M43.98 165.39s9.76-63.072 76.838-64.574c0 0 71.082-6.758 83.096 70.33 0 0 2.586 19.855-12.54 31.855 0 0-15.75 17.75-43.75-6.25 0 0-7.124-8.374-24.624-7.874 0 0-12.75-.125-21.5 6.625 0 0-16.375 18.376-37.75 12.75 0 0-28.29-7.72-19.77-42.86z" />
        </symbol>
    </svg>
    <div class="ajax-loader">
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
        <div class="paw"><svg class="icon">
                <use xlink:href="#paw" />
            </svg></div>
    </div>
</div>
<!-- Preloader-->

<!-- Main Wrapper Start -->
<div id="scroll-container">
    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
</div>
<!-- Main Wrapper End -->

<!-- Back To Top Start -->
<button class="scrollToTopBtn"><i class="fa fa-arrow-up"></i></button>

<!-- Mobile Menu Start -->
<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{asset('frontend/assets/media/logo.png')}} " alt=""></a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:example@company.com">example@company.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+12345678">+123 (4567) -890</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->

<!-- Shopping Cart Popup Start -->
<aside id="sidebar-cart">
    <div class="title-cart-block mb-16 bg-lightest-gray">
        <h5 class="fw-700 medium-black">Shopping Cart (03)</h5>
        <a href="#" class="close-button close-popup"><span class="close-icon">X</span></a>
    </div>
    <ul class="product-list">
        <li class="product-item mb-24">
            <a href="shop.html" class="image-box">
                <img src="{{asset('frontend/assets/media/products/shop-sidebar-1.png')}} " alt="" class="br-8">
            </a>
            <div class="content-box">
                <div class="empty">
                    <a href="shop.html"><h6 class="fw-700 mb-8">Puppy Day Care</h6></a>
                    <h6 class="fw-600 dark-gray mb-16">$80.00</h6>
                    <div class="quantity quantity-wrap">
                        <div class="input-area quantity-wrap">
                            <input class="decrement" type="button" value="-">
                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                   class="number">
                            <input class="increment" type="button" value="+">
                        </div>
                    </div>
                </div>
                <a href="javascript:;">
                    <img src="{{asset('frontend/assets/media/icons/cancel.png')}} " alt="" class="cancel-icon">
                </a>
            </div>
        </li>
        <li class="hr-line line-2 mb-24"></li>
        <li class="product-item mb-24">
            <a href="shop.html" class="image-box">
                <img src="{{asset('frontend/assets/media/products/shop-sidebar-2.png')}} " alt="" class="br-8">
            </a>
            <div class="content-box">
                <div class="empty">
                    <a href="shop.html"><h6 class="fw-700 mb-8">Puppy Grooming</h6></a>
                    <h6 class="fw-600 dark-gray mb-16">$40.00</h6>
                    <div class="quantity quantity-wrap">
                        <div class="input-area quantity-wrap">
                            <input class="decrement" type="button" value="-">
                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                   class="number">
                            <input class="increment" type="button" value="+">
                        </div>
                    </div>
                </div>
                <a href="javascript:;">
                    <img src="{{asset('frontend/assets/media/icons/cancel.png')}} " alt="" class="cancel-icon">
                </a>
            </div>
        </li>
        <li class="hr-line line-2 mb-24"></li>
        <li class="product-item mb-24">
            <a href="shop.html" class="image-box">
                <img src="{{asset('frontend/assets/media/products/shop-sidebar-1.png')}} " alt="" class="br-8">
            </a>
            <div class="content-box">
                <div class="empty">
                    <a href="shop.html"><h6 class="fw-700 mb-8">Puppy Day Care</h6></a>
                    <h6 class="fw-600 dark-gray mb-16">$70.00</h6>
                    <div class="quantity quantity-wrap">
                        <div class="input-area quantity-wrap">
                            <input class="decrement" type="button" value="-">
                            <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                   class="number">
                            <input class="increment" type="button" value="+">
                        </div>
                    </div>
                </div>
                <a href="javascript:;">
                    <img src="{{asset('frontend/assets/media/icons/cancel.png')}} " alt="" class="cancel-icon">
                </a>
            </div>
        </li>
    </ul>
    <div class="price-total p-24">
        <span class="h5 fw-700 medium-black">SUBTOTAL</span>
        <span class="h5 fw-700 medium-black">$190.00</span>
    </div>
    <div class="hr-line line-2 mb-24"></div>
    <div class="action-buttons p-24">
        <a href="reservation.html" class="cus-btn">
            <span class="text">Reservation</span>
            <span class="circle"></span>
        </a>
        <a href="checkout.html" class="cus-btn">
            <span class="text">Checkout</span>
            <span class="circle"></span>
        </a>
    </div>
</aside>
<div id="sidebar-cart-curtain" class="close-popup"></div>
<!-- Shopping Cart Popup End -->

<!-- Jquery Js -->
<script src="{{asset('frontend/assets/js/vendor/bootstrap.min.js')}} "></script>
<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.3.min.js')}} "></script>
<script src="{{asset('frontend/assets/js/vendor/slick.min.js')}} "></script>
<script src="{{asset('frontend/assets/js/vendor/wow.js')}} "></script>
<script src="{{asset('frontend/assets/js/vendor/video.js')}} "></script>

<script src="{{asset('frontend/assets/js/app.js')}} "></script>
</body>

</html>
