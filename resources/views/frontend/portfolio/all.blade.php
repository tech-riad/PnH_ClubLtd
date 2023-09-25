

@extends('frontend.layouts.master')
@section('content')


    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>{{ helper::getPortfolioSection()->portfolio_title }}</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>{{ helper::getPortfolioSection()->portfolio_title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>{{ helper::getPortfolioSection()->portfolio_title }}</span>
                <h2>{{ helper::getPortfolioSection()->portfolio_desc }} <span class="overlay"></span></h2>
            </div>
            <div class="row">
                @foreach ($allportfolios as $item)
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="single-portfolio-card">
                        <div class="portfolio-img">
                            <img src="{{asset($item->portfolio_image)}}" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <a href="{{route('portfolio.show',$item->slug)}}">
                                <div class="icon">
                                    <i class="ri-add-line"></i>
                                </div>
                            </a>
                            <h3>{{$item->portfolio_category}}</h3>
                            <a class="default-btn active" href="{{route('portfolio.show',$item->slug)}}">{{$item->button_name}}<i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>

@endsection
