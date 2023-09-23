@extends('frontend.layouts.master')
@section('content')

{{-- <div id="preloader-section">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">

                <div class="spinner"></div>

                <div class="txt-loading">
                    <span data-text-preloader="T" class="letters-loading">T</span>
                    <span data-text-preloader="I" class="letters-loading">I</span>
                    <span data-text-preloader="N" class="letters-loading">N</span>
                    <span data-text-preloader="G" class="letters-loading">G</span>
                </div>

            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
    </div>
</div> --}}




<div class="mouseCursor cursor-outer"></div>
<div class="mouseCursor cursor-inner"><span>Drag</span></div>


<div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="header-left-content">
                    <ul>
                        <li>
                            <i class="ri-headphone-line"></i>
                            <a href="tel:123456789">123456789</a>
                        </li>
                        <li>
                            <i class="ri-time-line"></i>
                            Mon-Fri 8:00 to 2:00
                        </li>
                        <li>
                            <i class="ri-mail-send-line"></i>
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#294a46475d484a5d6950465c5b5d40474e074a4644"><span
                                    class="__cf_email__"
                                    data-cfemail="e98a86879d888a9da990869c9b9d80878ec78a8684">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="header-right-content">
                    <div class="social-content">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="ri-facebook-line"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-line"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                        class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                        class="ri-linkedin-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/favicon.png" class="logo-icon-1" alt="logo">
                        <img src="assets/images/favicon-2.png" class="logo-icon-2" alt="logo">
                        <img src="assets/images/logo.png" class="main-logo" alt="logo">
                        <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" class="main-logo" alt="logo">
                    <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about-us.html" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Training
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="training.html" class="nav-link">Training</a>
                                </li>
                                <li class="nav-item">
                                    <a href="training-details.html" class="nav-link">Training Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="shop.html" class="nav-link">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-details.html" class="nav-link">Shop Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Team
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team-style-one.html" class="nav-link">Team Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-style-two.html" class="nav-link">Team Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-style-three.html" class="nav-link">Team Style Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-details.html" class="nav-link">Services Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Portfolio
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="portfolio.html" class="nav-link">Portfolio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="portfolio-details.html" class="nav-link">Portfolio Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="apply.html" class="nav-link">Apply</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Users
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="recover-password.html" class="nav-link">Recover Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms And Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">404 Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact-us.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="option-item">
                            <a href="contact-us.html" class="default-btn btn style-2">Get In Touch <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="others-options">
                        <div class="option-item">
                            <a href="contact-us.html" class="default-btn btn style-2">Get In Touch</a>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch2" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider2">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="banner-area">
    <div class="banner-slider owl-carousel owl-theme">
        @foreach($sliders as $item)
            <div class="banner-slider-item bg-1" style="background-image: url({{ asset($item->slider_image) }})">
                <div class="container-fluid">
                    <div class="banner-content">
                        <span>{{ @$item->welcome_text }}</span>
                        <h1>{{ @$item->slider_title }}<span class="overlay"></span></h1>
                        <p>{!! @$item->slider_description !!}</p>
                        <div class="apply-content">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="apply-img">
                                        @php
                                            $profileImages = json_decode($item->slider_profile_image);
                                        @endphp
                                        <ul>
                                            @if(is_array($profileImages))
                                                @foreach($profileImages as $profileimage)
                                                    <li><img src="{{ asset($profileimage) }}" alt="Image" /></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="apply-text">
                                        <span>{{ @$item->slider_profile_short_desc }}</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="apply-btn">
                                        <a class="default-btn active"
                                            href="{{ @$item->slider_profile_button_url }}">{{ @$item->slider_profile_button_name }}
                                            <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@if(helper::getServiceSection()->servicestatus == 'Show')
    <div class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ helper::getServiceSection()->servicetitle }}</span>
                <h2>{{ helper::getServiceSection()->shortdesc }} <span class="overlay"></span></h2>
            </div>
            @php
                $counter = 1;
            @endphp
            <div class="row">
                @foreach($services as $item)
                    <div class="col-lg-6 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-services-card">
                            <div class="services-content">
                                <div class="icon">
                                    <i class="{{ $item->service_icon_tag }}"></i>
                                </div>
                                <h3><a href="#">{{ $item->service_title }}</a></h3>
                                <p>{{ $item->service_description }}</p>
                                <a class="default-btn" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                            <div class="number">
                                <span>{{ $counter }}</span>
                            </div>
                        </div>
                    </div>
                    @php
                        $counter++;
                    @endphp

                @endforeach

            </div>
        </div>
    </div>
@else

@endif


@if(helper::getAboutSection()->aboutstatus == 'Show')
    <div class="about-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img pr-15">
                        <img src="{{ asset($about->about_image ?? Null) }}" class="main-img" alt="Image">
                        <div class="small-img">
                            <img src="{{ asset($about->about_image_additional ?? Null) }}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-15">
                        <div class="about-title">
                            <span>{{ helper::getAboutSection()->abouttitle }}</span>
                            <h2>{{ @$about->about_title }} <span class="overlay"></span></h2>
                        </div>
                        <p>{!! @$about->about_description !!}</p>
                        <div class="features-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>The International Boxing Federation</li>
                                        <li><i class="ri-check-double-line"></i>World Boxing Association</li>
                                        <li><i class="ri-check-double-line"></i>World Boxing Council</li>
                                        <li><i class="ri-check-double-line"></i>World Boxing Organization</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Expanding Range Of Female Boxers</li>
                                        <li><i class="ri-check-double-line"></i>Including Two World Champions</li>
                                        <li><i class="ri-check-double-line"></i>Delivers Al Haymon’s Series</li>
                                        <li><i class="ri-check-double-line"></i>Its Fights Are Available Through</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <a class="default-btn active" href="about-us.html">Read More <i class="ri-arrow-right-line"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
@endif


{{-- <div class="course-area bg pt-100">
    <div class="container">
        <div class="section-title white-title">
            <span>{{ helper::getMemberSection()->member_title }}</span>
<h2>{{ helper::getMemberSection()->member_desc }} <span class="overlay"></span></h2>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
        <div class="single-course-card">
            <div class="course-img">
                <a href="training-details.html"><img src="assets/images/course/course-img-1.jpg" alt="Image"></a>
            </div>
            <div class="course-content">
                <a href="training-details.html">
                    <h3>Boxing Practice</h3>
                </a>
                <ul>
                    <li>
                        <i class="ri-map-pin-user-fill"></i>
                        231 King Street, Melbourne
                    </li>
                    <li>
                        <i class="ri-time-line"></i>
                        01:00pm - 03:00 pm
                    </li>
                </ul>
                <a class="default-btn" href="training-details.html">Read More <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
        <div class="single-course-card">
            <div class="course-img">
                <a href="training-details.html"><img src="assets/images/course/course-img-2.jpg" alt="Image"></a>
            </div>
            <div class="course-content">
                <a href="training-details.html">
                    <h3>Cardio Training</h3>
                </a>
                <ul>
                    <li>
                        <i class="ri-map-pin-user-fill"></i>
                        231 King Street, Melbourne
                    </li>
                    <li>
                        <i class="ri-time-line"></i>
                        01:00pm - 03:00 pm
                    </li>
                </ul>
                <a class="default-btn" href="training-details.html">Read More <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
        <div class="single-course-card">
            <div class="course-img">
                <a href="training-details.html"><img src="assets/images/course/course-img-3.jpg" alt="Image"></a>
            </div>
            <div class="course-content">
                <a href="training-details.html">
                    <h3>Zumba Dance</h3>
                </a>
                <ul>
                    <li>
                        <i class="ri-map-pin-user-fill"></i>
                        231 King Street, Melbourne
                    </li>
                    <li>
                        <i class="ri-time-line"></i>
                        01:00pm - 03:00 pm
                    </li>
                </ul>
                <a class="default-btn" href="training-details.html">Read More <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
        <div class="single-course-card">
            <div class="course-img">
                <a href="training-details.html"><img src="assets/images/course/course-img-4.jpg" alt="Image"></a>
            </div>
            <div class="course-content">
                <a href="training-details.html">
                    <h3>Boxing Class</h3>
                </a>
                <ul>
                    <li>
                        <i class="ri-map-pin-user-fill"></i>
                        231 King Street, Melbourne
                    </li>
                    <li>
                        <i class="ri-time-line"></i>
                        01:00pm - 03:00 pm
                    </li>
                </ul>
                <a class="default-btn" href="training-details.html">Read More <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
</div> --}}


{{-- <div class="schedule-time-area pt-70 pb-100">
    <div class="container">
        <div class="section-title">
            <span>Schedule Time</span>
            <h2>Set A Time To Practice <span class="overlay"></span></h2>
        </div>
        <div class="time-table">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Routine</th>
                        <th scope="col">10:00 AM</th>
                        <th scope="col">12:00 AM</th>
                        <th scope="col">02:00 PM</th>
                        <th scope="col">05:00 PM</th>
                        <th scope="col">07:00 PM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="serial">
                            Satarday
                        </td>
                        <td class="routin-box">
                            <h3>Cycling</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Yoga</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Jumping</h3>
                            <span>10 am - 11 am</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Sunday
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Karate</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Boxing</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Monday
                        </td>
                        <td class="routin-box">
                            <h3>Cycling</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Yoga</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Jumping</h3>
                            <span>10 am - 11 am</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Tuesday
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Karate</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Boxing</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Wednesday
                        </td>
                        <td class="routin-box">
                            <h3>Cycling</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Yoga</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Jumping</h3>
                            <span>10 am - 11 am</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Thursday
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Karate</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Boxing</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                    </tr>
                    <tr>
                        <td class="serial">
                            Friday
                        </td>
                        <td class="routin-box">
                            <h3>Cycling</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Yoga</h3>
                            <span>10 am - 11 am</span>
                        </td>
                        <td class="blank"></td>
                        <td class="routin-box">
                            <h3>Jumping</h3>
                            <span>10 am - 11 am</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

@if(helper::getMemberSection()->memberstatus == 'Show')
    <div class="team-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ helper::getMemberSection()->member_title }}</span>
                <h2>{{ helper::getMemberSection()->member_desc }} <span class="overlay"></span></h2>
            </div>
            <div class="row justify-content-center">
                @foreach($members as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-team-card">
                            <div class="team-img">
                                <img src="{{ asset($item->member_image) }}" alt="Image">
                                <div class="social-content">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank"><i
                                                    class="ri-facebook-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/" target="_blank"><i
                                                    class="ri-twitter-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                    class="ri-instagram-line"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                    class="ri-linkedin-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>{{ $item->member_name }}</h3>
                                <span>{{ $item->member_position }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@else
@endif


<div class="intro-video-area ptb-100" style="background-image: url({{ asset(helper::getLatestVideoThumb()->video_image ?? Null) }} );
background-size: cover;
background-position: center center;
position: relative;
background-repeat: no-repeat;
z-index: 1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-btn-content">
                    <div class="play-btn">
                        <a class="popup-youtube"
                            href="{{ $introvideo->video_url ?? '#' }}">
                            <i class="ri-play-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-content">
                    <div class="video-title">
                        <span>Intro Video</span>
                        <h2>{{ @$introvideo->video_title }}<span class="overlay"></span></h2>
                    </div>
                    <p>{!! @$introvideo->video_description !!}</p>
                    {{-- <ul>
                        <li><i class="ri-check-double-line"></i>Expanding Range Of Female Boxers</li>
                        <li><i class="ri-check-double-line"></i>Including Two World Champions</li>
                        <li><i class="ri-check-double-line"></i>Delivers Al Haymon’s Series</li>
                        <li><i class="ri-check-double-line"></i>Its Fights Are Available Through</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div>


@if(helper::getPortfolioSection()->portfoliostatus == 'Show')
    <div class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ helper::getPortfolioSection()->portfolio_title }}</span>
                <h2>{{ helper::getPortfolioSection()->portfolio_desc }} <span class="overlay"></span></h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-1.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-2.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing And Kickboxing For Teens</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-3.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-4.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-5.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1200">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="assets/images/portfolio/portfolio-img-6.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio-details.html">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>Boxing</h3>
                            <a class="default-btn active" href="portfolio-details.html">Read More <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
@endif


@if(helper::getTestimonialSection()->testimonialstatus == 'Show')
    <div class="testimonials-area pb-70">
        <div class="container">
            <div class="section-title style2">
                <span>{{ helper::getTestimonialSection()->testimonial_title }}</span>
                <h2>{{ helper::getTestimonialSection()->testimonial_desc }} <span class="overlay"></span></h2>
            </div>
            @php
                $counter = 1;
            @endphp
            <div class="row">
                @foreach($testimonials as $item)
                    <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-testimonial-box">
                            <div class="top-content">
                                <ul class="d-flex justify-content-between">
                                    <li>
                                        <div class="quote">
                                            <i class="ri-double-quotes-l"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="number">
                                            <span>{{ $counter }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <p>{!! @$item->description !!}
                            </p>
                            <div class="clients-info">
                                <h3>{{ @$item->name }}</h3>
                                <span>{{ @$item->position }}</span>
                            </div>
                        </div>
                    </div>
                    @php
                        $counter++;
                    @endphp

                @endforeach


            </div>
        </div>
    </div>
@else
@endif

@if(helper::getBlogSection()->blogstatus == 'Show')
    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ helper::getBlogSection()->blog_title }}</span>
                <h2>{{ helper::getBlogSection()->blog_desc }} <span class="overlay"></span></h2>
            </div>
            <div class="row justify-content-center">
                @foreach($blogs as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-blog-card">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset($item->image) ?? Null }}" alt="Image"></a>
                            </div>
                            <div class="blog-content">
                                <span><i class="ri-calendar-check-line"></i>{{ @$item->created_at }}</span>
                                <h2><a href="#">{{ @$item->title }}</a>
                                </h2>
                                <a class="default-btn" href="#">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@else
@endif



<div class="footer-area bg-1 pt-100">
    <div class="container">
        <div class="footer-content pb-50">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-footer-widget contact-info">
                        <h3>Contact With Us</h3>
                        <ul>
                            <li>
                                <span>Address</span>
                                <p>20 Mercantile Plaza, Suite 546, Fort Worth,
                                    TX, 16734, USA</p>
                            </li>
                            <li>
                                <span>Call Us</span>
                                <a href="tel:+1823456789">+1 (823-456-789)</a>
                            </li>
                            <li>
                                <span>Mail Us</span>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#10737f7e6471736450697f656264797e773e737f7d"><span
                                        class="__cf_email__"
                                        data-cfemail="f794989983969483b78e988285839e9990d994989a">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                        <div class="social-content">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="ri-facebook-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i
                                            class="ri-twitter-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/?lang=en" target="_blank"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                            class="ri-linkedin-line"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-footer-widget quick-links">
                        <h3>Quick Links</h3>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="services.html">Terms Of Service</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="services.html">Our Services</a>
                                    </li>
                                    <li>
                                        <a href="team-style-one.html">Meet Our Team</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Latest News</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <a href="portfolio.html">Intro Video</a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">Our Pricing Plan</a>
                                    </li>
                                    <li>
                                        <a href="training.html">Schedule Time</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.html">Our Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="testimonials.html">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="apply.html">Subscribe Now</a>
                                    </li>
                                    <li>
                                        <a href="training.html">Training Course</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-footer-widget subscribe">
                        <h3>Subscribe Now</h3>
                        <span>Get Us In The Inbox And Get The Best Implementation!</span>
                        <p>When looking at its layout. The point of using Lorem it is a long fact that will be
                            distracted.</p>
                        <div class="subscribe-form">
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter your email or password"
                                    name="EMAIL" required autocomplete="off">
                                <button class="default-btn active" type="submit">
                                    Subscribe Now <i class="ri-arrow-right-line"></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <p>© <span>Ting</span> is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBoostrap</a>
            </p>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="ri-arrow-up-fill"></i>
    <i class="ri-arrow-up-fill"></i>
</div>

@endsection
