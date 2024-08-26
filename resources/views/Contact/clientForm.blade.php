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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
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
                            <form action="{{route("newClient")}}" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate">
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
                                            <input type="text" value="{{old("phone")}}" placeholder="Phone" name="phone">
                                            <span class="text-danger">@error('phone') {{$message}} @enderror </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <input type="email" value="{{old("email")}}" placeholder="Email address" name="email">
                                            <span class="text-danger">@error('email') {{$message}} @enderror </span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="region">
                                                <option value="" disabled selected>Select region</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('region') {{$message}} @enderror </span>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="inquiry">
                                                <option value="" disabled selected>Select Inquiry</option>
                                                <option value="Advertising">Advertising</option>
                                                <option value="HR Solutions">HR Solutions</option>
                                                <option value="IT Solutions">IT Solutions</option>
                                                <option value="Finance Solutions">Finance Solutions</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">@error('inquiry') {{$message}} @enderror </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box text-message-box">
                                            <textarea name="message" placeholder="Write a Message">@if( old("message") !== ""){{old("message")}}@endif</textarea>
                                            <span class="text-danger">@error('message') {{$message}} @enderror </span>
                                        </div>
                                        <div class="btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn">Send a
                                                message</button>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection
