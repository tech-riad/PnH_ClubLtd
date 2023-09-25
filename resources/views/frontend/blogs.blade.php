@extends('frontend.layouts.master')
@section('content')

    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Daily News</span>
                <h2>Latest News And Articles <span class="overlay"></span></h2>
            </div>
            <div class="row justify-content-center">
                @foreach($allblogs as $item)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="single-blog-card">
                            <div class="blog-img">
                                <a href="{{route('blog.show',$item->slug)}}"><img src="{{ asset($item->image) ?? Null }}" alt="Image"></a>
                            </div>
                            <div class="blog-content">
                                <span><i class="ri-calendar-check-line"></i>{{ @$item->created_at }}</span>
                                <h2><a href="{{route('blog.show',$item->slug)}}">{{ @$item->title }}</a>
                                </h2>
                                <a class="default-btn" href="{{route('blog.show',$item->slug)}}">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection
