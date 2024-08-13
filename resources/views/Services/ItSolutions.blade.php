@extends('layout.master')
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{asset("images/backgrounds/page-header-bg.jpg")}})">
            </div>
            <div class="page-header-shape-1 float-bob-x-6"></div>
            <div class="page-header-shape-2 float-bob-x-7"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                       <li><a href="{{route("home")}}">Home</a></li>
                        <li><span>/</span></li>
                        <li><a href="{{route("services")}}">Services</a></li>
                        <li><span>/</span></li>
                        <li>IT Solutions</li>
                    </ul>
                    <h2>IT Solutions</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__sidebar">
                            <div class="service-details__sidebar-service">
                                <ul class="service-details__sidebar-service-list list-unstyled">
                                    <li><a href="{{route("advertising")}}">Advertising<span class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{route("hrSolutions")}}">HR Solutions<span
                                                class="icon-right-arrow"></span></a></li>
                                    <li class="current"><a href="{{route("itSolutions")}}">IT Solutions<span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{route("financeSolutions")}}">Finance Solutions<span
                                                class="icon-right-arrow"></span></a></li>
                                </ul>
                            </div>
                            <div class="service-details__need-help">
                                <div class="service-details__need-help-shape-1 float-bob-x-6"></div>
                                <div class="service-details__need-help-shape-2 float-bob-x-7"></div>
                                <h2 class="service-details__need-help-title">Contact with <br> us for any <br> advice
                                </h2>
                                <div class="service-details__need-help-icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="service-details__need-help-contact">
                                    <p>Need help? Talk to an expert</p>
                                    <a href="tel:201116989222">+20 11 - 1698 - 9222</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="service-details__img">
                                <img src="{{asset("images/services/services-1-3.png")}}" alt="">
                            </div>
                            <div class="service-details__content">
                                <div class="service-details__title-box">
                                    <div class="service-details__title-icon">
                                        <span class="icon-data-analytics"></span>
                                    </div>
                                    <h3 class="service-details__title">IT Solutions</h3>
                                </div>
                                <ul class="custom-list">
                                    <li>Consult with company departments on IT needs</li>
                                    <li>Analyze IT infrastructure and requirements</li>
                                    <li>Plan and schedule IT projects</li>
                                    <li>Administer Windows servers and troubleshoot issues</li>
                                    <li>Network Engineering: Configure cores and switches, troubleshoot network software</li>
                                    <li>Configure firewalls (Sophos, FortiGate) and manage cybersecurity</li>
                                    <li>Wi-Fi solutions</li>
                                    <li>Configure VOIP phones</li>
                                    <li>Set up CCTV IP cameras</li>
                                    <li>Web hosting and email solutions (Microsoft 365, Google Workspace)</li>
                                    <li>Certified Microsoft 365 Administrator Expert</li>
                                    <li>Certified Microsoft Identity and Access Administrator Associate</li>
                                    <li>Web development</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->

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
                                <a href="{{route("about")}}" class="thm-btn cta-one__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection
