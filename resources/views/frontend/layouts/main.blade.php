<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>J.P.Electronic Devices - Excellence :: Quality :: Trust</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:info@jpedindia.com">info@jpedindia.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +91-22-61110222
            </div>
            <div class="cta d-none d-md-block">
                @php
                    $data = DB::table('brochures')->first();
                @endphp
                @if (!blank($data))
                    <a href="{{ asset('storage/' . $data->file) }}" class="scrollto" download>Download Brochure</a>
                @else
                    <a href="#" class="scrollto" download>Download Brochure</a>
                @endif
                <a href="https://www.linkedin.com/company/782997" class="btn-link"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="home-2-header fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo"><a href="{{ url('/') }}"> <img src="{{ asset('assets/img/JPE_Logo.png') }}"
                        alt="">
                    <span>J.P. Electronic Devices <br>
                        <p>Excellence :: Quality :: Trust</p>
                    </span></a>
            </div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=#" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('about') }}">About us</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('line') }}">Line Card</a></li>
                    <li><a class="nav-link scrollto " href="{{ route('referenceDesign') }}">Reference Design</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('news') }}">News & Updates</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact us</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to our newsletter and never miss out on the latest updates, insightful articles,
                            and exclusive offers! By entering your email address below, you'll gain access to a wealth
                            of valuable information delivered straight to your inbox.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('newsletter') }}" method="post">
                            @csrf
                            <input type="email" name="email"><input type="submit" value="Subscribe">

                        </form>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ route('referenceDesign') }}">Reference Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>

                    <!--<div class="col-lg-3 col-md-6 footer-links">-->
                    <!--    <h4>Our Services</h4>-->
                    <!--    <ul>-->
                    <!--        <li><i class="bx bx-chevron-right"></i> <a-->
                    <!--                href="{{ route('referenceDesign') }}">Reference-->
                    <!--                Design</a></li>-->
                    <!--        <li><i class="bx bx-chevron-right"></i> <a href="#">News & Updates</a></li>-->
                    <!--        <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>-->
                    <!--        <li><i class="bx bx-chevron-right"></i> <a href="#">Line card</a></li>-->

                    <!--    </ul>-->
                    <!--</div>-->

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            JP House, 16/F,<br>
                            Samrat Silk Mills Compound,<br>
                            LBS Marg, Vikhroli (W),<br>
                            Mumbai: 400079<br><br>
                            <strong><i class="fa fa-phone-volume"></i></strong> +91-22-61110222<br>
                            <strong><i class="bi bi-envelope-fill"></i></strong> info@jpedindia.com<br>
                        </p>

                    </div>

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>About J.P. Electronic devices</h3>
                        <p>JP Electronic Devices (JPED) specializes in marketing & distribution of Electronic Components
                            from leading semiconductor manufacturers.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copyright">
                            &copy; Copyright <strong><span>J.P. ELectronic Devices</span></strong>. All Rights Reserved
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="credits">

                            Designed by <a href="https://devicedisk.com/">DeviceDisk</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="privacy-links">
                            <a href="#">Terms of service</a>
                            <a href="#">Privacy policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
