@extends('layout.master')
@section('content')
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{asset("/images/backgrounds/page-header-bg.jpg")}})">
            </div>
            <div class="page-header-shape-1 float-bob-x-6"></div>
            <div class="page-header-shape-2 float-bob-x-7"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>about</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Work Together Two Start-->
        <section class="work-together-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together-two__left wow slideInLeft" data-wow-delay="100ms"
                        data-wow-duration="2500ms">
                            <div class="work-together-two__img">
                                <img src="{{asset("/images/resources/work-together-two-img-1.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="work-together-tow__right">
                            <div class="section-title text-left m-0">
                                <span class="section-title__tagline">get to know us</span>
                                <!-- <h2 class="section-title__title">Work Together for your Business</h2> -->
                            </div>
                            <!-- <div class="work-together-tow__content">
                                <div class="work-together-tow__icon">
                                    <span class="icon-recruit"></span>
                                </div>
                                <h3 class="work-together-tow__text">Suspendisse vel iaculis leo. Curabitur scelerisque mi porta justo nulla lonm ise fermentum porta.</h3>
                            </div> -->
                            <p class="work-together-tow__text-2">GES Advertising & Corporate Solutions was established
                                in 2023 with the aim of transforming the advertising
                                landscape in the Middle East. We are a leading provider
                                of corporate solutions in Egypt and Saudi Arabia,
                                delivering a comprehensive range of services designed
                                to empower businesses and foster growth.

                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Work Together Two End-->

        <!--Free Consultation Start-->
        <section class="free-consultation">
            <div class="container">
                <div class="free-consultation__inner wow fadeInUp" data-wow-delay="300ms">
                    <div class="free-consultation__left">
                        <h3 class="free-consultation__content">Get your <span>FREE</span> <br> business consultation</h3>
                        <div class="free-consultation__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                    </div>
                    <div class="free-consultation__right">
                        <h4 class="free-consultation__contact-info">
                            <a href="tel:201116989222" class="free-consultation__contact-number">+20  11 - 1698 - 9222</a>
                            <a href="mailto: info@ges-adv.com" class="free-consultation__contact-email"> info@ges-adv.com</a>
                        </h4>
                    </div>
                </div>
            </div>
        </section>
        <!--Free Consultation End-->

        <!--Quality Work Start-->

         <!--Quality Work End-->

         <!--Our Mission Two Start-->
        <section class="our-mission-two our-mission-three" style="margin-bottom: 50px;">
            <div class="our-mission-two-bg-box">
                <div class="our-mission-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{asset("/images/backgrounds/our-mission-bg.jpg")}});"></div>
            </div>
            <div class="our-mission-shape-1 shapemover2"></div>
            <div class="our-mission-shape-2 shapemover2"></div>
            <div class="our-mission-shape-3 shapemover2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="our-mission-two__left">
                            <h2 class="our-mission-two__title">Mission is to Protect <br> your Businesses &  Much More</h2>
                            <a href="{{route('about')}}" class="thm-btn our-mission-two__btn">Discover More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="our-mission-two__right">
                            <div class="our-mission-two__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="our-mission-two__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                                <h3 class="our-mission-two__video-text">Watch video</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Our Mission Two End-->



        <!--Testimonial One Start-->

        <!--Testimonial One End-->

        <!--Brand One Start-->

        <!--Brand One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__inner-content">
                                <div class="cta-one-shape-1 float-bob-x"></div>
                                <div class="cta-one-shape-2 float-bob-x-2"></div>
                                <h3 class="cta-one__title">We’re delivering the best <br> customer experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection
