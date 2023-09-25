
@extends('frontend.layouts.master')
@section('content')

    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>{{$pages->title}}</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>{{$pages->title}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="{{asset($pages->image)}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="terms-condition-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="condition-content">
                        <h2>{{$pages->title}}</h2>

                        {!!$pages->description!!}

                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="single-sidebar-widget search-bar">
                            <h3>Search Here</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search Now">
                                <button type="submit" class="default-btn active"><i
                                        class="ri-search-eye-line"></i></button>
                            </div>
                        </div>
                        <div class="single-sidebar-widget categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="services.html">Boxing<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Championship<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Classes<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Kick Boxing<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Training<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Women's Box<i class="ri-arrow-right-line"></i></a></li>
                                <li><a href="services.html">Kubodo<i class="ri-arrow-right-line"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-sidebar-widget widget-peru-posts-thumb">
                            <h3>Popular Post</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2022-06-30">July 30, 2022</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                It Is A Long Established Fact That A Reader
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2022-06-30">July 30, 2022</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Martial Arts For Women The Best Way To Defend Yourself
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-details.html" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2022-06-30">July 30, 2022</time>
                                        <h4 class="title usmall">
                                            <a href="blog-details.html">
                                                Understand Why You Are Lesson Specific Combat Techniques
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            </div>
                        </div>
                        <div class="single-sidebar-widget tags">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="services.html">Medicine</a></li>
                                <li><a href="services.html">Gym</a></li>
                                <li><a href="services.html">Boxing</a></li>
                                <li><a href="services.html">Fitness Body</a></li>
                                <li><a href="services.html">Martial Arts</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection
