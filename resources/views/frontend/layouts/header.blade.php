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
                        {{-- <li>
                            <i class="ri-time-line"></i>
                            Mon-Fri 8:00 to 2:00
                        </li> --}}
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
                    <a href="index.html">
                        <img src="assets/images/favicon.png" class="logo-icon-1" alt="logo">
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
                            <a href="#" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Training
                            </a>
                            {{-- <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Training</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Training Details</a>
                                </li>
                            </ul> --}}
                        </li>
                        {{-- <li class="nav-item">
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
                        </li> --}}
                        {{-- <li class="nav-item">
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
                        </li> --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                            </a>

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
