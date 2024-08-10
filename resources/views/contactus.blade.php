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
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>/</span></li>
                        <li>contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Details Start-->
        <section class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-details__inner">
                            <div class="contact-details__map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.7846651634377!2d31.325603223658867!3d30.071706317277062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e4774395555%3A0xece825782e1281bf!2zNTIg2KfZhNi32YrYsdin2YbYjCDYp9mE2KrZiNmB2YrZgtiMINmF2K_ZitmG2Kkg2YbYtdix2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCsIDQ0NTEwMTU!5e0!3m2!1sar!2seg!4v1723121870207!5m2!1sar!2seg" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="contact-details__content">
                                <div class="contact-details__title-box">
                                    <h4 class="contact-details__title">Get in Touch</h4>
                                    <p class="contact-details__text">Cairo</p>
                                </div>
                                <p class="contact-details__address">52 Eltayran ST. , Cairo, Egypt</p>
                                <div class="contact-details__contact-info">
                                    <div class="contact-details__contact-icon">
                                        <span class="icon-phone1"></span>
                                    </div>
                                    <h4 class="contact-details__contact-number-email">
                                        <a href="tel:201116989222" class="contact-details__contact-number">+20  11 - 1698 - 9222</a>
                                        <a href="mailto: info@ges-adv.com"
                                            class="contact-details__contact-email"> info@ges-adv.com</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-details__inner">
                            <div class="contact-details__map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14845.770529434598!2d39.27188838366066!3d21.52954109460381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d26c42c58269%3A0x11017812a2dfd1a4!2z2KfZhNmG2K7ZitmE2Iwg2KzYr9ipINin2YTYs9i52YjYr9mK2Kk!5e0!3m2!1sar!2seg!4v1723122095626!5m2!1sar!2seg" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
                            <div class="contact-details__content">
                                <div class="contact-details__title-box">
                                    <h4 class="contact-details__title">Get in Touch</h4>
                                    <p class="contact-details__text">Jeddah</p>
                                </div>
                                <p class="contact-details__address">Al Nakhil ,Jeddah, Kingdom of Saudi Arabia</p>
                                <div class="contact-details__contact-info">
                                    <div class="contact-details__contact-icon">
                                        <span class="icon-phone1"></span>
                                    </div>
                                    <h4 class="contact-details__contact-number-email">
                                        <a href="tel:201116989222" class="contact-details__contact-number">+20  11 - 1698 - 9222</a>
                                        <a href="mailto: info@ges-adv.com"
                                            class="contact-details__contact-email"> info@ges-adv.com</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Contact with us</span>
                    <h2 class="section-title__title">Write a Message</h2>
                    @if(Session::has('sucsess'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('sucsess')}}
                        </div>
                    @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('fail')}}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="{{route("newContact")}}" method="POST"  class="comment-one__form contact-form-validated" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" value="{{old("name")}}" placeholder="Full name" name="name">
                                            <span class="text-danger">@error('name') {{$message}} @enderror </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" value="{{old("email")}}" placeholder="Email address" name="email">
                                            <span class="text-danger">@error('email') {{$message}} @enderror </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" value="{{old("phone")}}" placeholder="Phone" name="phone">
                                            <span class="text-danger">@error('phone') {{$message}} @enderror </span>

                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" value="{{old("subject")}}" placeholder="Subject" name="subject">
                                            <span class="text-danger">@error('subject') {{$message}} @enderror </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Message">@if( old("message") !== ""){{old("message")}}@endif</textarea>
                                        </div>
                                        <span class="text-danger">@error('message') {{$message}} @enderror </span>
                                        <div class="btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

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
                                <a href="{{route('about')}}" class="thm-btn cta-one__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection