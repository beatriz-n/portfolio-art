<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/style2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/img/triz_favicon_branca.png') }}" rel="icon">
    <link href="{{ asset('assets/img/triz_favicon_branca.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:imtrixchannel@gmail.com">imtrixchannel@gmail.com</a>
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://www.instagram.com/triz_artzz?igsh=NGFldTIybzAwYjFu" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php"><img src="{{ asset('assets/img/triz_assinatura_branca_comprimida.png') }}" alt="logo minha assinatura"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Início</a></li>
                    <li><a class="nav-link scrollto" href="#eventos">Eventos</a></li>
                    <li><a class="nav-link scrollto" href="#servicos">Serviços</a></li>
                    <li><a class="nav-link scrollto" href="#precos">Comissões</a></li>
                    <li><a class="nav-link scrollto" href="#prontaentrega">Pronta Entrega</a></li>
                    <li><a class="nav-link scrollto" href="#regras">Regras</a></li>
                    <li><a class="nav-link scrollto" href="#contato">Contato</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <div id="layoutTriz">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-info">
                            <h3>Triz</h3>
                            <p>
                                <strong>Email:</strong> imtrixchannel@gmail.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.instagram.com/triz_artzz?igsh=NGFldTIybzAwYjFu" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 footer-links d-flex justify-content-center">
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#hero">Início</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#eventos">Eventos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#servicos">Serviços</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#precos">Comissões</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#prontaentrega">Pronta Entrega</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#regras">Regras</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="footer-link" href="index.php#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Triz</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a class="footer-link" href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/script2.js') }}"></script>
</body>

</html>
