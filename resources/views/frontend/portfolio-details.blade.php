
@extends('frontend.layouts.master')
@section('content')


    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Projects Details</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Projects Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-details">
                        <div class="project-details-top-content">
                            <div class="top-image">
                                <img src="{{asset($portfolio->portfolio_image_view)}}" alt="Image">
                            </div>
                           {!!$portfolio->portfolio_description!!}

                        </div>
                        {{-- <div class="common-way-content">
                            <div class="common-img">
                                <img src="assets/images/portfolio/portfolio-img-11.jpg" alt="Image">
                            </div>
                            <h3>John Timbers Answers In The Most Common Way</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                page it when looking at its layout. The of using Lorem Ipsum is that it normal
                                distribution of a letters, as opposed to using making it look English.</p>
                            <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque dolores et quas molestias excepturi sint occaecati cupiditate
                                non provident, similique sunt in culpa qui officia deseru mollitia animi, id est laborum
                                et dolorum fuga cupiditate non provident, similique sunt in culpa.</p>
                        </div>
                        <div class="achieve-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="achieve-image">
                                        <img src="assets/images/portfolio/portfolio-img-12.jpg" alt="Image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="achieve-image">
                                        <img src="assets/images/portfolio/portfolio-img-13.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <h3>Achieve The Very Top Of A Sure-Fire Way</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                page it when looking at its layout. The of using Lorem Ipsum is that it normal
                                distribution of a letters, as opposed to using making it look English.</p>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="project-information">
                        <h3>Project Information</h3>
                        <p>It is a long established that a reader will be distracted the readable content of a page.</p>
                        <ul>
                            <li>
                                <h4>Date</h4>
                                <span>11 - Jun - 2022</span>
                            </li>
                            <li>
                                <h4>Time</h4>
                                <span>08 : 00 am - 04 : 00 pm</span>
                            </li>
                            <li>
                                <h4>Client</h4>
                                <span>Izaiah Pfeffer</span>
                            </li>
                            <li>
                                <h4>Category</h4>
                                <span><a href="#">Martial Arts,</a><a href="#">Boxing & Karate School</a></span>
                            </li>
                            <li>
                                <h4>Training Cost</h4>
                                <span>$160</span>
                            </li>
                            <li>
                                <h4>Duration</h4>
                                <span>2 weeks</span>
                            </li>
                            <li>
                                <h4>Address</h4>
                                <span>20 Mercantile Plaza, Suite 546, Fort Worth,
                                    TX, 16734, USA</span>
                            </li>
                            <li>
                                <h4>Call Us</h4>
                                <a href="tel:+1823456789">+1 (823-456-789)</a>
                            </li>
                            <li>
                                <h4>Mail Us</h4>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#98fbf7f6ecf9fbecd8e1f7edeaecf1f6ffb6fbf7f5"><span
                                        class="__cf_email__"
                                        data-cfemail="1e7d71706a7f7d6a5e67716b6c6a777079307d7173">[email&#160;protected]</span></a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    @endsection

