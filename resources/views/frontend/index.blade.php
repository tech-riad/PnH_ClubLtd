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
                                {!! Str::limit($item->service_description,85) !!}
                                {{-- <a class="default-btn" href="#">Read More <i class="ri-arrow-right-line"></i></a> --}}
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
                            <span>{{ helper::getAboutSection()->abouttitle ?? Null }}</span>
                            <h2>{{ @$about->about_title }} <span class="overlay"></span></h2>
                        </div>
                        <p>{!! @$about->about_description !!}</p>
                        {{-- <div class="features-list">
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
                        </div> --}}
                        {{-- <a class="default-btn active" href="about-us.html">Read More <i class="ri-arrow-right-line"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
@endif


@if(helper::eventInformation()->eventstatus == 'Show')
    <div class="course-area bg pt-100">
        <div class="container">
            <div class="section-title white-title">
                <span>{{ helper::eventInformation()->title }}</span>
                <h2>{{ helper::eventInformation()->subtitle }} <span class="overlay"></span></h2>
            </div>
            <div class="row">

                @foreach ($events as $item)
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="single-course-card">
                        <div class="course-img">
                            <a href="#"><img src="{{asset($item->event_front_image)}}"
                                    alt="Image"></a>
                        </div>
                        <div class="course-content">
                            <a href="#">
                                <h3>{{$item->event_name}}</h3>
                            </a>
                            <ul>
                                <li>
                                    <i class="ri-map-pin-user-fill"></i>
                                    {{Str::limit($item->event_location,20)}}
                                </li>
                                <li>
                                    <i class="ri-time-line"></i>
                                    {{$item->event_time}}
                                </li>
                            </ul>
                            <a class="default-btn" href="{{ route('event.show',$item->event_slug) }}">{{$item->btn_name}} <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
@else
@endif


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
                @foreach($portfolios as $item)
                    <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                        <div class="single-portfolio-card">
                            <div class="portfolio-img">
                                <img src="{{ asset($item->portfolio_image) }}" alt="Image">
                            </div>
                            <div class="portfolio-content">
                                <a href="{{ route('portfolio.show',$item->slug) }}">
                                    <div class="icon">
                                        <i class="ri-add-line"></i>
                                    </div>
                                </a>
                                <h3>{{ $item->portfolio_category }}</h3>
                                <a class="default-btn active"
                                    href="{{ route('portfolio.show',$item->slug) }}">{{ $item->button_name }}<i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach


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
                                <a href="{{ route('blog.show',$item->slug) }}"><img
                                        src="{{ asset($item->image) ?? Null }}" alt="Image"></a>
                            </div>
                            <div class="blog-content">
                                <span><i class="ri-calendar-check-line"></i>{{ @$item->created_at }}</span>
                                <h2><a
                                        href="{{ route('blog.show',$item->slug) }}">{{ @$item->title }}</a>
                                </h2>
                                <a class="default-btn"
                                    href="{{ route('blog.show',$item->slug) }}">Read More <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@else
@endif

@endsection
