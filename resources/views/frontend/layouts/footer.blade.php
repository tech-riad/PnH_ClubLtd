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
                                    @php
                                    if (helper::pageName()):
                                        for ($i=0; $i<3;$i++):

                                            if($i==count(helper::pageName()))
                                                break;
                                            $item = helper::pageName()[$i];
                                    @endphp
                                                <li>
                                                    <a href="{{@$item->slug}}">{{@$item->title}}</a>
                                                </li>
                                    @php
                                            endfor;
                                        endif;
                                    @endphp


                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    @php
                                        if (helper::pageName()):
                                            for ($i=3; $i<6;$i++):

                                                if($i==count(helper::pageName()))
                                                    break;
                                                $item = helper::pageName()[$i];
                                    @endphp
                                                <li>
                                                    <a href="{{@$item->slug}}">{{@$item->title}}</a>
                                                </li>
                                    @php
                                            endfor;
                                        endif;
                                    @endphp

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
