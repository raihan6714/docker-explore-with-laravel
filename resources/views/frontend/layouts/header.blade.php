<!-- HEADER MENU START -->
<header class="header">
    <div class="container-fluid">
        <nav class="navigation d-flex align-items-center justify-content-between">
            <div class="menu-button-right">
                <div class="main-menu__nav">
                    <ul class="main-menu__list">
                        <li>
                            <a href="{{ url('/') }}" class="active">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);">Shop</a>
                            <ul>
                                <li><a href="{{ route('shop') }}">Product</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="{{ route('blog') }}">Blogs</a>
{{--                            <ul>--}}
{{--                                <li><a href="">Blog</a></li>--}}
{{--                                <li><a href="blog-grid-sidebar.html" >Blog Grid Sidebar</a></li>--}}
{{--                                <li><a href="blog-detail.html">Blog Detail</a></li>--}}
{{--                            </ul>--}}
                        </li>
                        <li><a href="{{ route('appointment') }}">Appointment</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);">Services</a>
                            <ul>
{{--                                <li><a href="{{ route('services') }}">Services Detail</a></li>--}}
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('team') }}">Team</a></li>
                                <li><a href="{{ route('about') }}">Account</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
{{--                                <li><a href="{{ route('about') }}">Gallery</a></li>--}}
                                <li><a href="{{ route('faqs') }}">FAQ's</a></li>
                                <li><a href="{{ route('error') }}">404</a></li>
{{--                                <li><a href="{{ route('blog') }}">Coming Soon</a></li>--}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="{{ url('/') }}" class="d-flex align-items-center header-logo-box">
                <img src="{{asset('frontend/assets/media/logo.png')}}" alt="/logo" class="header-logo">
            </a>
            <div class="main-menu__right">
                <div class="header-icons d-sm-flex d-none align-items-center gap-16">
                    <a href="{{ route('login') }}" class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path
                                d="M12 0C8.51067 0 5.67188 2.8388 5.67188 6.32812C5.67188 9.81745 8.51067 12.6562 12 12.6562C15.4893 12.6562 18.3281 9.81745 18.3281 6.32812C18.3281 2.8388 15.4893 0 12 0ZM12 11.25C9.28608 11.25 7.07812 9.04205 7.07812 6.32812C7.07812 3.6142 9.28608 1.40625 12 1.40625C14.7139 1.40625 16.9219 3.6142 16.9219 6.32812C16.9219 9.04205 14.7139 11.25 12 11.25Z"
                                fill="#FAFAFA" />
                            <path
                                d="M19.8734 16.7904C18.1409 15.0313 15.8442 14.0625 13.4062 14.0625H10.5938C8.15588 14.0625 5.85909 15.0313 4.12659 16.7904C2.40258 18.5409 1.45312 20.8515 1.45312 23.2969C1.45312 23.6852 1.76794 24 2.15625 24H21.8438C22.2321 24 22.5469 23.6852 22.5469 23.2969C22.5469 20.8515 21.5974 18.5409 19.8734 16.7904ZM2.89031 22.5938C3.24258 18.6053 6.56302 15.4688 10.5938 15.4688H13.4062C17.437 15.4688 20.7574 18.6053 21.1097 22.5938H2.89031Z"
                                fill="#FAFAFA" />
                        </svg>
                    </a>
                    <a href="javascript:;" class="icon-box checkout-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none">
                            <path
                                d="M7.73254 15.5158H7.73364L7.73638 15.5156H20.4844C20.7982 15.5156 21.0741 15.3074 21.1604 15.0057L23.9729 5.16192C24.0335 4.9497 23.991 4.72156 23.8583 4.54541C23.7253 4.36926 23.5175 4.26562 23.2969 4.26562H6.11096L5.60833 2.00372C5.53674 1.68201 5.25146 1.45312 4.92187 1.45312H0.703125C0.314758 1.45312 0 1.76788 0 2.15625C0 2.54462 0.314758 2.85937 0.703125 2.85937H4.35791C4.4469 3.26019 6.76318 13.6836 6.89648 14.2833C6.14923 14.6081 5.625 15.3532 5.625 16.2187C5.625 17.3818 6.57129 18.3281 7.73437 18.3281H20.4844C20.8727 18.3281 21.1875 18.0134 21.1875 17.625C21.1875 17.2366 20.8727 16.9219 20.4844 16.9219H7.73437C7.34674 16.9219 7.03125 16.6064 7.03125 16.2187C7.03125 15.8317 7.34564 15.5167 7.73254 15.5158ZM22.3647 5.67187L19.9539 14.1094H8.29834L6.42334 5.67187H22.3647Z"
                                fill="#FAFAFA" />
                            <path
                                d="M7.03125 20.4375C7.03125 21.6006 7.97753 22.5469 9.14062 22.5469C10.3037 22.5469 11.25 21.6006 11.25 20.4375C11.25 19.2744 10.3037 18.3281 9.14062 18.3281C7.97753 18.3281 7.03125 19.2744 7.03125 20.4375ZM9.14062 19.7344C9.52825 19.7344 9.84374 20.0499 9.84374 20.4375C9.84374 20.8251 9.52825 21.1406 9.14062 21.1406C8.75299 21.1406 8.43749 20.8251 8.43749 20.4375C8.43749 20.0499 8.75299 19.7344 9.14062 19.7344Z"
                                fill="#FAFAFA" />
                            <path
                                d="M16.9687 20.4375C16.9687 21.6006 17.915 22.5469 19.0781 22.5469C20.2412 22.5469 21.1875 21.6006 21.1875 20.4375C21.1875 19.2744 20.2412 18.3281 19.0781 18.3281C17.915 18.3281 16.9687 19.2744 16.9687 20.4375ZM19.0781 19.7344C19.4657 19.7344 19.7812 20.0499 19.7812 20.4375C19.7812 20.8251 19.4657 21.1406 19.0781 21.1406C18.6905 21.1406 18.375 20.8251 18.375 20.4375C18.375 20.0499 18.6905 19.7344 19.0781 19.7344Z"
                                fill="#FAFAFA" />
                        </svg>
                    </a>
                </div>
                <a href="#" class="d-xl-none d-flex main-menu__toggler mobile-nav__toggler">
                    <img src="{{asset('frontend/assets/media/icons/menu-2.png')}} " alt="">
                </a>
            </div>
        </nav>
    </div>
</header>
<!-- HEADER MENU END -->
