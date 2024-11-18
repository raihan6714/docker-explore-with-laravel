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
                            <h1 class="medium-black fw-600">Blog Detail</h1>
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

    <!-- ARTICLES DETAIL SECTION START -->
    <section class="article-detail-page pt-40 pb-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar">
                        <form action="https://uiparadox.co.uk/public/templates/pet-haven/blog-grid-sidebar.html" class="mb-24">
                            <input type="text" name="search" id="searchBar" class="form-control"
                                   placeholder="Search Here...">
                            <button>
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </form>
                        <div class="category-block p-24 br-12 bg-lightest-gray mb-32">
                            <div class="title mb-16">
                                <h5 class="fw-600 medium-black">Latest Articles</h5>
                            </div>
                            <div class="hr-line line-3 mb-16"></div>
                            <a href="blog-detail-2.html" class="blog-sidebar-block mb-16">
                                <div class="img-block">
                                    <img src="{{asset('frontend/assets/media/blog/blog-sidebar-1.png')}}" alt="">
                                </div>
                                <div class="text-block">
                                    <p class="fw-600">Fun Activities to Do with Your Pet</p>
                                    <p class="light-gray mb-8">24 Aug, 2024</p>
                                </div>
                            </a>
                            <a href="blog-detail-2.html" class="blog-sidebar-block mb-16">
                                <div class="img-block">
                                    <img src="{{asset('frontend/assets/media/blog/blog-sidebar-2.png')}}" alt="">
                                </div>
                                <div class="text-block">
                                    <p class="fw-600">Tonec venenatis ex id nibh iaculisoni Clonal</p>
                                    <p class="light-gray mb-8">24 Aug, 2024</p>
                                </div>
                            </a>
                            <a href="blog-detail-2.html" class="blog-sidebar-block">
                                <div class="img-block">
                                    <img src="{{asset('frontend/assets/media/blog/blog-sidebar-3.png')}}" alt="">
                                </div>
                                <div class="text-block">
                                    <p class="fw-600">Culpa qui officia deserunt mollit </p>
                                    <p class="light-gray mb-8">24 Aug, 2024</p>
                                </div>
                            </a>
                        </div>
                        <div class="category-block p-24 br-12 bg-lightest-gray mb-32">
                            <div class="title mb-16">
                                <h5 class="fw-600 medium-black">Category</h5>
                            </div>
                            <div class="hr-line line-3 mb-16"></div>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Accessories</a>
                                    <p>(4)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Birds Supplies</a>
                                    <p>(1)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Cat Supplies</a>
                                    <p>(4)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Dog Supplies</a>
                                    <p>(7)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Fish Supplies</a>
                                    <p>(3)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between mb-16">
                                    <a href="#">Services</a>
                                    <p>(10)</p>
                                </li>
                                <li class="d-flex align-items-center justify-content-between">
                                    <a href="#">Small Animals</a>
                                    <p>(2)</p>
                                </li>
                            </ul>
                        </div>
                        <div class="category-block p-24 br-12 bg-lightest-gray mb-32">
                            <div class="title mb-16">
                                <h5 class="fw-600 medium-black">Tags</h5>
                            </div>
                            <div class="hr-line line-3 mb-16"></div>
                            <ul class="list-unstyled mb-0 tags-container">
                                <li>
                                    <a href="#">Puppy Food</a>
                                </li>
                                <li>
                                    <a href="#">Training Tips</a>
                                </li>
                                <li>
                                    <a href="#">Grooming</a>
                                </li>
                                <li>
                                    <a href="#">Pet Boarding</a>
                                </li>
                                <li>
                                    <a href="#">Veterinary Care</a>
                                </li>
                                <li>
                                    <a href="#">Food & Treats</a>
                                </li>
                                <li>
                                    <a href="#">Toys</a>
                                </li>
                                <li>
                                    <a href="#">Health & Wellness</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-detail-wrapper">
                        <div class="main-image mb-24">
                            <img src="{{asset('frontend/assets/media/blog/blog-detail-1.jpg')}}" alt="" class="w-100 br-24">
                        </div>
                        <div class="d-flex align-items-center gap-12 mb-32">
                            <img src="{{asset('frontend/assets/media/vector/line-vec.png')}}" alt="">
                            <p>30 Aug, 2024 <span class="fw-700 dark-gray">&nbsp; By, Shafiqul</span></p>
                        </div>
                        <h4 class="medium-black fw-700 mb-16">Adopting a Pet: What to Expect and How to Prepare</h4>
                        <p class="dark-gray mb-32">Lorem ipsum dolor sit amet consectetur. Aliquam in neque eleifend placerat scelerisque
                            tincidunt erat porttitor. Sed sed in suscipit lorem. Ut felis velit tristique posuere tellus sed. Arcu convallis nam
                            massa leo viverra volutpat facilisis. Nulla sagittis nam pellentesque sagittis in turpis nulla et. Lorem ipsum dolor
                            sit amet consectetur. Aliquam in neque eleifend placerat scelerisque tincidunt erat porttitor. Sed sed in suscipit
                            lorem. Ut felis velit tristique posuere tellus sed. Arcu convallis nam massa leo viverra volutpat facilisis. Nulla
                            sagittis nam pellentesque sagittis in turpis nulla et. Lorem ipsum dolor sit amet consectetur. Aliquam in neque
                            eleifend placerat scelerisque tincidunt erat porttitor. Sed sed in suscipit lorem.</p>

                        <div class="qoutes bg-lightest-gray mb-32">
                            <svg class="mb-24" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M16.4146 21.043L18.2484 19.5759C21.7326 17.0086 23.4747 13.6466 23.4747 9.48996V4.53867H32.002V9.48996C32.002 16.703 29.2818 22.1738 23.8415 25.9026L21.6409 27.4613L16.4146 21.043ZM0.00195503 21.043L1.83577 19.5759C5.25888 17.0697 6.97043 13.7077 6.97043 9.48996V4.53867H15.5893V9.48996C15.5893 16.7641 12.8386 22.2349 7.3372 25.9026L5.13663 27.4613L0.00195503 21.043Z"
                                    fill="#783CAC" />
                            </svg>
                            <h6 class="dark-gray fw-700 mb-24">Integer quis libero semper, interdum odio non, consequat sem. Qui woner pretium,
                                quamtenti utendi lacinianti ultricies, est urna cursus purus, ut tristique purusenali pretium, quam ut laciniaun est
                                urna</h6>
                            <h6 class="color-quin fw-700">- Ezekiel Miles</h6>
                        </div>
                        <p class="dark-gray mb-32">Lorem ipsum dolor sit amet consectetur. Aliquam in neque eleifend placerat scelerisque tincidunt erat porttitor. Sed sed in suscipit lorem. Ut felis velit tristique posuere tellus sed. Arcu convallis nam massa leo viverra volutpat facilisis. Nulla sagittis nam pellentesque sagittis in turpis nulla et. Lorem ipsum dolor sit amet consectetur. Aliquam in neque eleifend placerat scelerisque tincidunt erat porttitor. Sed sed in suscipit lorem. Ut felis velit tristique posuere tellus sed</p>

                        <div class="row align-items-center row-gap-2 mb-24">
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <h5 class="dark-gray fw-700 mb-24">Luctus Justo Quis Feugiat</h5>
                                <p class="dark-gray">Lorem ipsum dolor sit amet consectetur. Non ac platea gravida diam in aliquet dignissim. Consectetur sem ac non
                                    pretium praesent dui fermentum a. Volutpat neque sit bibendum tortor tempor. Commodo ut porttitor eu libero nisl
                                    tempus. Velit arcu id blandit vestibulum dolor quis molestie cras. Nunc lacinia facilisis sit faucibus porttitor
                                    ultricies ullamcorper. Volutpat semper pretium malesuada enim quis augue non.</p>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-6">
                                <img src="{{asset('frontend/assets/media/blog/blog-detail-2.png')}}" alt="" class="h-100 object-fit-cover br-12">
                            </div>
                        </div>
                        <h5 class="dark-gray fw-700 mb-24">Luctus Justo Quis Feugiat Lacus Orcha Ornare Auguelon Integer Gon Form Together
                            Nicelon.</h5>
                        <p class="dark-gray mb-32">
                            Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate
                            in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet
                            risus. In hac habitasse plateajoa dictumst. Nuncet posuere scelerisque justo in accumsan.Pellentesque maximus augue
                            orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu
                            odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus. In hac habitasse plateajoa
                            dictumst. Nuncet posuere scelerisque justo in accumsan.
                        </p>
                        <div class="hr-line line-2 mb-32"></div>

                        <!-- REVIEW AREA -->
                        <div class="review-area">
                            <h4 class="fw-700 medium-black mb-32">Leave A Reply</h4>
                            <p class="dark-gray mb-24">Your email address will not be published. Required fields are marked *</p>
                            <form action="https://uiparadox.co.uk/public/templates/pet-haven/index.html" method="post" class="blog-form">
                                <div class="row row-gap-4 gx-4">
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <input type="text" id="name" name="name" class="form-control form-control-2" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block">
                                            <input type="email" id="mail" name="email" class="form-control form-control-2" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="message" id="comment" cols="30" rows="5" class="form-control form-control-2" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="cus-checkBox mb-24">
                                            <input type="checkbox" id="saver" checked>
                                            <label for="saver">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="cus-btn">
                                            <span class="text">Submit Comment</span>
                                            <span class="circle"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- REVIEW AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ARTICLES DETAIL SECTION END -->
@endsection
