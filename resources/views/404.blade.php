@extends('layout.master')
@section('content')
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-shape-1 float-bob-x-6"></div>
            <div class="page-header-shape-2 float-bob-x-7"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span>/</span></li>
                        <li>404 Error</li>
                    </ul>
                    <h2>404 Error</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                                <h2 class="error-page__title-2">404</h2>
                            </div>
                            <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                            <p class="error-page__text">The page you are looking for was never existed.</p>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </div>
                            </form>
                            <a href="{{ route('home') }}" class="thm-btn error-page__btn">back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->
@endsection
