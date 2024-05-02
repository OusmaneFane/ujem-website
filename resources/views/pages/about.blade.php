@extends('layouts.base')

@section('content')
<main>
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">
                                Accueil
                            </a>
                        </li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="{{ route('apropos') }}"
                                class="single">A propos</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">A propos de nous</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- helpful area S t a r t-->
    <section class="helpful-area-three section-padding">
        <div class="container">
            <div class="row g-24">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card wow fadeInUp" data-wow-delay="0.0s">
                        <div class="helpful-card-icon">
                            <i class="ri-hand-coin-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">La Promotion de l'Excellence</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do your
                                research.</p>
                            <a href="javascript:void(0)" class="imp-link">Read More <i
                                    class="ri-arrow-right-up-line"></i></a>
                        </div>
                        <div class="number-watermark">
                            <h4 class="number">01</h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card wow fadeInUp" data-wow-delay="0.20s">
                        <div class="helpful-card-icon">
                            <i class="ri-exchange-dollar-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">L'Honneur et la Dignité</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do your
                                research.</p>
                            <a href="javascript:void(0)" class="imp-link">Read More <i
                                    class="ri-arrow-right-up-line"></i></a>
                        </div>
                        <div class="number-watermark">
                            <h4 class="number">03</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card wow fadeInUp" data-wow-delay="0.03s">
                        <div class="helpful-card-icon">
                            <i class="ri-book-open-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">L'Intégrité et la Solidarité</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do your
                                research.</p>
                            <a href="javascript:void(0)" class="imp-link">Read More <i
                                    class="ri-arrow-right-up-line"></i></a>
                        </div>
                        <div class="number-watermark">
                            <h4 class="number">04</h4>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="helpful-card wow fadeInUp" data-wow-delay="0.10s">
                        <div class="helpful-card-icon">
                            <i class="ri-24-hours-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">La Neutralité et le sens du Mérite</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do your
                                research.</p>
                            <a href="javascript:void(0)" class="imp-link">Read More <i
                                    class="ri-arrow-right-up-line"></i></a>
                        </div>
                        <div class="number-watermark">
                            <h4 class="number">02</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of helpful-->

    <!-- About us Area S t a r t -->
    <section class="about-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 my-auto">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-35">
                        <span class="sub-tittle text-capitalize font-600">Quels sont nos objectifs ?</span>
                        <h4 class="title font-700 pb-15 text-justify">L'UJEM vise à renforcer l'Emergence dans le
                            District de Bamako et à travers le Mali avec des actions concrètes et
                            humanitaires.</h4>

                        <p class="pera-subtitle">
                            Pour y parvenir, l'ONG se fixe comme objectifs spécifiques de :
                        </p>
                    </div>
                    <div class="about-info">
                        <div class="row">
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-hand-heart-line"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Contribuer efficacement au développement socio-économique et
                                            culturel des populations maliennes</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Contribuer au renforcement des capacités des acteurs du
                                            développement local</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Contribuer au renforcement des capacités des acteurs du
                                            développement local</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Responsabiliser les femmes dans la vie socio-économique et
                                            culturel au Mali</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Promouvoir le renforcement d’une société civile qui participe
                                            à la formulation et à la mise en œuvre des politiques de
                                            développement</h4>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Promouvoir le renforcement d’une société civile qui participe
                                            à la formulation et à la mise en œuvre des politiques de
                                            développement</h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title">Renforcer un partenariat dynamisant les efforts de l’Etat et
                                            des ONG-Associations signataires d’Accord-cadre avec
                                            l’Etat dans l’appui aux communautés</h4>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative h-100">
                        <div class="play-button">
                            <a id="play-video-two" class="video-play-button-two d-none d-lg-block d-none d-lg-block"
                                href="javascript:void(0)">
                                <span></span>
                            </a>

                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">&times;</a>
                            </div>
                        </div>
                        <div>
                            <img class="w-100 d-none d-lg-block" src="assets/images/gallery/about-3.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of About us Area -->

    <!-- favorite Area S t a r t -->
    <div class="favourite-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('assets/images/partner1.jpg') }}" alt="image" class="img-fluid" width="300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('assets/images/partner2.jpg') }}" alt="image" class="img-fluid" width="300">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('assets/images/partner3.jpg') }}" alt="image" class="img-fluid" width="300">
                    </div>
                </div>
                <hr class="divider mb-0">
            </div>
        </div>
        <!-- End-of favorite -->

        <!-- Team Area S t a r t -->
        <section class="team-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-50">
                            <span class="sub-tittle text-capitalize font-600">EQUIPE DE DIRECTION</span>
                            <h2 class="title font-700">L'équipe de l'UJEM</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-24">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.0s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-1.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">david
                                                        warner</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-2.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">Jony
                                                        Bristow</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-3.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">david
                                                        warner</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-3.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">david
                                                        warner</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-3.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">david
                                                        warner</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-team h-calc wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-img">
                                <a href="volunteer-details.html">
                                    <img src="assets/images/gallery/team-3.png" class="img-fluid w-100" alt="img">
                                </a>
                            </div>
                            <div class="team-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="team-info-title mb-8">
                                        <div class="d-flex gap-40 align-items-center">
                                            <div class="content">
                                                <h4 class="title text-capitalize"><a href="volunteer-details.html">david
                                                        warner</a></h4>
                                                <p class="pera">sir bradman</p>
                                            </div>
                                            <div class="social">
                                                <a class="hover-icon" href="javascript:void(0)"><i
                                                        class="ri-share-fill"></i></a>
                                                <div class="all-social-icon">
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-google-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-facebook-fill"></i></a>
                                                    <a class="social-icon" href="javascript:void(0)"><i
                                                            class="ri-linkedin-fill"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of Team -->

        <!-- Testimonial S t a r t-->
        <section class="testimonial-section-three section-padding">
            <div class="container">
                <div class="row gy-24 align-items-center">
                    <div class="col-xl-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle">
                            <span class="sub-tittle text-capitalize font-600">Les Mots du Directeur</span>
                            <h2 class="title font-700">That's very glad to get People Review</h2>
                            <p class="pera">If you're interested in donating your Money, it's important to discussyour
                                wishes. These questions are used to provoke thought and discussion. They can be used to
                                challenge the other person's assumptions.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-9">
                        <div class="position-relative">
                            <div class="testimonial-slider-three-active flex">
                                <div class="quote-with-img">
                                    <div class="testimonial-images">
                                        <img class="w-100" src="assets/images/gallery/testimonial.png" alt="image">
                                    </div>
                                </div>
                                <div class="testimonial-images">
                                    <img class="w-100" src="assets/images/gallery/testimonial.png" alt="image">
                                </div>
                                <div class="testimonial-images">
                                    <img class="w-100" src="assets/images/gallery/testimonial.png" alt="image">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End-of Testimonial -->


        <!-- End-of Gallery -->
</main>

@endsection