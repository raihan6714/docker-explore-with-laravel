@extends('frontend.layouts.frontend')
@section('title','home')

@section('content')
    <!-- TITLE BANNER START -->
    <section class="title-banner mb-80">
        <div class="container-fluid-2">
            <div class="title-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="title-content">
                            <h1 class="medium-black fw-600">Reservation</h1>
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

    <!-- RESERVATION SECTION START -->
    <section class="reservation-sec pt-40 pb-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="" class="d-sm-block d-none">
        </div>
        <div class="container-fluid-2">
            <div class="heading text-center mb-48">
                <h2 class="fw-700 medium-black mb-24">Make Your Appointment</h2>
                <p>
                    Pellentesque maximus augue orci, quis congue purus iaculison id.
                    Maecenas eu lorem quisesdoi massal
                    <br class="d-lg-block d-none">
                    molestie vulputate in sitagi amet diam. Cras eu odio sit amet.
                </p>
            </div>
            <div class="row row-gap-4 justify-content-center">
                <div class="col-xl-6 col-lg-11">
                    <div class="requirement-container">
                        <!-- PET RADIO BUTTONS -->
                        <div class="radio-with-Icon mb-32">
                            <p class="radioOption-Item">
                                <input type="radio" name="petRadio" id="cat" value="true"
                                       class="wizard-form-radio" checked aria-invalid="false">
                                <label for="cat">
                                    <img src="{{asset('frontend/assets/media/images/radio-icon-1.png')}}" alt="">
                                    Cat
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="petRadio" id="dog" value="false"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label for="dog">
                                    <img src="{{asset('frontend/assets/media/images/radio-icon-2.png')}}" alt="">
                                    Dog
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="petRadio" id="other" value="true"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label for="other">
                                    <img src="{{asset('frontend/assets/media/images/radio-icon-3.png')}}" alt="">
                                    Other
                                </label>
                            </p>
                        </div>
                        <!-- PET RADIO BUTTONS -->

                        <!-- SERVICES RADIO BUTTONS -->
                        <h6 class="mb-12 fw-500">What kind of service you need ?* ( Select Please)</h6>
                        <div class="radio-with-Icon radio-container-2 mb-32">
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="vet" value="true"
                                       class="wizard-form-radio" checked aria-invalid="false">
                                <label class="h6" for="vet">
                                    Veterinary
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="dayCare" value="false"
                                       class="wizard-form-radio" checked aria-invalid="false">
                                <label class="h6" for="dayCare">
                                    Day Care
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="boarding" value="true"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="boarding">
                                    Boarding
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="grooming" value="false"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="grooming">
                                    Grooming
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="training" value="true"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="training">
                                    Training
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="feeding" value="false"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="feeding">
                                    Feeding
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="walking" value="true"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="walking">
                                    Walking
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="serviceRadio" id="playing" value="true"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label class="h6" for="playing">
                                    Playing
                                </label>
                            </p>
                        </div>
                        <!-- SERVICES RADIO BUTTONS -->

                        <!-- PET RADIO BUTTONS -->
                        <h6 class="mb-12 fw-500">Where do you want to take the services ?* ( Select Please)</h6>
                        <div class="radio-with-Icon mb-32">
                            <p class="radioOption-Item">
                                <input type="radio" name="doctorRadio" id="home" value="true"
                                       class="wizard-form-radio" checked aria-invalid="false">
                                <label for="home" class="fw-600">
                                    <img src="{{asset('frontend/assets/media/images/doctor-1.png')}}" alt="" class="radio-image-2">
                                    Home
                                </label>
                            </p>
                            <p class="radioOption-Item">
                                <input type="radio" name="doctorRadio" id="clinic" value="false"
                                       class="wizard-form-radio" aria-invalid="false">
                                <label for="clinic" class="fw-600">
                                    <img src="{{asset('frontend/assets/media/images/doctor-2.png')}}" alt="" class="radio-image-2">
                                    Pet Clinic
                                </label>
                            </p>

                        </div>
                        <!-- PET RADIO BUTTONS -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-11">
                    <form action="" method="post" class="reservation-form">
                        <div class="row row-gap-4">
                            <div class="col-md-6">
                                <div class="input-block mb-8">
                                    <label for="firstName" class="fw-500 medium-black mb-8">Full name*</label>
                                    <input type="text" name="name" id="firstName" class="form-control form-control-2" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-8">
                                    <label for="firstName" class="fw-500 medium-black mb-8">Phone Number*</label>
                                    <input type="text" name="lastname" id="lastName" class="form-control form-control-2" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-8">
                                    <label for="firstName" class="fw-500 medium-black mb-8">When Pick-up*</label>
                                    <input type="text" name="date" id="checkIn" class="form-control  form-control-2 sel-input date_from picker__input" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-8">
                                    <label for="firstName" class="fw-500 medium-black mb-8">When Drop*</label>
                                    <input type="text" name="datedrop" id="checkOut" class="form-control form-control-2 sel-input date_from picker__input" placeholder="DD/MM/YYYY">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-block mb-8">
                                    <label for="firstName" class="fw-500 medium-black mb-8">Short note (Which service do you want?) *</label>
                                    <textarea name="message" id="comments" class="form-control form-control-2" placeholder="Description..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="cus-btn">
                                    <span class="text">make an appointment</span>
                                    <span class="circle"></span>
                                </button>
                            </div>
                            <!-- Alert Message -->
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- RESERVATION SECTION END -->

    <!-- TESTIMONIALS SECTION START -->
    <section class="testimonial-sec py-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
        </div>
        <div class="container-fluid-2">
            <div class="row row-gap-4 justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8 col-10">
                    <div class="map-wrapper">
                        <div class="map-image">
                            <img src="{{asset('frontend/assets/media/images/map.png')}}" alt="">
                            <div class="feedback-user">
                                <a href="javascript:;" data-slide="1"><img src="{{asset('frontend/assets/media/images/test-1.png')}}"
                                                                           alt=""></a>
                                <a href="javascript:;" data-slide="2"><img src="{{asset('frontend/assets/media/images/test-2.png')}}"
                                                                           alt=""></a>
                                <a href="javascript:;" data-slide="3"><img src="{{asset('frontend/assets/media/images/test-3.png')}}"
                                                                           alt=""></a>
                                <a href="javascript:;" data-slide="4"><img src="{{asset('frontend/assets/media/images/test-4.png')}}"
                                                                           alt=""></a>
                            </div>
                        </div>
                        <div class="feedback-user-nav">
                            <img src="{{asset('frontend/assets/media/images/test-1.png')}}" alt="">
                            <img src="{{asset('frontend/assets/media/images/test-2.png')}}" alt="">
                            <img src="{{asset('frontend/assets/media/images/test-3.png')}}" alt="">
                            <img src="{{asset('frontend/assets/media/images/test-4.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <h2 class="fw-700 medium-black mb-24">
                        What Our Satisfied <br class="d-lg-block d-none">
                        Client Says
                    </h2>
                    <div class="testimonial-slider">
                        <div class="testimonial-block p-24 bg-quant br-24">
                            <p class="review-text mb-24">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution. Pellentesque maximus augue
                                orci, quis congue purus iaculison id. Maecenas eu lorem
                                quisesdoi massal molestie vulputate in sitagi amet diam.
                                Cras eu odio sit amet.
                            </p>
                            <div class="d-flex align-items-center gap-12">
                                <img src="{{asset('frontend/assets/media/user/user-7.png')}}" alt="" class="user-image br-64">
                                <div>
                                    <h6 class="fw-700 medium-black mb-4p">Rickey James</h6>
                                    <p class="fw-500">Chief of Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block p-24 bg-ter br-24">
                            <p class="review-text mb-24">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution. Pellentesque maximus augue
                                orci, quis congue purus iaculison id. Maecenas eu lorem
                                quisesdoi massal molestie vulputate in sitagi amet diam.
                                Cras eu odio sit amet.
                            </p>
                            <div class="d-flex align-items-center gap-12">
                                <img src="{{asset('frontend/assets/media/user/user-6.png')}}" alt="" class="user-image br-64">
                                <div>
                                    <h6 class="fw-700 medium-black mb-4p">Mary Jane</h6>
                                    <p class="fw-500">Chief of Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block p-24 bg-quant br-24">
                            <p class="review-text mb-24">
                                The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution. Pellentesque maximus augue orci, quis
                                congue purus iaculison id. It is a long established fact
                                that a reader will be distracted by the readable content of
                                a page when looking at its layout. Maecenas eu lorem
                                quisesdoi massal molestie vulputate in sitagi amet diam.
                                Cras eu odio sit amet.
                            </p>
                            <div class="d-flex align-items-center gap-12">
                                <img src="{{asset('frontend/assets/media/user/user-5.png')}}" alt="" class="user-image br-64">
                                <div>
                                    <h6 class="fw-700 medium-black mb-4p">Emma Claire</h6>
                                    <p class="fw-500">Chief of Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block p-24 bg-ter br-24">
                            <p class="review-text mb-24">
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when looking at
                                its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution. Maecenas eu lorem
                                quisesdoi massal molestie vulputate in sitagi amet diam.
                                Cras eu odio sit amet. Pellentesque maximus augue orci, quis
                                congue purus iaculison id.
                            </p>
                            <div class="d-flex align-items-center gap-12">
                                <img src="{{asset('frontend/assets/media/user/user-8.png')}}" alt="" class="user-image br-64">
                                <div>
                                    <h6 class="fw-700 medium-black mb-4p">Sophie Lynn</h6>
                                    <p class="fw-500">Chief of Staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION END -->
@endsection
