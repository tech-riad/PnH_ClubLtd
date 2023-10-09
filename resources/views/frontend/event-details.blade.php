
@extends('frontend.layouts.master')
@section('content')
    <div class="page-banner-area bg-f0f0f0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-content">
                        <h1>Event Details</h1>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>Event Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="training-details-area pt-100 pb-70">
        <div class="container">
            @php
             $eventImages = json_decode($event->event_details_image);
            @endphp
            <div class="training-details-top-image">
                <div class="row">
                    @if (is_array($eventImages))
                    @foreach ($eventImages as $eventImage)
                    <div class="col-lg-6 col-md-6">
                        <div class="top-img">
                            <img src="{{asset($eventImage) ?? Null}}" alt="eventImage">
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="training-details-content">
                        <div class="description">
                            {!! $event->description !!}
                        </div>
                        <div class="location">
                            <h3>See The Location Of The Venue</h3>
                            <div class="map-container">
                                {!!$event->event_map_location!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="training-details-sidebar">
                        <div class="training-information">
                            <h3>Event Information</h3>
                            <p>{{$event->event_title}}
                            </p>
                            <ul>
                                <li>
                                    <h4>Event Date</h4>
                                    <span>{{$event->event_date}}</span>
                                </li>
                                <li>
                                    <h4>Event Time</h4>
                                    <span>{{$event->event_time}}</span>
                                </li>
                                <li>
                                    <h4>Event Cost</h4>
                                    <span>{{$event->event_cost}}</span>
                                </li>
                                <li>
                                    <h4>Address</h4>
                                    <span>{{$event->event_location}}</span>
                                </li>
                                <li>
                                    <h4>Call Us</h4>
                                    <a href="tel:{{$event->event_contact}}">{{$event->event_contact}}</a>
                                </li>
                                <li>
                                    <h4>Mail Us</h4>
                                    <span>{{$event->event_mail}}</span>

                                </li>
                            </ul>
                        </div>
                        {{-- <div class="single-sidebar-widget booking">
                            <h3>Book A Training</h3>
                            <form>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Select Date">
                                </div>
                                <div class="form-group">
                                    <input type="time" class="form-control" placeholder="Select Time">
                                </div>
                                <div class="form-group">
                                    <select class="form-select form-control">
                                        <option selected>Select Training</option>
                                        <option value="1">Boxing Practice</option>
                                        <option value="2">Cardio Training</option>
                                        <option value="3">Zumba Dance</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-select form-control">
                                        <option selected>Total</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <a class="default-btn active" href="#">Book Now <i class="ri-arrow-right-line"></i></a>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
