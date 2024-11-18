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
                            <h1 class="medium-black fw-600">Shop Detail</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 d-sm-block d-none">
                        <div class="title-image text-end">
                            <img src="{{asset('frontend/assets/')}}media/backgrounds/banner-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TITLE BANNER END -->

    <!-- SHOP DETAIL START -->
    <section class="shop-detail py-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="detail-wrapper">
                <div class="row row-gap-3">
                    <div class="col-xl-6 col-lg-6">
                        <div class="shop-image-container">
                            <div class="shop-detail-slider slider-2 mb-24">
                                <div class="detail-image br-32 bg-ter">
                                    <img src="{{asset('frontend/assets/media/products/product-detail-1.png')}}" alt="" class="br-16">
                                </div>
                                <div class="detail-image br-32 bg-hex">
                                    <img src="{{asset('frontend/assets/media/products/product-detail-3.png')}}" alt="" class="br-16">
                                </div>
                                <div class="detail-image br-32 bg-ter">
                                    <img src="{{asset('frontend/assets/media/products/product-detail-2.png')}}" alt="" class="br-16">
                                </div>
                            </div>
                            <div class="shop-slider-asnav asnav-2">
                                <div class="nav-image br-12 bg-ter">
                                    <img src="{{asset('frontend/assets/media/products/product-asnav-1.png')}}" alt="" class="br-12">
                                </div>
                                <div class="nav-image br-12 bg-hex">
                                    <img src="{{asset('frontend/assets/media/products/product-asnav-3.png')}}" alt="" class="br-12">
                                </div>
                                <div class="nav-image br-12 bg-ter">
                                    <img src="{{asset('frontend/assets/media/products/product-asnav-2.png')}}" alt="" class="br-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="shop-text-container bg-white br-20">
                            <h2 class="fw-700 medium-black mb-16">Puppy Day Care</h2>
                            <div class="d-flex align-items-center gap-16 mb-24">
                                <p class="h6 color-sec"><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                <p>( 5 Customer Review )</p>
                            </div>
                            <h3 class="fw-700 medium-black mb-32">$28.00</h3>
                            <div class="hr-line line-2 mb-32"></div>
                            <p class="mb-32">Donec bibendum enim ut elit porta ullamcorper. Vestibulum Nai
                                wekemdini iaculis vitae nulla. Morbi
                                mattis nec mi ac mollis. This is a type of food that is specifically
                                formulated and intended for consumption by
                                pets. It is usually sold in the form of dry kibble or wet cans, and is
                                designed to meet.</p>

                            <div class="function-bar mb-48">
                                <div class="quantity quantity-wrap">
                                    <div class="input-area quantity-wrap">
                                        <input class="decrement" type="button" value="-">
                                        <input type="text" name="quantity" value="1" maxlength="2" size="1"
                                               class="number">
                                        <input class="increment" type="button" value="+">
                                    </div>
                                </div>
                                <a href="checkout.html" class="cus-btn">
                                    <span class="text">add to cart</span>
                                    <span class="circle"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP Description Start -->
            <div class="shop-description pt-80">
                <div class="description-wrapper bg-white br-20">
                    <nav class="mb-32">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link" id="nav-desc-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-desc" type="button" role="tab" aria-controls="nav-desc"
                                    aria-selected="true">Description</button>

                            <button class="nav-link show active" id="nav-review-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                    aria-selected="false">Reviews (5)</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                            <p class="mb-12">
                                This is a type of food that is specifically formulated and intended for consumption
                                by pets. It is usually sold in the
                                form of dry kibble or wet cans, and is designed to meet the nutritional needs of a
                                variety of different types of pets,
                                including dogs, cats, and small animals like guinea pigs and rabbits.
                            </p>
                            <p class="mb-12">
                                This food may help from a variety of different ingredients, including meat, grains,
                                vegetables, and fortified vitamins
                                and minerals. Some pet food is formulated for specific life stages, such as puppy or
                                senior, and may contain higher
                                levels of certain nutrients to support the needs of pets at those stages of life.
                            </p>
                            <p class="mb-12">
                                At the end, also formulated for pets with special dietary needs, such as those with
                                food allergies or sensitivities.
                            </p>
                        </div>
                        <div class="tab-pane fade show active" id="nav-review" role="tabpanel"
                             aria-labelledby="nav-review-tab">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comments-sec mb-48">
                                        <div class="comment-box">
                                            <div class="user-image">
                                                <img src="{{asset('frontend/assets/media/user/user-5.png')}}" alt="" class="br-64">
                                            </div>
                                            <div class="block w-100">
                                                <div class="d-flex flex-sm-row flex-column align-items-sm-center justify-content-between mb-8">
                                                    <div class="info">
                                                        <p><span class="h6 fw-600 medium-black">Shafiqul</span>
                                                            (verified owner) - March 25, 2023</p>
                                                    </div>
                                                    <p class="color-sec"><i class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star"></i><i
                                                            class="fa-light fa-star"></i>
                                                    </p>
                                                </div>
                                                <p>Good Product...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="review-form bg-lightest-gray">
                                        <h5 class="fw-600 medium-black mb-12">Add a review</h5>
                                        <p class="mb-12">Your email address will not be published. Required fields
                                            are marked *</p>
                                        <form method="post" action="https://uiparadox.co.uk/public/templates/pet-haven/shop-detail.html"
                                              class="form-group feedback-form">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-block mb-24">
                                                        <input type="text" class="form-control" id="name"
                                                               name="name" required placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-block mb-24">
                                                        <input type="email" class="form-control" id="mail"
                                                               name="email" required placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="cus-checkBox mb-32">
                                                        <input type="checkbox" id="remember">
                                                        <label for="remember">Save my name, email, and website in
                                                            this browser for the next time I comment.</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="d-flex gap-12">
                                                        <p class="fw-700">Rating *</p>
                                                        <div class="star-rating mb-32">
                                                            <input type="radio" id="1-star" name="rating" value="1">
                                                            <label for="1-star" class="star">&#9733;</label>
                                                            <input type="radio" id="2-stars" name="rating"
                                                                   value="2">
                                                            <label for="2-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="3-stars" checked name="rating"
                                                                   value="3">
                                                            <label for="3-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="4-stars" name="rating"
                                                                   value="4">
                                                            <label for="4-stars" class="star">&#9733;</label>
                                                            <input type="radio" id="5-stars" name="rating"
                                                                   value="5">
                                                            <label for="5-stars" class="star">&#9733;</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="input-block mb-24">
                                                        <label class="mb-12">Your review *</label>
                                                        <textarea class="form-control" name="message" id="comment"
                                                                  rows="4"
                                                                  placeholder="Write Your Review here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="cus-btn">
                                                        <span class="text">add a review</span>
                                                        <span class="circle"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP Description End -->
        </div>
    </section>
    <!-- SHOP DETAIL END -->
@endsection
