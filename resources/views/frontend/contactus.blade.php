@extends('frontend.layouts.master')
@section('content')


    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>





    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-title">
                        <span>{{helper::getContactUs()->headline ?? Null}}</span>
                        <h2>{{helper::getContactUs()->title ?? Null}} <span class="overlay"></span></h2>
                        <p>{{helper::getContactUs()->short_description ?? Null}} </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="single-contact-item style2">
                                <div class="icon">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h4>Location</h4>
                                <span>{{ helper::getLatestsetting()->address ?? Null}}</span>
                            </div>
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <h4>Call Us</h4>
                                <a href="tel:{{ helper::getLatestsetting()->phone ?? Null }}">{{ helper::getLatestsetting()->phone ?? Null }}</a>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="single-contact-item">
                                <div class="icon">
                                    <i class="ri-mail-send-line"></i>
                                </div>
                                <h4>Email Address</h4>
                                <a
                                    >{{ helper::getLatestsetting()->email ?? Null }}</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="follow-content">
                        <div class="social-content">
                            <ul>
                                <li><span>Follow Us</span></li>
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
                <div class="col-lg-5">
                    <div class="contact-form">
                        <form id="contactForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name *" id="name" class="form-control" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email*" class="form-control" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" id="subject" placeholder="Number*" required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject*" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message*" id="message" cols="30" rows="4" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn active">
                                    <span>Send Message</span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map-area">
        <iframe
            src="{{helper::getContactUs()->map_location ?? Null}}"
            style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('contact-us.store') }}",
                data: formData,
                dataType: 'json',
                success: function (response) {
                    $('#msgSubmit').removeClass('hidden');
                    $('#msgSubmit').text(response.message);
                    $('#contactForm')[0].reset();
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON;
                    $('.help-block.with-errors').empty();
                    $.each(errors.errors, function (key, value) {
                        $('#' + key).next('.help-block.with-errors').text(value[0]);
                    });
                }
            });
        });
    });
    </script>
@endpush
