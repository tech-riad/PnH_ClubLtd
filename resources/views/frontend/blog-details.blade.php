@extends('frontend.layouts.master')
@section('content')


    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Blog Details</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image">
                        <img src="assets/images/page-banner/page-banner-image-19.png" alt="Image">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>


    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-top-image">
                            <img src="{{asset($blogs->blog_view_image)}}" alt="{{asset($blogs->blog_view_image)}}">
                        </div>
                        <div class="blog-details-content">
                            <div class="top-content">
                                <ul>
                                    <li>
                                        <i class="ri-calendar-check-line"></i>{{$blogs->created_at}}
                                    </li>
                                </ul>
                                {!!$blogs->description!!}
                            </div>
                            {{-- <div class="quote">
                                <p>“It is a long established fact that a reader will be distracted by the readable
                                    content page is that it normal distribution of a letters, as opposed to it look
                                    English.”</p>
                                <div class="icon">
                                    <i class="ri-double-quotes-l"></i>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content page it when looking its the a using Lorem Ipsum is that it normal
                                    distribution of a letters, as opposed to using making it look English.</p>
                                <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum delenit dolor quas molestias excepturi sint occaecati cupiditate non
                                    provident, similique sunt in culpa qui officia deseru molid est laborum et dolorum
                                    fuga cupiditate non provident, similique sunt in culpa.</p>
                            </div>
                            <div class="customer-review-area style2">
                                <h2>Customer Reviews</h2>
                                <div class="single-review-item">
                                    <div class="review-img">
                                        <img src="assets/images/testimonials/testimonial-img-10.png" alt="Image">
                                    </div>
                                    <div class="client-info-and-reply">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <h3>Norbert Boyer</h3>
                                                <span>April-25-2022</span>
                                            </li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra elit
                                        odio, a gravida turpis varius. Vivamus dapibus erat quis mattis aliquet.</p>
                                </div>
                                <div class="single-review-item">
                                    <div class="review-img">
                                        <img src="assets/images/testimonials/testimonial-img-11.png" alt="Image">
                                    </div>
                                    <div class="client-info-and-reply">
                                        <ul class="d-flex justify-content-between">
                                            <li>
                                                <h3>Jayda Walsh</h3>
                                                <span>April-25-2022</span>
                                            </li>
                                            <li><a href="#">Reply</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra elit
                                        odio, a gravida turpis varius. Vivamus dapibus erat quis mattis aliquet.</p>
                                </div>
                                <div class="reviews-form">
                                    <h2>Write A Review</h2>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Website link">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <textarea class="form-control style" placeholder="Comment"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="default-btn active">Post A Comment <i
                                                class="fa-solid fa-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
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
