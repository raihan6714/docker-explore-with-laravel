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
                            <h1 class="medium-black fw-600">Shop</h1>
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

    <!-- SHOP SECTION START -->
    <section class="shop-wrapper py-80">
        <div class="elements">
            <img src="assets/media/vector/foot-icon-1.png" alt="">
            <img src="assets/media/vector/foot-icon-1.png" alt="">
            <img src="assets/media/vector/foot-icon-1.png" alt="">
            <img src="assets/media/vector/foot-icon-1.png" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar">
                        <form action="https://uiparadox.co.uk/public/templates/pet-haven/shop-detail.html" class="mb-24">
                            <input type="text" name="search" id="searchBar" class="form-control" placeholder="Search Here...">
                            <button>
                                <i class="fa-light fa-magnifying-glass"></i>
                            </button>
                        </form>
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
                        <div class="category-block p-24 br-12 bg-lightest-gray mb-24">
                            <div class="title mb-16">
                                <h5 class="fw-600 medium-black">Filter by Rating</h5>
                            </div>
                            <div class="hr-line line-3 mb-16"></div>
                            <div class="content-block">
                                <div class="d-flex justify-content-between align-items-center mb-16">
                                    <div class="star-rating">
                                        <input type="radio" id="1-star" checked name="rating" value="1">
                                        <label for="1-star" class="star">&#9733;</label>
                                        <input type="radio" id="2-stars" name="rating" value="2">
                                        <label for="2-stars" class="star">&#9733;</label>
                                        <input type="radio" id="3-stars" name="rating" value="3">
                                        <label for="3-stars" class="star">&#9733;</label>
                                        <input type="radio" id="4-stars" name="rating" value="4">
                                        <label for="4-stars" class="star">&#9733;</label>
                                        <input type="radio" id="5-stars" name="rating" value="5">
                                        <label for="5-stars" class="star">&#9733;</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-16">
                                    <div class="star-rating">
                                        <input type="radio" id="11-star" name="rating2" value="11">
                                        <label for="11-star" class="star">&#9733;</label>
                                        <input type="radio" id="12-stars" checked name="rating2" value="12">
                                        <label for="12-stars" class="star">&#9733;</label>
                                        <input type="radio" id="13-stars"  name="rating2" value="13">
                                        <label for="13-stars" class="star">&#9733;</label>
                                        <input type="radio" id="14-stars" name="rating2" value="14">
                                        <label for="14-stars" class="star">&#9733;</label>
                                        <input type="radio" id="15-stars" name="rating2" value="15">
                                        <label for="15-stars" class="star">&#9733;</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>

                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-16">
                                    <div class="star-rating ">
                                        <input type="radio" id="21-star" name="rating3" value="21">
                                        <label for="21-star" class="star">&#9733;</label>
                                        <input type="radio" id="22-stars" name="rating3" value="22">
                                        <label for="22-stars" class="star">&#9733;</label>
                                        <input type="radio" id="23-stars" checked name="rating3" value="23">
                                        <label for="23-stars" class="star">&#9733;</label>
                                        <input type="radio" id="24-stars" name="rating3" value="24">
                                        <label for="24-stars" class="star">&#9733;</label>
                                        <input type="radio" id="25-stars" name="rating3" value="25">
                                        <label for="25-stars" class="star">&#9733;</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-16">
                                    <div class="star-rating ">
                                        <input type="radio" id="31-star" name="rating4" value="31">
                                        <label for="31-star" class="star">&#9733;</label>
                                        <input type="radio" id="32-stars" name="rating4" value="32">
                                        <label for="32-stars" class="star">&#9733;</label>
                                        <input type="radio" id="33-stars" name="rating4" value="33">
                                        <label for="33-stars" class="star">&#9733;</label>
                                        <input type="radio" id="34-stars" checked name="rating4" value="34">
                                        <label for="34-stars" class="star">&#9733;</label>
                                        <input type="radio" id="35-stars" name="rating4" value="35">
                                        <label for="35-stars" class="star">&#9733;</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="star-rating">
                                        <input type="radio" id="41-star" name="rating5" value="41">
                                        <label for="41-star" class="star">&#9733;</label>
                                        <input type="radio" id="42-stars" name="rating5" value="42">
                                        <label for="42-stars" class="star">&#9733;</label>
                                        <input type="radio" id="43-stars" name="rating5" value="43">
                                        <label for="43-stars" class="star">&#9733;</label>
                                        <input type="radio" id="44-stars" name="rating5" value="44">
                                        <label for="44-stars" class="star">&#9733;</label>
                                        <input type="radio" id="45-stars" checked name="rating5" value="45">
                                        <label for="45-stars" class="star">&#9733;</label>
                                    </div>
                                    <p class="light-gray fw-400">(20)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="row row-gap-4">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-hex">
                                <a href="shop-detail.html" class="img-box justify-content-start shine">
                                    <img src="assets/media/products/product-1-copy.png" alt="">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-1 h5 fw-600 mb-8">Doggy Food
                                    </a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-ter">
                                <a href="shop-detail.html" class="img-box shine">
                                    <img src="assets/media/products/product-2-copy.png" alt="" class="product-img">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-2 h5 fw-600 mb-8">Puppy Collar
                                    </a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn btn-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-hex">
                                <a href="shop-detail.html" class="img-box shine">
                                    <img src="assets/media/products/product-3-copy.png" alt="" class="product-img">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-1 h5 fw-600 mb-8">Dog Bowl
                                    </a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-ter">
                                <a href="shop-detail.html" class="img-box shine">
                                    <img src="assets/media/products/product-4-copy.png" alt="" class="product-img">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-2 h5 fw-600 mb-8">Puppy House</a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn btn-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-hex">
                                <a href="shop-detail.html" class="img-box shine">
                                    <img src="assets/media/products/product-5.png" alt="">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-1 h5 fw-600 mb-8">Plastic Basin
                                    </a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="product-card bg-ter">
                                <a href="shop-detail.html" class="img-box shine">
                                    <img src="assets/media/products/product-6.png" alt="" class="product-img">
                                </a>
                                <div class="text-box">
                                    <a href="shop-detail.html" class="title-2 h5 fw-600 mb-8">Home Workout
                                    </a>
                                    <p class="mb-24">
                                        Pellentesque maximus augue orci, quis congue purus.
                                    </p>
                                    <div class="pricing-block">
                                        <div class="d-flex align-items-center gap-12">
                                            <h6 class="fw-600">$148</h6>
                                            <p class="light-gray fw-600">$148.00</p>
                                        </div>
                                        <a href="checkout.html" class="checkout-btn btn-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20"
                                                 viewBox="0 0 19 20" fill="none">
                                                <path
                                                    d="M6.12159 12.7833H6.12246L6.12464 12.7832L16.2168 12.7832C16.4652 12.7832 16.6837 12.6184 16.752 12.3795L18.9785 4.58652C19.0265 4.41852 18.9929 4.2379 18.8878 4.09845C18.7826 3.959 18.618 3.87695 18.4433 3.87695L4.83784 3.87695L4.43993 2.08628C4.38325 1.83159 4.15741 1.65039 3.89648 1.65039L0.55664 1.65039C0.249184 1.65039 0 1.89957 0 2.20703C0 2.51449 0.249184 2.76367 0.55664 2.76367H3.45001C3.52046 3.08099 5.35418 11.3329 5.45971 11.8076C4.86814 12.0648 4.45312 12.6546 4.45312 13.3398C4.45312 14.2606 5.20227 15.0098 6.12304 15.0098L16.2168 15.0098C16.5242 15.0098 16.7734 14.7606 16.7734 14.4531C16.7734 14.1457 16.5242 13.8965 16.2168 13.8965L6.12304 13.8965C5.81617 13.8965 5.5664 13.6467 5.5664 13.3398C5.5664 13.0334 5.8153 12.7841 6.12159 12.7833ZM17.7054 4.99023L15.7968 11.6699H6.56952L5.08514 4.99023L17.7054 4.99023Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M5.5664 16.6797C5.5664 17.6005 6.31555 18.3496 7.23632 18.3496C8.1571 18.3496 8.90624 17.6005 8.90624 16.6797C8.90624 15.7589 8.1571 15.0098 7.23632 15.0098C6.31555 15.0098 5.5664 15.7589 5.5664 16.6797ZM7.23632 16.123C7.5432 16.123 7.79296 16.3728 7.79296 16.6797C7.79296 16.9866 7.5432 17.2363 7.23632 17.2363C6.92945 17.2363 6.67968 16.9866 6.67968 16.6797C6.67968 16.3728 6.92945 16.123 7.23632 16.123Z"
                                                    fill="#FAFAFA" />
                                                <path
                                                    d="M13.4336 16.6797C13.4336 17.6005 14.1827 18.3496 15.1035 18.3496C16.0243 18.3496 16.7734 17.6005 16.7734 16.6797C16.7734 15.7589 16.0243 15.0098 15.1035 15.0098C14.1827 15.0098 13.4336 15.7589 13.4336 16.6797ZM15.1035 16.123C15.4104 16.123 15.6601 16.3728 15.6601 16.6797C15.6601 16.9866 15.4104 17.2363 15.1035 17.2363C14.7966 17.2363 14.5469 16.9866 14.5469 16.6797C14.5469 16.3728 14.7966 16.123 15.1035 16.123Z"
                                                    fill="#FAFAFA" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </section>
    <!-- SHOP SECTION END -->
@endsection
