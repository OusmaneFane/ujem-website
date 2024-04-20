<!DOCTYPE html>
<html lang="en" dir="lrt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ONG UJEM MALI </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ '/assets/css/bootstrap-5.3.0.min.css' }}">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{ '/assets/css/remixicon.css' }}">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ '/assets/css/plugin.css' }}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ '/assets/css/main-style.css' }}">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/rtl.css"> -->
</head>

<body>

    <header>
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="header-left d-flex align-items-center justify-content-between">
                                    <!-- Logo-->
                                    <div class="logo logo-large light-logo">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('/assets/images/logo/logo.jpg') }}" alt="logo"
                                                width="200">
                                        </a>
                                    </div>
                                    <!-- Logo Mobile-->
                                    <div class="logo logo-mobile light-logo">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('/assets/images/icon/favicon.ico') }}" alt="img"></a>
                                    </div>
                                </div>
                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul class="listing" id="navigation">
                                            <li class="single-list">
                                            <li class="single-list"><a href="{{ route('home') }}"
                                                    class="single">ACCUEIL</a></li>
                                            <li class="single-list"><a href="{{ route('apropos') }}"
                                                    class="single">APROPOS DE NOUS</a>
                                            </li>
                                            <li class="single-list"><a href="{{ route('blog') }}"
                                                    class="single">ARTICLES</a>
                                            <li class="single-list"><a href="{{ route('contact') }}"
                                                    class="single">CONTACT</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            <!-- Mobile Menu -->
                            <div class="div">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer-wrapper footer-bg-one">
            <div class="container">
                <div class="footer-menu">
                    <div class="col-lg-12">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center justify-content-between">
                                <!-- Logo-->
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img src="{{ " /assets/images/logo/logo.jpg" }}"
                                            width="100" alt="logo"></a>
                                </div>
                            </div>
                            <!-- Footer-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation2">
                                        <li class="single-list"><a href="{{ route('home') }}" class="single">ACCUEIL</a>
                                        </li>
                                        <li class="single-list"><a href="{{ route('apropos') }}" class="single">APROPOS
                                                DE NOUS</a></li>
                                        <li class="single-list"><a href="{{ route('blog') }}"
                                                class="single">ARTICLES</a>
                                        </li>
                                        <li class="single-list"><a href="{{ route('contact') }}"
                                                class="single">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Right button -->
                            <ul class="cart">
                                <li class="cart-list"><a href="#" class="donate-btn">Faire un don</a>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="footer-line">
                <div class="footer-imp-link row g-4 justify-content-between">
                    <div class="col-xl-2 col-lg-6">
                        <div class="footer-link">
                            <h4 class="title">Liens Utiles</h4>
                            <ul class="imp-link">
                                <li class="single-list">
                                    <a class="single" href="{{ route('apropos') }}">A propos</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="{{ route('blog') }}">Articles</a>
                                </li>
                                <li class="single-list">
                                    <a class="single" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
                <hr class="footer-line">
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p class="pera">Copyright © {{ date('Y') }}
                                        <a href="https://www.ong-ujem.com/" target="_blank">ONG UJEM MALI</a> All Rights
                                    <div class="footer-social-link">
                                        <ul class="listing">
                                            <li class="single-list">
                                                <a class="single" href=""><i class="ri-facebook-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href=""><i class="ri-youtube-fill"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href=""><i class="ri-instagram-line"></i></a>
                                            </li>
                                            <li class="single-list">
                                                <a class="single" href=""><i class="ri-linkedin-fill"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End-of Footer -->
    <!-- Scroll Up  -->

    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    <script src="{{ '/assets/js/jquery-3.7.0.min.js' }}"></script>
    <script src="{{ '/assets/js/popper.min.js' }}"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="{{ '/assets/js/plugin.js' }}"></script>
    <!-- Main js-->
    <script src="{{ '/assets/js/main.js' }}"></script>
</body>


</html>