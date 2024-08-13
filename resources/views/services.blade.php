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
						<li>services</li>
					</ul>
					<h2>Our Services</h2>
				</div>
			</div>
		</section>
		<!--Page Header End-->

		<!--Services One Start-->
		<section class="services-one">

			<div class="container">
				<div class="row">
					<div class=" col-xl-3">
						<!--Services One Single-->
						<div class="services-one__single">
							<div class="services-one__img">
								<img src="{{asset("images/services/services-1-1.png")}}" alt="">
							</div>
							<div class="services-one__content">
								<div class="services-one__title-box">
									<div class="services-one__title-icon">
										<span><img src="{{asset("images/icon/chart-line-up (1).png")}}" alt="line chart"></span>
									</div>
									<h3 class="services-one__title"><a href="{{route("advertising")}}">Advertising</a></h3>
								</div>
								<div class="services-one__bottom">
									<a href="{{route("advertising")}}" class="services-one__read-more">Read More</a>
									<a href="{{route("advertising")}}" class="services-one__arrow"><span
											class="icon-right-arrow"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-xl-3">
						<!--Services One Single-->
						<div class="services-one__single">
							<div class="services-one__img">
								<img src="{{asset("images/services/services-1-2.png")}}" alt="">
							</div>
							<div class="services-one__content">
								<div class="services-one__title-box">
									<div class="services-one__title-icon">
										<span class="icon-report"></span>
									</div>
									<h3 class="services-one__title"><a href="{{route("hrSolutions")}}">HR Solutions</a></h3>
								</div>
								<div class="services-one__bottom">
									<a href="{{route("hrSolutions")}}" class="services-one__read-more">Read More</a>
									<a href="{{route("hrSolutions")}}" class="services-one__arrow"><span
											class="icon-right-arrow"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-xl-3">
						<!--Services One Single-->
						<div class="services-one__single">
							<div class="services-one__img">
								<img src="{{asset("images/services/services-1-3.png")}}" alt="">
							</div>
							<div class="services-one__content">
								<div class="services-one__title-box">
									<div class="services-one__title-icon">
										<span class="icon-data-analytics"></span>
									</div>
									<h3 class="services-one__title"><a href="{{route("itSolutions")}}">IT Solutions</a></h3>
								</div>
								<div class="services-one__bottom">
									<a href="{{route("itSolutions")}}" class="services-one__read-more">Read More</a>
									<a href="{{route("itSolutions")}}" class="services-one__arrow"><span
											class="icon-right-arrow"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-xl-3">
						<!--Services One Single-->
						<div class="services-one__single">
							<div class="services-one__img">
								<img src="{{asset("images/services/services-1-4.png")}}" alt="">
							</div>
							<div class="services-one__content">
								<div class="services-one__title-box">
									<div class="services-one__title-icon">
										<span class="icon-wealth"></span>
									</div>
									<h3 class="services-one__title"><a href="{{route("financeSolutions")}}">Finance Solutions</a></h3>
								</div>
								<div class="services-one__bottom">
									<a href="{{route("financeSolutions")}}" class="services-one__read-more">Read More</a>
									<a href="{{route("financeSolutions")}}" class="services-one__arrow"><span
											class="icon-right-arrow"></span></a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="swiper-pagination swiper-pagination-styled" id="service-carousel-pagination"></div>
			</div>

		</section>
		<!--Services One End-->

@endsection
