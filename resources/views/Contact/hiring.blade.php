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
                    <h2 class="section-title__title">Start Your Career With GES</h2>
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
                            <form action="{{route("newEmployee")}}" method="POST" class="comment-one__form contact-form-validated" novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="name" class="form-label">Full name *</label>
                                            <input type="text" class="form-control" id="name" placeholder="Full name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="email" class="form-label">Email address *</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email address" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="phone" class="form-label">Phone *</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="address" class="form-label">Address *</label>
                                            <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="gender" class="form-label">Gender *</label>
                                            <select id="gender" class="form-select form-control" name="gender" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="maritalStatus" class="form-label">Marital Status *</label>
                                            <select id="maritalStatus" class="form-select form-control" name="maritalStatus" required>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="recruitmentStatus" class="form-label">Recruitment Status *</label>
                                            <select id="recruitmentStatus" class="form-select form-control" name="recruitmentStatus" required>
                                                <option value="Exempted">Exempted</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="qualification" class="form-label">Qualification *</label>
                                            <select id="qualification" class="form-select form-control" name="qualification" required>
                                                <option value="Bachelors">Bachelors</option>
                                                <option value="Masters">Masters</option>
                                                <option value="Doctorate">Doctorate</option>
                                                <option value="Student">Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="graduationYear" class="form-label">Graduation Year *</label>
                                            <input type="number" class="form-control" id="graduationYear" placeholder="Graduation Year" name="graduationYear" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="jobPosition" class="form-label">Job Position *</label>
                                            <select id="jobPosition" class="form-select form-control" name="jobPosition" required>
                                                <option value="Mechanical Engineer">Mechanical Engineer</option>
                                                <option value="Electrical Engineer">Electrical Engineer</option>
                                                <option value="Architect (Designer)">Architect (Designer)</option>
                                                <option value="Architect (Draftsman)">Architect (Draftsman)</option>
                                                <option value="Construction Engineer">Construction Engineer</option>
                                                <option value="Graphic Designer">Graphic Designer</option>
                                                <option value="Animator">Animator</option>
                                                <option value="Business Development Specialist">Business Development Specialist</option>
                                                <option value="HR Specialist">HR Specialist</option>
                                                <option value="Social Media Specialist">Social Media Specialist</option>
                                                <option value="Content Creator">Content Creator</option>
                                                <option value="Web Developer (WordPress)">Web Developer (WordPress)</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="otherJobPosition" class="form-label">Other Job Position</label>
                                            <input type="text" class="form-control" id="otherJobPosition" placeholder="Other Job Position" name="otherJobPosition">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="comment-form__input-box">
                                            <label for="resume" class="form-label">Attach Resume *</label>
                                            <input type="file" class="form-control" id="resume" name="resume" required accept=".pdf,.docx">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

@endsection