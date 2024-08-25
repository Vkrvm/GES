<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GES</title>
    <meta name="keywords"
        content="HR Consulting, HR Solutions, Recruitment Advisor, IT Solutions, IT Consulting, Finance Advisor, Finance Guidance, Advertising, BTL Advertising, Events, Exhibitions, Giveaways, Indoor Printing, Outdoor Printing">

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}" />
    <meta name="description"
        content="Navigating business challenges is easier with a trusted advisor
                    by your side.
                    Our expert management consultants at GES provide ongoing support and strategic insights to help your business thrive.
                    GES offers integrated services in Advertising, HR,Finance, and IT, providing a seamless experience that saves you time and enhances efficiency." />

    <link rel="preload" href="{{ asset('images/backgrounds/main-slider-1-1.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/backgrounds/main-slider-1-2.webp') }}" as="image" type="image/webp">
    <link rel="preload" href="{{ asset('images/backgrounds/main-slider-1-3.webp') }}" as="image" type="image/webp">





    <link rel="preload" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/animate/animate.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/animate/custom-animate.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/fontawesome/css/all.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/jarallax/jarallax.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/nouislider/nouislider.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/nouislider/nouislider.pips.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/odometer/odometer.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/swiper/swiper.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/oslim-icons/style.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/tiny-slider/tiny-slider.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/reey-font/stylesheet.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/bxslider/jquery.bxslider.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/vegas/vegas.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('vendors/timepicker/timePicker.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <!-- template styles -->
    <link rel="preload" href="{{ asset('css/oslim.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/oslim-responsive.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">




    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <!-- Inline Critical CSS -->
    <style>
        @font-face {
            font-family: 'Catamaran';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Catamaran Regular'), local('Catamaran-Regular'),
                url(https://fonts.gstatic.com/s/catamaran/v14/o-0MIpQmMCZ_Sb_ztY-FFO4iYw.woff2) format('woff2');
            unicode-range: U+000-5FF;
            /* Latin */
        }

        body {
            font-family: 'Catamaran', sans-serif;
            font-weight: 400;
        }
    </style>

    <!-- Asynchronously Load Google Fonts -->
    <script>
        var link = document.createElement('link');
        link.href =
            'https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap';
        link.rel = 'stylesheet';
        link.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(link);
    </script>

    <!-- Defer Non-Critical CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap">
    </noscript>

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/oslim-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/oslim.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/oslim-responsive.css') }}" />
    <style>
        p.trusted-one__text {
            display: none;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" src="{{ asset('images/loader.webp') }}" alt="Loader Image" width="300"
            height="169" />
    </div>
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="index-2.html"><img src="{{ asset('images/logo/Logo GES-01.webp') }}"
                                    height="180" width="320" alt="logo" loading="lazy" /></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler" aria-label="Sidebar-btn"><i
                                    class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="{{ Route::is('home') ? 'current' : '' }}"><a
                                        href="{{ route('home') }}">Home</a></li>
                                <li class="{{ Route::is('about') ? 'current' : '' }}"><a
                                        href="{{ route('about') }}">About</a></li>
                                <li class="{{ Route::is('services') ? 'current' : '' }}"><a
                                        href="{{ route('services') }}">Services</a></li>
                                <li class="{{ Route::is('contactus') ? 'current' : '' }}"><a
                                        href="{{ route('contactus') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Need help? Talk to an expert</p>
                                <h5><a href="tel:201116989222">+20 11 - 1698 - 9222</a></h5>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__search-cat">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"
                                aria-label="Search"></a>
                        </div>

                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>
        <div class="containter">
            @yield('content')
        </div>
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="site-footer-shape-1"
                    style="
                background-image: url({{ asset('images/shapes/site-footer-shape-1.png') }});
                ">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index-2.html"><img src="{{ asset('images/logo/Logo GES-01.webp') }}"
                                        height="100" width="178" loading="lazy" alt="Footer_logo" /></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">
                                        Great Experience for Building Customers & Businesses
                                    </p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="https://www.facebook.com/profile.php?id=61563149639231&mibextid=ZbWKwL"><i
                                            class="fab fa-facebook"></i></a>
                                    <a
                                        href="https://www.instagram.com/ges_advertising_agency?igsh=MXI3cXVrZG56dGQ4NQ=="><i
                                            class="fab fa-instagram"></i></a>
                                    <a
                                        href="https://www.linkedin.com/company/ges-for-advertising-and-corprate-solutions/"><i
                                            class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="footer-widget__explore-list list-unstyled clearfix">
                                    <li><a href="{{ route('about') }}" aria-label="About">About</a></li>
                                    <li><a href="{{ asset('attachment/GESProfile.pdf') }}" aria-label="Portfolio"
                                            download>Portfolio</a></li>
                                    <li><a href="{{ route('contactus') }}" aria-label="Contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__newsletter-box clearfix">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <p class="footer-widget__newsletter-text">
                                    Subsrcibe for our upcoming latest articles and resources
                                </p>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email" />
                                        <button type="submit" class="footer-widget__newsletter-btn"
                                            aria-label="Submit">
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">
                                    Cairo
                                </p>
                                <p class="footer-widget__contact-text">
                                    52 Eltayran ST. , Cairo, Egypt
                                </p>
                                <h4 class="footer-widget__contact-info">
                                    <a href="tel:201116989222" class="footer-widget__contact-number">+20 11 - 1698 -
                                        9222</a>
                                    <br>
                                    <a href="mailto: info@ges-adv.com" class="footer-widget__contact-email">
                                        info@ges-adv.com</a>
                                </h4>
                            </div>
                            <div class="footer-widget__column footer-widget__contact clearfix mt-5">
                                <p class="footer-widget__contact-text">
                                    Jeddah
                                </p>
                                <p class="footer-widget__contact-text">
                                    Al Nakhil ,Jeddah, Kingdom of Saudi Arabia
                                </p>
                                <h4 class="footer-widget__contact-info">
                                    <!-- <a href="tel:201116989222" class="footer-widget__contact-number">+20 11 - 1698 - 9222</a> -->
                                    <a href="mailto: info@ges-adv.com" aria-label="Email"
                                        class="footer-widget__contact-email">
                                        info@ges-adv.com</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">
                                    © Copyright 2024 by <a href="#">GES-ADV</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="{{ asset('images/logo/Logo GES-01.webp') }}"
                        height="180" width="320" alt="logo" loading="lazy" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto: info@ges-adv.com" aria-label="Email"> info@ges-adv.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:201116989222" aria-label="Phone">+20 11 - 1698 - 9222</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.facebook.com/profile.php?id=61563149639231&mibextid=ZbWKwL"
                        class="fab fa-facebook-square" aria-label="Facebook"></a>
                    <a href="https://www.instagram.com/ges_advertising_agency?igsh=MXI3cXVrZG56dGQ4NQ=="
                        class="fab fa-instagram" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/company/ges-for-advertising-and-corprate-solutions/"
                        class="fab fa-linkedin" aria-label="Linkedin"></a>
                </div>
                <!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search
                    here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendors/timepicker/timePicker.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('js/oslim.js') }}"></script>
</body>
