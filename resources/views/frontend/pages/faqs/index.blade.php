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
                            <h1 class="medium-black fw-600">FAQ's</h1>
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

    <!-- FAQ's SECTION START -->
    <section class="faqs-section py-80">
        <div class="elements">
            <img src="{{asset('frontend/assets/media/vector/cat-vector.png')}}" alt="" class="d-sm-block d-none">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
            <img src="{{asset('frontend/assets/media/vector/foot-icon-1.png')}}" alt="">
        </div>
        <div class="container-fluid-2">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="faq-wrapper pb-80">
                        <h2 class="fw-700 medium-black mb-24">
                            General Questions
                        </h2>
                        <p class="mb-24">
                            Pellentesque maximus augue orci, quis congue purus iaculison
                            id. Maecenas eu lorem quisesdoi massal molestie vulputate in
                            sitagi amet diam. Cras eu odio sit amet ipsum cursus for that
                            gone pellentesquea.
                        </p>
                        <div id="accordionExample1">
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600" data-bs-toggle="collapse"
                                   data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">In et finibus
                                    lectus. Donec scelerisque tortor?
                                </a>
                                <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                     data-bs-parent="#accordionExample1">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2 mb-24"></div>
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600 collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">Rhoncus turpis
                                    porta non Curabitur interdum?
                                </a>
                                <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2"
                                     data-bs-parent="#accordionExample1">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2 mb-24"></div>
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600 collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">Donec ac enim
                                    vitae ligula ultrices accum?
                                </a>
                                <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                     data-bs-parent="#accordionExample1">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2"></div>
                        </div>
                    </div>
                    <div class="faq-wrapper">
                        <h2 class="fw-700 medium-black mb-24">
                            Other Questions
                        </h2>
                        <p class="mb-24">
                            Pellentesque maximus augue orci, quis congue purus iaculison
                            id. Maecenas eu lorem quisesdoi massal molestie vulputate in
                            sitagi amet diam. Cras eu odio sit amet ipsum cursus for that
                            gone pellentesquea.
                        </p>
                        <div id="accordionExample2">
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600" data-bs-toggle="collapse"
                                   data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">In et finibus
                                    lectus. Donec scelerisque tortor?
                                </a>
                                <div id="faq4" class="accordion-collapse collapse show" aria-labelledby="faq4"
                                     data-bs-parent="#accordionExample2">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2 mb-24"></div>
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600 collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">Rhoncus turpis
                                    porta non Curabitur interdum?
                                </a>
                                <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5"
                                     data-bs-parent="#accordionExample2">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2 mb-24"></div>
                            <div class="faq-block">
                                <a href="#" class="accordion-button h6 fw-600 collapsed" data-bs-toggle="collapse"
                                   data-bs-target="#faq6" aria-expanded="true" aria-controls="faq6">Donec ac enim
                                    vitae ligula ultrices accum?
                                </a>
                                <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6"
                                     data-bs-parent="#accordionExample2">
                                    <p class="mt-32">
                                        Pellentesque maximus augue orci, quis congue purus
                                        iaculison id. Maecenas eu lorem quisesdoi massal
                                        molestie vulputate in sitagi amet diam. Cras eu odio sit
                                        amet ipsum cursus for that gone pellentesquea.
                                    </p>
                                </div>
                            </div>
                            <div class="hr-line line-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ's SECTION END -->
@endsection
