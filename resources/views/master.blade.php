<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Presensita - Home</title>
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <style>
        ol[type="I"] {
            list-style-type: upper-roman;
            /* Angka Romawi besar */
        }

        ol[type="1"] {
            list-style-type: decimal;
            /* Angka biasa */
        }

        ol[type="a"] {
            list-style-type: lower-alpha;
            /* Huruf kecil */
        }

        li {
            padding-left: 20px;
            /* Menambahkan ruang ke dalam */
        }
    </style>
</head>

<body>
    <div class="main">
        <!-- ***** Preloader Start ***** -->
        <div class="preloader-main">
            <div class="preloader-wapper">
                <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                    <defs>
                        <radialGradient id="gradient" cx="50%" cy="50%" r="50%" fx="50%"
                            fy="50%">
                            <stop offset="0%" style="stop-color: #ff5733; stop-opacity: 1" />
                            <stop offset="100%" style="stop-color: #c70039; stop-opacity: 1" />
                        </radialGradient>
                        <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix"
                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                        </filter>
                    </defs>
                    <g filter="url(#goo)">
                        <circle class="dot" cx="50" cy="50" r="25" fill="url(#gradient)" />
                        <circle class="dot" cx="50" cy="50" r="25" fill="url(#gradient)" />
                    </g>
                </svg>
                <div>
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- ***** Header Start ***** -->
        <header id="header">
            <!-- Navbar -->

            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar gameon-navbar navbar-expand">
                <div class="container header">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Brand Logo" />
                    </a>

                    <div class="ms-auto"></div>

                    <!-- Navbar Nav -->
                    <ul class="navbar-nav items mx-auto">
                        <li class="nav-item dropdown">
                            <a href="/" class="nav-link">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-anchor" href="#features">Features</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link smooth-anchor" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-anchor" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link smooth-anchor" href="/panduan">Panduan</a>
                        </li>
                    </ul>


                </div>
            </nav>
        </header>
        <!-- ***** Header End ***** -->

        <!-- ***** Hero Section Start ***** -->
      @yield('body')

    </div>
    <br /><br /><br />

    <!-- Shape Bottom -->

    </section>



    <!--====== Height Emulator Area Start ======-->
    <div class="height-emulator d-none d-lg-block"></div>
    <!--====== Height Emulator Area End ======-->

    <!--====== Footer Area Start ======-->

    <footer class="footer-area  p-0">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row items">
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Logo -->
                            <a class="navbar-brand" href="/">
                                <img class="logo" src="assets/img/logo/logo.png" alt="" />
                            </a>
                            <p class="slug mt-3">
                                IT Solutions And Business Partner For Smart Your Innovation
                            </p>

                            <hr />

                            <!-- Social Icons -->
                            <div class="social-icons d-flex mt-3">
                                <a class="icon has-overlay overlay-gradient" href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a class="icon has-overlay overlay-gradient" href="#">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a class="icon has-overlay overlay-gradient" href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a class="icon has-overlay overlay-gradient" href="#">
                                    <i class="fa-brands fa-github"></i>
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <h4 class="footer-title mt-0">Useful Links</h4>

                            <!-- Navigation -->
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <h4 class="footer-title mt-0">Product Help</h4>

                            <!-- Navigation -->
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#faq">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/privacy">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/syarat">Terms &amp; Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 item">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <h4 class="footer-title mt-0">Download</h4>

                            <!-- Download Button -->
                            <div class="button-group download-button">
                                <a
                                    href="https://play.google.com/store/apps/details?id=com.smartinovasi.presensita&hl=ln&gl=US">
                                    <img src="{{ asset('assets/img/content/google-play-black.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright Area -->
                        <div
                            class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center text-center py-4">
                            <span>&copy; 2025 Presensita | All rights reserved.</span>
                            <span>Made with <i class="fa-solid fa-heart"></i> By
                                <a href="https://github.com/barcodew" target="_blank">Barcodew</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->



    <!--====== Modal Responsive Menu Area Start ======-->
    <div id="menu" class="modal fade p-0">
        <div class="modal-dialog modal-dialog-slideout">
            <div class="modal-content full">
                <div class="modal-header" data-bs-dismiss="modal">
                    Menu <i class="icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Responsive Menu Area End ======-->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scroll-to-top" class="scroll-to-top">
        <a href="#home" class="smooth-anchor">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>
    <!--====== Scroll To Top Area End ======-->
    </div>
    <!-- ***** All jQuery Plugins ***** -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Plugins js -->
    <script src="{{ asset('assets/js/vendor/slider.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/gallery.min.js') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
