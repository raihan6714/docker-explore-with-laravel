@extends('frontend.layouts.frontend')
@section('title','shop')

@section('content')
    <!-- TITLE BANNER START -->
    <section class="title-banner mb-80">
        <div class="container-fluid-2">
            <div class="title-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="title-content">
                            <h1 class="medium-black fw-600">Service Detail</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 d-sm-block d-none">
                        <div class="title-image text-end">
                            <img src="{{asset('frontend/assets/media/backgrounds/banner-image.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TITLE BANNER END -->

    <!-- SERVICES DETAIL SECTION START -->
    <section class="service-detail-sec pt-40 pb-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="row row-">
                <div class="col-xl-6">
                    <div class="service-image-container">
                        <div class="service-slider slider-2 mb-24">
                            <div class="detail-image detail-2">
                                <img src="{{asset('frontend/assets/media/images/service-1.png')}}" alt="" class="br-16">
                            </div>
                            <div class="detail-image detail-2">
                                <img src="{{asset('frontend/assets/media/images/service-2.png')}}" alt="" class="br-16">
                            </div>
                            <div class="detail-image detail-2">
                                <img src="{{asset('frontend/assets/media/images/service-3.png')}}" alt="" class="br-16">
                            </div>
                        </div>
                        <div class="service-slider-asnav asnav-2">
                            <div class="nav-image">
                                <img src="{{asset('frontend/assets/media/images/service-asnav-1.png')}}" alt="" class="br-12">
                            </div>
                            <div class="nav-image">
                                <img src="{{asset('frontend/assets/media/images/service-asnav-2.png')}}" alt="" class="br-12">
                            </div>
                            <div class="nav-image">
                                <img src="{{asset('frontend/assets/media/images/service-asnav-3.png')}}" alt="" class="br-12">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="services-content">
                        <h2 class="fw-700 medium-black mb-16">Puppy Day Care</h2>
                        <div class="d-flex align-items-center gap-16 mb-24">
                            <p class="h6 color-sec"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                            <p>( 5 Customer Review )</p>
                        </div>
                        <h3 class="fw-700 medium-black mb-32">$45.00 - $80.00</h3>
                        <div class="hr-line line-2 mb-32"></div>
                        <p class="mb-32">Donec bibendum enim ut elit porta ullamcorper. Vestibulum Nai wekemdini iaculis vitae nulla. Morbi mattis nec mi ac
                            mollis. iaculis eu non diam phasellus vestibulum lorem. Venenatis cras sed felis eget velit aliquet sagittis id.
                            Ipsum consequat nisl vel pretium lectus quam id leo in. In est ante in nibh. Tristique senectus et netus et
                            malesuada fames ac turpis. Arcu cursus euismod quis viverra nibh cras. Tincidunt augue interdum velit euismod in
                            pellentesque. Aliquet risus feugiat in ante metus dictum at tempor.</p>
                        <form action="https://uiparadox.co.uk/public/templates/pet-haven/reservation.html" method="post">
                            <div class="row align-items-center gap-24 mb-32">
                                <div class="col-xl-2">
                                    <h5 class="fw-600 medium-black">Duration</h5>
                                </div>
                                <div class="col-xl-8">
                                    <div class="input-block w-100">
                                        <div class="wrapper-dropdown" id="dropdown">
                                            <span class="selected-display fw-300" id="destination">Choose an option</span>
                                            <svg id="drp-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M19.7337 4.8117C19.3788 4.45673 18.8031 4.45667 18.4481 4.81176L10.0002 13.2598L1.55191 4.8117C1.19694 4.45673 0.621303 4.45667 0.266273 4.81176C-0.0887576 5.16679 -0.0887576 5.74237 0.266273 6.0974L9.35742 15.1883C9.52791 15.3588 9.75912 15.4545 10.0002 15.4545C10.2413 15.4545 10.4726 15.3587 10.643 15.1882L19.7337 6.09734C20.0888 5.74237 20.0888 5.16673 19.7337 4.8117Z"
                                                    fill="#45474F" />
                                            </svg>
                                            <ul class="topbar-dropdown">
                                                <li class="item dark-black">1 Hours</li>
                                                <li class="item dark-black">2 Hours</li>
                                                <li class="item dark-black">3 Hours</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center gap-24 mb-32" >
                                <div class="col-xl-2">
                                    <h5 class="fw-600 medium-black">Date</h5>
                                </div>
                                <div class="col-xl-8">

                                    <div class="input-block w-100">
                                        <input type="text" name="date" id="checkIn" class="form-control sel-input date_from picker__input" placeholder="DD/MM/YYYY">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M5.84668 9.72656H4.59668C4.27309 9.72656 4.01074 9.98891 4.01074 10.3125C4.01074 10.6361 4.27309 10.8984 4.59668 10.8984H5.84668C6.17027 10.8984 6.43262 10.6361 6.43262 10.3125C6.43262 9.98891 6.17027 9.72656 5.84668 9.72656Z"
                                                fill="#45474F" />
                                            <path
                                                d="M5.84668 12.2266H4.59668C4.27309 12.2266 4.01074 12.4889 4.01074 12.8125C4.01074 13.1361 4.27309 13.3984 4.59668 13.3984H5.84668C6.17027 13.3984 6.43262 13.1361 6.43262 12.8125C6.43262 12.4889 6.17027 12.2266 5.84668 12.2266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M5.84668 14.7266H4.59668C4.27309 14.7266 4.01074 14.9889 4.01074 15.3125C4.01074 15.6361 4.27309 15.8984 4.59668 15.8984H5.84668C6.17027 15.8984 6.43262 15.6361 6.43262 15.3125C6.43262 14.9889 6.17027 14.7266 5.84668 14.7266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M10.8467 9.72656H9.59668C9.27309 9.72656 9.01074 9.98891 9.01074 10.3125C9.01074 10.6361 9.27309 10.8984 9.59668 10.8984H10.8467C11.1703 10.8984 11.4326 10.6361 11.4326 10.3125C11.4326 9.98891 11.1703 9.72656 10.8467 9.72656Z"
                                                fill="#45474F" />
                                            <path
                                                d="M10.8467 12.2266H9.59668C9.27309 12.2266 9.01074 12.4889 9.01074 12.8125C9.01074 13.1361 9.27309 13.3984 9.59668 13.3984H10.8467C11.1703 13.3984 11.4326 13.1361 11.4326 12.8125C11.4326 12.4889 11.1703 12.2266 10.8467 12.2266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M10.8467 14.7266H9.59668C9.27309 14.7266 9.01074 14.9889 9.01074 15.3125C9.01074 15.6361 9.27309 15.8984 9.59668 15.8984H10.8467C11.1703 15.8984 11.4326 15.6361 11.4326 15.3125C11.4326 14.9889 11.1703 14.7266 10.8467 14.7266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M15.8467 9.72656H14.5967C14.2731 9.72656 14.0107 9.98891 14.0107 10.3125C14.0107 10.6361 14.2731 10.8984 14.5967 10.8984H15.8467C16.1703 10.8984 16.4326 10.6361 16.4326 10.3125C16.4326 9.98891 16.1703 9.72656 15.8467 9.72656Z"
                                                fill="#45474F" />
                                            <path
                                                d="M15.8467 12.2266H14.5967C14.2731 12.2266 14.0107 12.4889 14.0107 12.8125C14.0107 13.1361 14.2731 13.3984 14.5967 13.3984H15.8467C16.1703 13.3984 16.4326 13.1361 16.4326 12.8125C16.4326 12.4889 16.1703 12.2266 15.8467 12.2266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M15.8467 14.7266H14.5967C14.2731 14.7266 14.0107 14.9889 14.0107 15.3125C14.0107 15.6361 14.2731 15.8984 14.5967 15.8984H15.8467C16.1703 15.8984 16.4326 15.6361 16.4326 15.3125C16.4326 14.9889 16.1703 14.7266 15.8467 14.7266Z"
                                                fill="#45474F" />
                                            <path
                                                d="M18.4639 2.53906H17.0576V1.5625C17.0576 1.23891 16.7953 0.976562 16.4717 0.976562C16.1481 0.976562 15.8857 1.23891 15.8857 1.5625V2.53906H10.8076V1.5625C10.8076 1.23891 10.5453 0.976562 10.2217 0.976562C9.89809 0.976562 9.63574 1.23891 9.63574 1.5625V2.53906H4.55762V1.5625C4.55762 1.23891 4.29527 0.976562 3.97168 0.976562C3.64809 0.976562 3.38574 1.23891 3.38574 1.5625V2.53906H1.97949C1.01023 2.53906 0.22168 3.32762 0.22168 4.29688V17.2656C0.22168 18.2349 1.01023 19.0234 1.97949 19.0234H18.4639C19.4331 19.0234 20.2217 18.2349 20.2217 17.2656C20.2217 16.8874 20.2217 4.62598 20.2217 4.29688C20.2217 3.32762 19.4331 2.53906 18.4639 2.53906ZM1.39355 4.29688C1.39355 3.97379 1.65641 3.71094 1.97949 3.71094H3.38574V4.6875C3.38574 5.01109 3.64809 5.27344 3.97168 5.27344C4.29527 5.27344 4.55762 5.01109 4.55762 4.6875V3.71094H9.63574V4.6875C9.63574 5.01109 9.89809 5.27344 10.2217 5.27344C10.5453 5.27344 10.8076 5.01109 10.8076 4.6875V3.71094H15.8857V4.6875C15.8857 5.01109 16.1481 5.27344 16.4717 5.27344C16.7953 5.27344 17.0576 5.01109 17.0576 4.6875V3.71094H18.4639C18.787 3.71094 19.0498 3.97379 19.0498 4.29688V6.60156H1.39355V4.29688ZM18.4639 17.8516H1.97949C1.65641 17.8516 1.39355 17.5887 1.39355 17.2656V7.77344H19.0498V17.2656C19.0498 17.5887 18.787 17.8516 18.4639 17.8516Z"
                                                fill="#45474F" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="cus-btn">
                                <span class="text">make an appointment</span>
                                <span class="circle"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES DETAIL SECTION END -->
@endsection
