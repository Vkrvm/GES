@extends('layout.master')
@section('content')
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide">
                    <div class="image-layer lazy-background" data-bg="{{ asset('images/backgrounds/main-slider-1-1.webp') }}"></div>
                </div>
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>
                                    Where <br />
                                    Strategy <br />
                                    Meets <br>
                                    Solutions
                                </h2>
                                <a href="{{ route('about') }}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide">
                    <div class="image-layer lazy-background" data-bg="{{ asset('images/backgrounds/main-slider-1-2.webp') }}"></div>
                </div>
                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>
                                    Where <br />
                                    Strategy <br />
                                    Meets <br>
                                    Solutions
                                </h2>
                                <a href="{{ route('about') }}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide">
                    <div class="image-layer lazy-background" data-bg="{{ asset('images/backgrounds/main-slider-1-3.webp') }}"></div>
                </div>

                <!-- /.image-layer -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="main-slider__content">
                                <h2>
                                    Where <br />
                                    Strategy <br />
                                    Meets <br>
                                    Solutions
                                </h2>
                                <a href="{{ route('about') }}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
<!--Main Slider End-->

<!--Welcome One Start-->
<section class="welcome-one">
    <div class="welcome-one-shape" style="
            background-image: url({{ asset('images/shapes/welcome-one-shape.png') }});
          ">
    </div>
    <div class="container">
        <div class="welcome-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__top-left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">welcome to our
                                agency</span>
                            <h2 class="section-title__title">
                                Secure & Safe Advices for your Small & Big Businesses
                            </h2>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-6 col-lg-6">
                    <div class="welcome-one__top-right">
                        <div class="welcome-one__video-link wow fadeInRight" data-wow-delay="200ms" style="
                      background-image: url({{asset(" images/backgrounds/welcome-one-video-link-bg.jpg")}}); ">
                  <a href=" https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                            <div class="welcome-one__video-icon">
                                <span class="fas fa-play"></span>
                            </div>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="welcome-one__bottom">
            <ul class="list-unstyled welcome-one__feature">
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="100ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title">
                            <a>Advertising</a>
                        </h3>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span><img src="{{ asset('images/icon/chart-line-up (1).png') }}" alt="line chart"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="100ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title">
                            <a>HR Solutions</a>
                        </h3>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-report"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="200ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title">
                            <a>IT Solutions</a>
                        </h3>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-data-analytics"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
                <li class="welcome-one__feature-single wow fadeInUp" data-wow-delay="300ms">
                    <div class="welcome-one__feature-content">
                        <h3 class="welcome-one__feature-title">
                            <a>Finance Solutions</a>
                        </h3>
                    </div>
                    <div class="welcome-one__feature-icon">
                        <span class="icon-wealth"></span>
                    </div>
                    <div class="welcome-one__feature-count"></div>
                </li>
            </ul>
        </div>
        <div class="welcome-one__find-solutions">
            <p class="welcome-one__find-solutions-text">
                Advertising & Consulting Services Built Specifically for your
                Business. <a href="{{ route('services') }}">Find Your Solution</a>
            </p>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Work Together Start-->
<section class="work-together">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="work-together__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="work-together__img-box">
                        <div class="work-together-shape-1">
                            <img src="{{ asset('images/shapes/work-together-shape-1.png') }}" alt />
                        </div>
                        <div class="work-together__img-1">
                            <img src="{{ asset('images/resources/Post-6.png') }}" width="400px" alt />
                            <div class="work-together__img-2">
                                {{-- <img src="{{asset(" images/resources/work-together-img-2.jpg")}}" alt /> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="work-together__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">get to know us</span>
                        <h2 class="section-title__title">
                            Work Together for your Business
                        </h2>
                    </div>
                    <p class="work-together__right-text">
                        GES provides an extensive array of services across
                        various domains
                    </p>
                    <ul class="list-unstyled work-together__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>Advertising</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>HR Solutions</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>IT Solutions</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="text">
                                <p>Finance Solution</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Work Together End-->

<!--Case One Start-->
>
<!--Case One End-->

<!--Benefits One Start-->
<section class="benefits-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="benefits-one__left">
                    <div class="section-title text-left">
                        <ul class="list-unstyled benefits-one__points">
                            <li>
                                <div class="icon">
                                    <span><img src="{{ asset('images/icon/vision.png') }}" alt="" width="64"
                                            height="64"></span>
                                    <p>Vision</p>
                                </div>
                                <div class="text">
                                    <p>
                                        We aspire to be a leading force in the Middle Eastern
                                        market, renowned for our commitment to excellence,
                                        innovation, and customer satisfaction. We aim to
                                        cultivate a culture of collaboration and continuous
                                        improvement.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span><img src="{{ asset('images/icon/mission.png') }}" alt="" width="64"
                                            height="64"></span>
                                    <p>Mission</p>
                                </div>
                                <div class="text">
                                    <p>
                                        Our mission is to be the premier partner for businesses
                                        seeking comprehensive and innovative solutions. We
                                        drive success through strategic advertising, HR
                                        expertise, advanced IT solutions, and dependable
                                        financial services.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-verification"></span>
                                    <p>Values</p>
                                </div>
                                <div class="text">
                                    <p>
                                        <b>Integrity:</b> We adhere to the highest ethical standards in
                                        all our operations. <br>
                                        <b>Customer Focus:</b> We are dedicated to understanding
                                        our clients' needs and delivering solutions that surpass
                                        expectations. <br>
                                        <b>Innovation:</b> We adopt new technologies and
                                        methodologies to offer cutting-edge solutions. <br>
                                        <b>Collaboration:</b> We promote teamwork, open
                                        communication, and a culture of mutual success. <br>
                                        <b>Excellence:</b> We pursue excellence in every aspect of
                                        our work, continuously seeking improvement and
                                        refinement.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--Benefits One End-->

<!--Free Consultation Start-->
<section class="free-consultation">
    <div class="container">
        <div class="free-consultation__inner wow fadeInUp" data-wow-delay="300ms">
            <div class="free-consultation__left">
                <h3 class="free-consultation__content">
                    Get your <span>FREE</span> <br />
                    business consultation
                </h3>
                <div class="free-consultation__icon">
                    <span class="icon-phone-call"></span>
                </div>
            </div>
            <div class="free-consultation__right">
                <h4 class="free-consultation__contact-info">
                    <a href="tel:201116989222" class="free-consultation__contact-number">+20 11 - 1698 - 9222</a>
                    <a href="mailto: info@ges-adv.com" class="free-consultation__contact-email"> info@ges-adv.com</a>
                </h4>
            </div>
        </div>
    </div>
</section>
<!--Free Consultation End-->

<!--Our Mission Start-->
<section class="our-mission">
    <div class="our-mission-bg-box">
        <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="
              background-image: url({{ asset('images/backgrounds/our-mission-bg.jpg') }});
            ">
        </div>
    </div>
    <div class="our-mission-shape-1 shapemover2"></div>
    <div class="our-mission-shape-2 shapemover2"></div>
    <div class="our-mission-shape-3 shapemover2"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="our-mission__inner">
                    <h2 class="our-mission__title">
                        Mission is to Protect <br />
                        your Businesses & <br />
                        Much More
                    </h2>
                    <div class="d-flex forms-buttons">
                        <a href="{{ route('client') }}" class="thm-btn our-mission__btn">NEW
                            CLINET</a>
                        <a href="{{ route('employee') }}" class="thm-btn our-mission__btn">NEW
                            EMPLOYEE</a>
                        <a href="{{ route('supplier') }}" class="thm-btn our-mission__btn">NEW
                            SUPPLIER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Mission End-->

<!--Team One Start-->

<!--Team One End-->

<!--Testimonial One Start-->

<!--Testimonial One End-->

<!--Trusted One Start-->
<section class="trusted-one">
    <div class="container">
        <div class="trusted-one__inner">
            <div class="trusted-one__left">
                <h3 class="trusted-one__content">
                    Trusted Commercial Advertising & Consultant Agency
                </h3>
            </div>
            <div class="trusted-one__right">
                <ul class="list-unstyled trusted-one__content-box row">
                    <li class="trusted one__single wow fadeInLeft col-xl-6 m-0" data-wow-delay="100ms">
                        <div class="trusted-one__icon">
                            <span><img src="{{ asset('images/icon/chart-line-up (1).png') }}" alt="line chart"
                                    width="23" height="23"></span>
                        </div>
                        <h3 class="trusted-one__title">
                            <a href="{{ route('advertising') }}">Advertising</a>
                        </h3>
                        <p class="trusted-one__text">Morbi nec finibus misd</p>
                        <h3 class="odometer" data-count="123">0</h3>
                    </li>
                    <li class="trusted one__single wow fadeInLeft col-xl-6 m-0" data-wow-delay="200ms">
                        <div class="trusted-one__icon">
                            <span class="icon-report"></span>
                        </div>
                        <h3 class="trusted-one__title">
                            <a href="{{ route('hrSolutions') }}">HR Solutions</a>
                        </h3>
                        <p class="trusted-one__text">Morbi nec finibus misd</p>
                        <h3 class="odometer" data-count="84">0</h3>
                    </li>
                    <li class="trusted one__single wow fadeInLeft col-xl-6 m-0" data-wow-delay="300ms">
                        <div class="trusted-one__icon">
                            <span class="icon-team-leader"></span>
                        </div>
                        <h3 class="trusted-one__title">
                            <a href="{{ route('itSolutions') }}">IT Solution</a>
                        </h3>
                        <p class="trusted-one__text">Morbi nec finibus misd</p>
                        <h3 class="odometer" data-count="76">0</h3>
                    </li>
                    <li class="trusted one__single wow fadeInLeft col-xl-6 m-0" data-wow-delay="100ms">
                        <div class="trusted-one__icon">
                            <span class="icon-wealth"></span>
                        </div>
                        <h3 class="trusted-one__title">
                            <a href="{{ route('financeSolutions') }}">Finance Solutions</a>
                        </h3>
                        <p class="trusted-one__text">Morbi nec finibus misd</p>
                        <h3 class="odometer" data-count="12">0</h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="cta-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__inner-content">
                        <div class="cta-one-shape-1 float-bob-x"></div>
                        <div class="cta-one-shape-2 float-bob-x-2"></div>
                        <h3 class="cta-one__title">
                            We are dedicated to supporting your business's
                            success.
                            <br>
                            Reach out to us today to discuss your needs
                            and discover how GES can be your partner in achieving
                            your goals.
                        </h3>
                        <a href="{{ route('about') }}" class="thm-btn cta-one__btn" style="width: 430px;">Discover
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
@endsection
