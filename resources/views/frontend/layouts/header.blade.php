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
                            <a href="tel:{{ helper::getLatestsetting()->phone ?? Null}}">{{ helper::getLatestsetting()->phone ?? Null}}</a>
                        </li>
                        <li>
                            <i class="ri-mail-send-line"></i>
                            <a
                                href="#"><span
                                    class="__cf_email__"
                                    >{{ helper::getLatestsetting()->email ?? Null}}</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-3">
                <div class="header-right-content">
                    <div class="social-content">
                        <ul>
                            <li>
                                <a href="{{ helper::getLatestsetting()->facebook_link ?? Null}}" target="_blank"><i class="ri-facebook-line"></i></a>
                            </li>
                            <li>
                                <a href="{{ helper::getLatestsetting()->twitter_link ?? Null}}" target="_blank"><i class="ri-twitter-line"></i></a>
                            </li>
                            <li>
                                <a href="{{ helper::getLatestsetting()->instagram_link ?? Null}}" target="_blank"><i
                                        class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="{{ helper::getLatestsetting()->linkdein_link ?? Null}}" target="_blank"><i
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
                    <a href="{{url('/')}}">
                        <img src="{{asset( helper::getLatestsetting()->logo )}}" class="logo-icon-1" alt="logo">
                        <img src="assets/images/favicon-2.png" class="logo-icon-2" alt="logo">
                        <img src="{{asset( helper::getLatestsetting()->logo )}}" class="main-logo" alt="logo">
                        <img src="assets/images/white-logo.png" class="white-logo" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset( helper::getLatestsetting()->logo )}}" class="main-logo" alt="logo">
                    {{-- <img src="assets/images/white-logo.png" class="white-logo" alt="logo"> --}}
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link active">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a onclick="scrollWin()" type="button" class="nav-link">About Us</a>
                        </li>
                        @if(helper::getPortfolioSection()->portfoliostatus == 'Show')
                        <li class="nav-item">
                            <a href="{{route('abc.index')}}" class="nav-link">{{ helper::getPortfolioSection()->portfolio_title}}</a>
                        </li>
                        @endif

                        @if(helper::getBlogSection()->blogstatus == 'Show')
                        <li class="nav-item">
                            <a href="{{route('blog.index')}}" class="nav-link">
                                {{ helper::getBlogSection()->blog_title }}
                            </a>

                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{route('contactUs')}}" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="others-options">
                        <div class="option-item">
                            <a href="{{route('contactUs')}}" class="default-btn btn style-2">Get In Touch <i
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
                            <a href="{{route('contactUs')}}" class="default-btn btn style-2">Get In Touch</a>
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
