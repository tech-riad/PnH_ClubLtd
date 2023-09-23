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
                                <p>{{ helper::getLatestsetting()->address }}</p>
                            </li>
                            <li>
                                <span>Call Us</span>
                                <a href="tel:{{ helper::getLatestsetting()->phone }}">{{ helper::getLatestsetting()->phone }}</a>
                            </li>
                            <li>
                                <span>Mail Us</span>
                                <a
                                    href="#"><span
                                        class="__cf_email__"
                                        >{{ helper::getLatestsetting()->email }}</span></a>
                            </li>
                        </ul>
                        <div class="social-content">
                            <ul>
                                <li>
                                    <a href="{{ helper::getLatestsetting()->facebook_link }}" target="_blank"><i
                                            class="ri-facebook-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ helper::getLatestsetting()->twitter_link }}" target="_blank"><i
                                            class="ri-twitter-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ helper::getLatestsetting()->instagram_link }}" target="_blank"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="{{ helper::getLatestsetting()->linkdein_link }}" target="_blank"><i
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
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms Of Service</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Meet Our Team</a>
                                    </li>
                                    <li>
                                        <a href="#">Latest News</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li>
                                        <a href="#">Intro Video</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Pricing Plan</a>
                                    </li>
                                    <li>
                                        <a href="#">Schedule Time</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Subscribe Now</a>
                                    </li>
                                    <li>
                                        <a href="#">Training Course</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-sm-6">
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
                </div> --}}
            </div>
        </div>
        <div class="copy-right">
            <p>© <span>PnH IT Solution</span> is Proudly Owned by <a href="https://www.pnhbd.com/" target="_blank">PnH IT Solution</a>
            </p>
        </div>
    </div>
</div>


<div class="go-top">
    <i class="ri-arrow-up-fill"></i>
    <i class="ri-arrow-up-fill"></i>
</div>
