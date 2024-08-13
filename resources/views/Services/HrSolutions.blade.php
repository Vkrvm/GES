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
                        <li>HR-Solution</li>
                    </ul>
                    <h2>HR-Solution</h2>
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
									<li class="current"><a href="{{route("hrSolutions")}}">HR Solutions<span class="icon-right-arrow"></span></a></li>
									<li><a href="{{route("itSolutions")}}">IT Solutions<span class="icon-right-arrow"></span></a></li>
									<li><a href="{{route("financeSolutions")}}">Finance Solutions<span class="icon-right-arrow"></span></a></li>
								</ul>
							</div>
							<div class="service-details__need-help">
                                <div class="service-details__need-help-shape-1 float-bob-x-6"></div>
                                <div class="service-details__need-help-shape-2 float-bob-x-7"></div>
								<h2 class="service-details__need-help-title">Contact with <br> us for any <br> advice</h2>
								<div class="service-details__need-help-icon">
									<span class="icon-phone-call"></span>
								</div>
								<div class="service-details__need-help-contact">
									<p>Need help? Talk to an expert</p>
									<a href="tel:201116989222">+20  11 - 1698 - 9222</a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="service-details__right">
                            <div class="service-details__img">
                                <img src="{{asset("images/services/services-1-2.png")}}" style="width: 400px !important;" alt="">
                            </div>
                            <div class="service-details__content">
                                <div class="service-details__title-box">
                                    <div class="service-details__title-icon">
                                        <span class="icon-report"></span>
                                    </div>
                                    <h3 class="service-details__title">HR Solutions</h3>
                                </div>
                                <ul class="custom-list">
                                    <li>Training and consulting</li>
                                    <li>HR outsourcing</li>
                                    <li>Recruitment</li>
                                    <li>Employee development programs</li>
                                    <li>Payroll</li>
                                    <li>All workflow forms</li>
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
