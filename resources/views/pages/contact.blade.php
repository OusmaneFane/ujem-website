@extends('layouts.base')

@section('content')

<main>
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('home') }}" class="single">Accueil</a>
                        </li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="{{ route('contact') }}"
                                class="single">contact</a></li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Contactez-nous</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Contact area S t a r t-->
    <div class="volunteer-details top-bottom-padding2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-section">
                        <div class="contact-list">
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-phone-fill"></i>
                                </div>
                                <div class="divider-ver"></div>
                                <div class="contact-content">
                                    <p class="subtitle">Téléphone</p>
                                    <a class="title" href="javascript:void(0)">+223 70 80 76 68/ +223 75 15 02 08</a>
                                </div>
                            </div>
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-mail-fill"></i>
                                </div>
                                <div class="divider-ver"></div>
                                <div class="contact-content">
                                    <p class="subtitle">Email</p>
                                    <a class="title" href="javascript:void(0)">ujem.mali@gmail.com</a>
                                </div>
                            </div>
                            <div class="contact-icon-list">
                                <div class="single-icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="divider-ver"></div>
                                <div class="contact-content">
                                    <p class="subtitle">Adresse</p>
                                    <a class="title" href="javascript:void(0)">Quinzambougou</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-padding4">
                <div class="row gy-24">
                    <div class="col-xl-6">
                        <div class="send-box">
                            <form class="custom-form" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="custom-label" for="exampleFormControlInput1">Nom
                                                Complet</label>
                                            <input type="text" class="form-control custom-input"
                                                id="exampleFormControlInput1" placeholder="Nom Complet">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="custom-label" for="exampleFormControlInput5">Téléphone</label>
                                            <input type="text" class="form-control custom-input"
                                                id="exampleFormControlInput5" placeholder="Téléphone">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="custom-label" for="exampleFormControlInput2">Email
                                            </label>
                                            <input type="email" class="form-control custom-input"
                                                id="exampleFormControlInput2" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control custom-textarea" id="exampleFormControlTextarea1"
                                            placeholder="Message" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="submit-btn">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <iframe class="map-frame"
                            src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                            width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End-of contact-->


</main>

@endsection