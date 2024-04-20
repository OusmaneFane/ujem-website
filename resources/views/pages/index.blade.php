@extends('layouts.base')

@section('content')
<main>
    <!-- Hero area S t a r t-->
    <section class="hero-area">
        <div class="single-slider hero-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                        <div class="hero-caption-one mb-20">
                            <h4 class="key-title font-700 mb-20 wow fadeInUp" data-wow-delay="0.0s">ONG UJEM </h4>
                            <h1 class="title font-700 wow fadeInUp" data-wow-delay="0.1s">UNION DES JEUNES
                                POUR L’EMERGENCE DU MALI
                            </h1>
                            <p class="pera wow fadeInUp" data-wow-delay="0.3s">LA FORCE DE LA JEUNESSE,L'AVENIR DE LA
                                NATION</p>

                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="d-flex">
                            <div class="hero-image position-relative d-none d-lg-block">
                                <img src="{{ 'assets/images/img/img1.jpg' }}" alt="img"
                                    class=" w-100 tilt-effect wow fadeInUp" data-wow-delay="0.1s">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Hero-->

    <!-- helpful area S t a r t-->
    <section class="helpful-area">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="helpful-card-icon">
                            <i class="ri-shake-hands-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">La Promotion de l'Excellence</h4>
                            <p class="caption-para">La Promotion de l'Excellence</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.0s">
                        <div class="helpful-card-icon">
                            <i class="ri-graduation-cap-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">L'Honneur et la Dignité</h4>
                            <p class="caption-para">L'Honneur et la Dignité</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc wow fadeInRight" data-wow-delay="0.0s">
                        <div class="helpful-card-icon">
                            <i class="ri-user-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">L'Intégrité et la Solidarité</h4>
                            <p class="caption-para">L'Intégrité et la Solidarité</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card h-calc  wow fadeInRight" data-wow-delay="0.2s">
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">La Neutralité et le sens du Mérite</h4>
                            <p class="caption-para">La Neutralité et le sens du Mérite</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of helpful-->

    <!-- urgent Area S t a r t -->
    <section class="urgent-area section-padding2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Notre Mission</span>
                        <h4 class="title font-700">Soutenir la jeunesse malienne pour favoriser son épanouissement et le
                            développement du Mali</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-12 col-xl-8 col-lg-12 p-5 urgent-area-slide xs-p-8">
                    <!-- Single Slider-->
                    <div class="image-container position-relative h-100">
                        <img class="w-100 h-100" src="{{ '/assets/images/img/img2.jpg' }}" alt="img">

                    </div>
                    <!-- Single Slider-->
                    <div class="image-container position-relative h-100">
                        <img class="w-100 h-100" src="{{ '/assets/images/img/img3.jpg' }}" alt="img">

                    </div>
                    <!-- Single Slider -->
                    <div class="image-container position-relative h-100">
                        <img class="w-100 h-100" src="{{ '/assets/images/img/img4.jpg' }}" alt="img">
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End-of urgent area -->

    <!-- Any Question Area S t a r t -->
    <section class="question-area bottom-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-50">
                        <h2 class="title font-700">Quels sont nos domaines d'intervention?</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Education et Formation </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">When deciding which charity to donate to, it's important to
                                    do your search.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed additional-styles" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">Santé et Action Humanitaire</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">When deciding which charity to donate to, it's important to
                                    do your search.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed additional-styles" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">Environnement et Développement Durable</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">When deciding which charity to donate to, it's important to
                                    do your search.</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <img class="w-100 d-none d-lg-block tilt-effect" src="{{ '/assets/images/img/img5.jpg' }}"
                        alt="img">
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Question Area -->

    <!-- Our event S t a r t-->
    <section class="our-event bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Futues Evenements</span>
                        <h2 class="title font-700">Nos Prochains Evenements</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.0s">
                        <div class="event-img position-relative">
                            <a href="event-details.html"> <img src="assets/images/gallery/event-2.png"
                                    class="img-fluid w-100" alt="img"> </a>
                        </div>
                        <div class="event-info">
                            <div class="d-flex justify-content-between align-items-center gap-6">
                                <div class="event-info-title">
                                    <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                                        <div class="date flex gap-12 align-items-center">
                                            <i class="ri-time-line"></i>
                                            <p class="info">30 Jun 2023</p>
                                        </div>
                                        <div class="map flex gap-12 align-items-center">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="info">South . Korea</p>
                                        </div>
                                    </div>
                                    <h4><a class="title text-capitalize" href="event-details.html">Free medical
                                            camping</a></h4>
                                </div>
                                <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <a href="event-details.html"> <img src="assets/images/gallery/event-3.png"
                                    class="img-fluid w-100" alt="img"> </a>
                        </div>
                        <div class="event-info">
                            <div class="d-flex justify-content-between align-items-center gap-6">
                                <div class="event-info-title">
                                    <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                                        <div class="date flex gap-12 align-items-center">
                                            <i class="ri-time-line"></i>
                                            <p class="info">30 Jun 2023</p>
                                        </div>
                                        <div class="map flex gap-12 align-items-center">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="info">South . Korea</p>
                                        </div>
                                    </div>
                                    <h4><a class="title text-capitalize" href="event-details.html">Free medical
                                            camping</a></h4>
                                </div>
                                <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                    <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.2s">
                        <div class="event-img position-relative">
                            <a href="event-details.html"> <img src="assets/images/gallery/event-2.png"
                                    class="img-fluid w-100" alt="img"> </a>
                        </div>
                        <div class="event-info">
                            <div class="d-flex justify-content-between align-items-center gap-6">
                                <div class="event-info-title">
                                    <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                                        <div class="date flex gap-12 align-items-center">
                                            <i class="ri-time-line"></i>
                                            <p class="info">30 Jun 2023</p>
                                        </div>
                                        <div class="map flex gap-12 align-items-center">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="info">South . Korea</p>
                                        </div>
                                    </div>
                                    <h4><a class="title text-capitalize" href="event-details.html">Free medical
                                            camping</a></h4>
                                </div>
                                <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of All Product -->

    <!-- Testimonial S t a r t-->
    <section class="testimonial-section bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-50">
                        <span class="sub-tittle text-capitalize font-600">Témoignages</span>
                        <h2 class="title font-700">Ce que disent nos bénéficiaires</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-24">
                <div class="col-lg-10 col-12 testimonial-slider">
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">Robart Jonson</h3>
                                <p class="location">United , Canada</p>
                            </div>
                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other person's assumptions, such as "Do you really think that's
                                    true?", or to get them to think about a different perspective, such as "What if we
                                    tried it this way? The specific questions to ask may vary depending on the context
                                    and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">Adam John</h3>
                                <p class="location">United , UAE</p>
                            </div>

                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera pb-80">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other person's assumptions, such as "Do you really think that's
                                    true?", or to get them to think about a different perspective, such as "What if we
                                    tried it this way? The specific questions to ask may vary depending on the context
                                    and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial position-relative">
                        <div class="client-info">
                            <div class="client-details">
                                <h3 class="name">John Doe</h3>
                                <p class="location">Mexico, USA</p>
                            </div>

                            <div class="rating">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                        <div class="position-relative">
                            <p class="pera pb-80">
                                <i>These questions are used to provoke thought and discussion. They can be used to
                                    challenge the other person's assumptions, such as "Do you really think that's
                                    true?", or to get them to think about a different perspective, such as "What if we
                                    tried it this way? The specific questions to ask may vary depending on the context
                                    and the information you are seeking.</i>
                            </p>
                            <div class="position-absolute quote">
                                <div class="rounded-btn">
                                    <i class="ri-double-quotes-r"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery S t a r t -->
    {{-- <div class="gallery-area">
        <div class="gallery-slider d-flex">
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-1.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-4.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-2.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-3.png" alt="img">
            </div>
            <div class="gallery-img">
                <img src="assets/images/gallery/gallery-1.png" alt="img">
            </div>
        </div>
    </div> --}}
    <!-- End-of Gallery -->
</main>

@endsection