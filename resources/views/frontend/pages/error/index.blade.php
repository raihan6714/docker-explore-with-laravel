@extends('frontend.layouts.frontend')
@section('title','error')

@section('content')
    <!-- ERROR SECTION START -->
    <section class="error-section pt-40 pb-80" style="margin-top: 100px">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="error-wrapper">
                <img src="{{asset('frontend/assets/media/images/error.png')}}" alt="" class="mb-32">
                <h2 class="fw-700 medium-black mb-16"><span class="color-sec">Opps! </span> There is something <br> wrong</h2>
                <p class="mb-32">Lorem ipsum dolor sit amet consectetur. Orci sit integer eget netus odio. Scelerisque <br> fusce varius imperdiet congue
                    fringilla.</p>
                <a href="{{ url('/') }}" class="cus-btn-2">
                    <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                        </path>
                    </svg>
                    <span class="text">Back to Home</span>
                    <span class="circle"></span>
                    <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- ERROR SECTION END -->
@endsection
