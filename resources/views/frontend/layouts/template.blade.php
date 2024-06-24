<!DOCTYPE html>

<html lang="en">



<head>

    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="Portofolio" name="description">

    <meta content="Arvita Agus Kurniasari" name="keywords">

    <meta content="ApikaCoding" name="author">



    <title>Arvita Agus Kurniasari</title>



    <!-- Fav icon -->

    <link href="{{ asset('frontend/assets/images/logo/favicon.png') }}" rel="shortcut icon">

    <!-- Font Family-->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!--bootstrap css-->

    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!-- color css -->

    <link href="{{ asset('frontend/assets/css/color-8.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('frontend/assets/css/keyframes.css') }}" rel="stylesheet" type="text/css">

    <!--owl carousel css-->

    <link href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Icons -->

    <link href="{{ asset('frontend/assets/css/fontawesome.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('frontend/assets/css/themify.css') }}" rel="stylesheet" type="text/css">



    <!-- flat Icons -->

    <link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">

    <!--magnific popup css-->

    <link href="{{ asset('frontend/assets/css/magnific-popup.css') }}" rel="stylesheet">

    @stack('content-css')

</head>



<body class="">

    <!--loader start-->

    <div class="loader-wrapper">

        <div class="loader">

            <div></div>

            <div></div>

            <div></div>

            <div></div>

            <div></div>

            <div></div>

            <div></div>

            <div></div>

            <div></div>

        </div>

    </div>

    <!--loader end-->



    @include('frontend/layouts.navbar')

    <!-- header section Start-->

    <section class="saas1 header" id="home">

        <div class="saas1-header bg header8-content">

            <div class="container">

                <div class="row">

                    <div class="col-md-7">

                        <div class="center-text">

                            <div>

                                <div class="header-text">

                                    <div class="d-flex">

                                        <h1><span class="theme-color">H</span>i, <span class="theme-color">I</span>'m <span class="theme-color">A</span>rvita, <span class="theme-color">a </span> <span class="theme-color"> <br>L</span>ecture <span class="theme-color">f</span>rom <span class="theme-color">S</span>tate <span class="theme-color">P</span>olytechnic <span class="theme-color">o</span>f <span class="theme-color">J</span>ember.</h1>

                                        <div class="center-content slider-logo">

                                            <img alt="" class="img-fluid" src="{{ asset('frontend/assets/images/saas1/slider-logo.png') }}">

                                        </div>

                                    </div>

                                </div>

                                <div class="header-sub-text">

                                    <h3 class="text-white">Welcome back to my <span> Website</span></h3>

                                </div>

                                <div class="link-horizontal">

                                    <ul>

                                        <li>

                                            <a class="btn btn-default primary-btn transparent" href="https://www.youtube.com/channel/UCU5lYacwXkUkYaX6AZ1WnGQ?app=desktop">watch youtube<img alt="video-icon" class="m-l-5" src="{{ asset('frontend/assets/images/saas1/video-icon.png') }}"></a>

                                        </li>

                                        <li>

                                            <a class="btn btn-default primary-btn transparent">Got to Course</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div>

                        <div class="center-text slider-banner">

                            <div class="owl-carousel owl-theme overflow-hidden slider-1">

                                <div class="item">

                                    <img alt="slid-banner" src="{{ asset('frontend/assets/images/saas1/arvita.png') }}">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <img alt="" class="img-fluid set-abs background" src="{{ asset('frontend/assets/images/saas1/background2.png') }}">

        <img alt="" class="img-fluid set-abs dot" src="{{ asset('frontend/assets/images/saas1/dot.png') }}">

    </section>

    <!-- header section end-->



    @yield('content')

    <!--copyright start-->

    <div class="saas1 copyright">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <div class="link-horizontal center-text">

                        <ul>

                            <li class="footer-social-list">

                                <a href="https://www.facebook.com/people/Arvita-Agus-Kurniasari/100013335574700/" target="_blank"><i aria-hidden="true" class="fa fa-facebook"></i></a>

                            </li>

                            <li class="footer-social-list">

                                <a href="https://www.instagram.com/arvita88/" target="_blank"><i aria-hidden="true" class="fa fa-instagram"></i></a>

                            </li>

                            <li class="footer-social-list">

                                <a href="https://www.youtube.com/channel/UCU5lYacwXkUkYaX6AZ1WnGQ?app=desktop" target="_blank"><i aria-hidden="true" class="fa fa-youtube"></i></a>

                            </li>

                            <li class="footer-social-list">

                                <a href="mailto:arvita@polije.ac.id" target="_blank"><i aria-hidden="true" class="fa fa-envelope"></i></a>

                            </li>

                        </ul>

                    </div>

                </div>

                <div class="col-sm-6">

                    <div>

                        <h6 class="copyright-text text-white text-right op-text">Copyright ©<?php echo date("Y"); ?> by <i aria-hidden="true" class="fa fa-heart"></i>

                            <a href="https://www.arvitaagusk.com/" class="copyright-text text-white text-right op-text" >ApikaCoding</a>

                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--copyright end-->



    <!-- Tap to top -->

    <div class="tap-top">

        <div>

            <i aria-hidden="true" class="fa fa-angle-up"></i>

        </div>

    </div>

    <!-- Tap to top end -->



    <!-- latest jquery-->

    <script src="{{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- popper js-->

    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>

    <!-- Bootstrap js-->

    <script src="{{ asset('frontend/assets/js/bootstrap.js') }}"></script>

    <!--  costamizer option -->

    <!--magnific popup js-->

    <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>

    <!--owl js-->

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>

    <!--AOS js-->

    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>

    <!-- script js-->

    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/script8.js') }}"></script>

    @stack('content-js')

</body>



</html>