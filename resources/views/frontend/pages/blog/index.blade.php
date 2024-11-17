@extends('frontend.layouts.frontend')
@section('title','blog')

@section('content')
    <!-- TITLE BANNER START -->
    <section class="title-banner mb-80">
        <div class="container-fluid-2">
            <div class="title-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="title-content">
                            <h1 class="medium-black fw-600">Blog</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 d-sm-block d-none">
                        <div class="title-image text-end">
                            <img src="assets/media/backgrounds/banner-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TITLE BANNER END -->

    <!-- ARTICLES SECTION START -->
    <section class="article-section pt-40 pb-80">
        <div class="elements">
            <img src="assets/media/vector/foot-icon-1.png" alt="">
            <img src="assets/media/vector/foot-icon-1.png" alt="">
            <img src="assets/media/vector/foot-icon-1.png" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="blog-topbar mb-40">
                <div class="wrapper-dropdown bg-white" id="dropdown">
                    <span class="selected-display fw-300" id="destination">Search Templates</span>
                    <svg id="drp-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M19.7337 4.8117C19.3788 4.45673 18.8031 4.45667 18.4481 4.81176L10.0002 13.2598L1.55191 4.8117C1.19694 4.45673 0.621303 4.45667 0.266273 4.81176C-0.0887576 5.16679 -0.0887576 5.74237 0.266273 6.0974L9.35742 15.1883C9.52791 15.3588 9.75912 15.4545 10.0002 15.4545C10.2413 15.4545 10.4726 15.3587 10.643 15.1882L19.7337 6.09734C20.0888 5.74237 20.0888 5.16673 19.7337 4.8117Z"
                            fill="#45474F" />
                    </svg>
                    <ul class="topbar-dropdown">
                        <li class="item dark-black">Page Template</li>
                        <li class="item dark-black">Form Templates</li>
                        <li class="item dark-black">Portfolio Templates</li>
                    </ul>
                </div>
                <div class="wrapper-dropdown bg-white" id="dropdown2">
                    <span class="selected-display fw-300" id="destination2">Templates: View All</span>
                    <svg id="drp-arrow2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M19.7337 4.8117C19.3788 4.45673 18.8031 4.45667 18.4481 4.81176L10.0002 13.2598L1.55191 4.8117C1.19694 4.45673 0.621303 4.45667 0.266273 4.81176C-0.0887576 5.16679 -0.0887576 5.74237 0.266273 6.0974L9.35742 15.1883C9.52791 15.3588 9.75912 15.4545 10.0002 15.4545C10.2413 15.4545 10.4726 15.3587 10.643 15.1882L19.7337 6.09734C20.0888 5.74237 20.0888 5.16673 19.7337 4.8117Z"
                            fill="#45474F" />
                    </svg>
                    <ul class="topbar-dropdown">
                        <li class="item dark-black">View All</li>
                        <li class="item dark-black">Most Recent </li>
                        <li class="item dark-black">Oldest</li>
                        <li class="item dark-black">A - Z</li>
                    </ul>
                </div>
                <div class="wrapper-dropdown bg-white" id="dropdown3">
                    <span class="selected-display fw-300" id="destination3">Industrial: View All</span>
                    <svg id="drp-arrow3" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M19.7337 4.8117C19.3788 4.45673 18.8031 4.45667 18.4481 4.81176L10.0002 13.2598L1.55191 4.8117C1.19694 4.45673 0.621303 4.45667 0.266273 4.81176C-0.0887576 5.16679 -0.0887576 5.74237 0.266273 6.0974L9.35742 15.1883C9.52791 15.3588 9.75912 15.4545 10.0002 15.4545C10.2413 15.4545 10.4726 15.3587 10.643 15.1882L19.7337 6.09734C20.0888 5.74237 20.0888 5.16673 19.7337 4.8117Z"
                            fill="#45474F" />
                    </svg>
                    <ul class="topbar-dropdown">
                        <li class="item dark-black">View All</li>
                        <li class="item dark-black">Most Recent </li>
                        <li class="item dark-black">Oldest</li>
                        <li class="item dark-black">A - Z</li>
                    </ul>
                </div>
            </div>
            <div class="article-wrapper">
                <div class="row row-gap-4">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-1.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    Adopting a Pet: What to Expect and How to Prepare
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-2.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    The Importance of Proper Nutrition for your Pets
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-3.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    Healthy and Fun Activities to Do with Your Pet
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-4.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    Tonec venenatis ex id nibh iaculisoni Clonal interdum.
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-5.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    Mobortis pharetra In necat boi risuse osae that one far.
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <a href="blog-detail.html" class="article-block">
                            <div class="image-box shine mb-32">
                                <img src="assets/media/blog/blog-6.png" alt="">
                            </div>
                            <div class="content-box">
                                <div class="date-label dark-gray mb-16">30 Aug 2024</div>
                                <h5 class="fw-600 mb-16">
                                    Culpa qui officia deserunt mollit anim laborum.
                                </h5>
                                <p class="dark-gray mb-24">
                                    Lorem ipsum dolor sit amet consectetur. Velit mi vitae
                                    dolor curabitur duis sociis. Eget risus.
                                </p>
                                <div class="hr-line line-2 mb-24"></div>
                                <div class="arrow-box">
                                    <p class="dark-gray">7 Min Reads</p>
                                    <div class="arrow-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32"
                                             viewBox="0 0 33 32" fill="none">
                                            <path
                                                d="M19.6877 23C19.6877 20 22.4877 16 25.6877 16M25.6877 16C23.8544 16 19.6877 15 19.6877 9M25.6877 16H6.68774"
                                                stroke="#FF782C" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="pagination mt-40">
                    <ul id="border-pagination">
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path
                                        d="M12.355 21.5625C12.355 18.75 9.72998 15 6.72998 15M6.72998 15C8.44873 15 12.355 14.0625 12.355 8.4375M6.72998 15H24.5425"
                                        stroke="#FAFAFA" stroke-width="1.875" />
                                </svg>
                            </a>
                        </li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                    <path
                                        d="M18.645 21.5625C18.645 18.75 21.27 15 24.27 15M24.27 15C22.5513 15 18.645 14.0625 18.645 8.4375M24.27 15H6.45752"
                                        stroke="#FAFAFA" stroke-width="1.875" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ARTICLES SECTION END -->
@endsection
