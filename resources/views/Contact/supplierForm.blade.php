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
                        <li><a href="index-2.html">Home</a></li>
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
                            <form action="https://oslim-html.vercel.app/assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="name" class="form-label">Name *</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="companyName" class="form-label">Company Name *</label>
                                        <input type="text" class="form-control" id="companyName" placeholder="Company Name" name="companyName" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="address" class="form-label">Address *</label>
                                        <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="city" class="form-label">City *</label>
                                        <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="companyProfile" class="form-label">Company Profile *</label>
                                        <input type="file" class="form-control" id="companyProfile" name="companyProfile" required>
                                    </div>
                                </div>                                
                                <div class="mb-3">
                                    <div class="comment-form__input-box">
                                        <label for="phone" class="form-label">Phone *</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="btn-box">
                                        <button type="submit" class="thm-btn comment-form__btn">Submit</button>
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