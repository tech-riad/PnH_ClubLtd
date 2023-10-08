@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit Home Page Information</h1>

    <div class="card shadow mb-4 t-left">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Meta Information</a>
                        <a class="nav-link" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Service</a>
                        <a class="nav-link " id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="true">About</a>
                        <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Schedule</a>
                        <a class="nav-link " id="v-pills-4-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="true">Member Section</a>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Portfolio Section</a>
                        <a class="nav-link" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">Testimonial Section</a>
                        <a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Daily News</a>
                        <a class="nav-link" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">Upcoming Events</a>
                        <a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">Contact Us</a>
                    </div>
                </div>

                <div class="col-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab" >
                            <!-- Tab 1 -->
                             <form id="edit-form">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-title">Title</label>
                                    <input type="text" name="title" id="edit-title" class="form-control" value="{{$metainfo->title ?? ''}}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-description">Meta Description</label>
                                    <textarea name="description" id="edit-description" class="form-control h_100" cols="30"
                                        rows="10">{{$metainfo->description ?? Null}}</textarea>
                                </div>
                                <button type="submit" id="update-button" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 1 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                            <!-- Tab 11 -->
                            <form id="edit-service">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-service-title">Title</label>
                                    <input type="text" name="servicetitle" id="edit-service-title" class="form-control" value="{{ @$service->servicetitle ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-shortdesc">Short Description</label>
                                    <input type="text" name="shortdesc" id="edit-shortdesc" class="form-control" value="{{ @$service->shortdesc ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="servicestatus" id="rr1" value="Show" {{ @$service->servicestatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="servicestatus" id="rr2" value="Hide" {{ @$service->servicestatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 1 -->

                        </div>
                        <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                            <!-- Tab 2 -->
                            <form id="edit-about">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-about-title">Title</label>
                                    <input type="text" name="abouttitle" id="edit-about-title" class="form-control" value="{{ @$about->abouttitle ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-about-desc">Short Description</label>
                                    <input type="text" name="aboutdesc" id="edit-about-desc" class="form-control" value="{{ @$about->aboutdesc ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-about-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="aboutstatus" id="edit-about-status-show" value="Show" {{ @$about->aboutstatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-about-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="aboutstatus" id="edit-about-status-hide" value="Hide" {{ @$about->aboutstatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-about-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-about-button" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 2 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                            <!-- Tab 3 -->
                            <form id="edit-schedule">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-schedule-title">Title</label>
                                    <input type="text" name="schedule_title" id="edit-schedule-title" class="form-control" value="{{ @$scheduleSection->schedule_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-schedule-desc">Description</label>
                                    <textarea name="schedule_desc" id="edit-schedule-desc" class="form-control">{{ @$scheduleSection->schedule_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-schedule-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="schedulestatus" id="edit-schedule-status-show" value="Show" {{ @$scheduleSection->schedulestatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-schedule-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="schedulestatus" id="edit-schedule-status-hide" value="Hide" {{ @$scheduleSection->schedulestatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-schedule-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-schedule-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 3 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                            <!-- Tab 4 -->
                            <form id="edit-member">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-member-title">Title</label>
                                    <input type="text" name="member_title" id="edit-member-title" class="form-control" value="{{ @$memberSection->member_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-member-desc">Description</label>
                                    <textarea name="member_desc" id="edit-member-desc" class="form-control">{{ @$memberSection->member_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-member-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="memberstatus" id="edit-member-status-show" value="Show" {{ @$memberSection->memberstatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-member-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="memberstatus" id="edit-member-status-hide" value="Hide" {{ @$memberSection->memberstatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-member-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-member-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 4 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                            <!-- Tab 5 -->
                            <form id="edit-portfolio">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-portfolio-title">Title</label>
                                    <input type="text" name="portfolio_title" id="edit-portfolio-title" class="form-control" value="{{ @$portfolioSection->portfolio_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-portfolio-desc">Description</label>
                                    <textarea name="portfolio_desc" id="edit-portfolio-desc" class="form-control">{{ @$portfolioSection->portfolio_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-portfolio-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="portfoliostatus" id="edit-portfolio-status-show" value="Show" {{ @$portfolioSection->portfoliostatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-portfolio-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="portfoliostatus" id="edit-portfolio-status-hide" value="Hide" {{ @$portfolioSection->portfoliostatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-portfolio-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-portfolio-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 5 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                            <!-- Tab 6 -->
                            <form id="edit-testimonial">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-testimonial-title">Title</label>
                                    <input type="text" name="testimonial_title" id="edit-testimonial-title" class="form-control" value="{{ $testimonialSection->testimonial_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-testimonial-desc">Description</label>
                                    <textarea name="testimonial_desc" id="edit-testimonial-desc" class="form-control">{{ $testimonialSection->testimonial_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-testimonial-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="testimonialstatus" id="edit-testimonial-status-show" value="Show" {{ @$testimonialSection->testimonialstatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-testimonial-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="testimonialstatus" id="edit-testimonial-status-hide" value="Hide" {{ @$testimonialSection->testimonialstatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-testimonial-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-testimonial-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 6 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                            <!-- Tab 7 -->
                            <form id="edit-blog">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-blog-title">Title</label>
                                    <input type="text" name="blog_title" id="edit-blog-title" class="form-control" value="{{ $blogSection->blog_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-blog-desc">Description</label>
                                    <textarea name="blog_desc" id="edit-blog-desc" class="form-control">{{ $blogSection->blog_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-blog-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="blogstatus" id="edit-blog-status-show" value="Show" {{ @$blogSection->blogstatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-blog-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="blogstatus" id="edit-blog-status-hide" value="Hide" {{ @$blogSection->blogstatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-blog-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-blog-button" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 7 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                            <!-- Tab 8 -->
                            <form id="edit-contactUs">
                                @csrf
                                <div class="form-group">
                                    <label for="edit-contact-headline">Headline</label>
                                    <input type="text" name="headline" id="edit-contact-headline" class="form-control" value="{{ $homecontactus->headline ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-contact-title">Title</label>
                                    <input type="text" name="title" id="edit-contact-title" class="form-control" value="{{ $homecontactus->title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-contact-map-location">Map Location</label>
                                    <input type="text" name="map_location" id="edit-contact-map-location" class="form-control" value="{{ $homecontactus->map_location ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-contact-desc">Description</label>
                                    <textarea name="short_description" id="edit-contact-desc" class="form-control">{{ $homecontactus->short_description ?? '' }}</textarea>
                                </div>
                                <button type="submit" id="update-contact-button" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 8 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                            <!-- Tab 9 -->
                            <form id="edit-event">
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" id="edit-event-title" class="form-control" value="{{ $eventsection->title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Subtitle</label>
                                    <input type="text" name="subtitle" id="edit-event-subtitle" class="form-control" value="{{ $eventsection->subtitle ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="eventstatus" id="rr1" value="Show" {{ @$eventsection->eventstatus === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="eventstatus" id="rr2" value="Hide" {{ @$eventsection->eventstatus === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 9 -->
                        </div>
                        {{--<div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                            <!-- Tab 10 -->
                            <form action="https://agmesconsultants.com/admin/page/home/10" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="current_photo" value="newsletter_bg.jpeg">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="newsletter_title" class="form-control" value="Newsletter">
                                </div>
                                <div class="form-group">
                                    <label for="">Text</label>
                                    <textarea name="newsletter_text" class="form-control h_100" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit expedita, iure ullam cum vero ex sint aperiam maxime.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Existing Background</label>
                                    <div><img src="https://agmesconsultants.com/public/uploads/newsletter_bg.jpeg" alt="" class="w_200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Change Background</label>
                                    <div><input type="file" name="newsletter_bg"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="newsletter_status" id="rr1" value="Show">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="newsletter_status" id="rr2" value="Hide" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 10 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                            <!-- Tab 12 -->
                            <form action="https://agmesconsultants.com/admin/page/home/12" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="client_title" class="form-control" value="Our Clients">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="client_status" id="rr1" value="Show" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="client_status" id="rr2" value="Hide">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 10 -->
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection

@push('js')
<script src="{{asset('backend/assets/js/homesection.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
            $("#tab-fade-1").addClass('show active');

            // tab-1
            $("#v-pills-1-tab").click(function(){
                $("#v-pills-1-tab").addClass("active");
                $("#v-pills-1").addClass('show active');

                $("#v-pills-11-tab").removeClass('active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });

            // Tab-2
             $("#v-pills-11-tab").click(function(){
                $("#v-pills-11-tab").addClass("active");
                $("#v-pills-11").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-3
             $("#v-pills-6-tab").click(function(){
                $("#v-pills-6-tab").addClass("active");
                $("#v-pills-2").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-4
             $("#v-pills-3-tab").click(function(){
                $("#v-pills-3-tab").addClass("active");
                $("#v-pills-3").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-4-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");

            });
            // Tab-5
             $("#v-pills-4-tab").click(function(){
                $("#v-pills-4-tab").addClass("active");
                $("#v-pills-4").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-6
             $("#v-pills-2-tab").click(function(){
                $("#v-pills-2-tab").addClass("active");
                $("#v-pills-5").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-6
             $("#v-pills-10-tab").click(function(){
                $("#v-pills-10-tab").addClass("active");
                $("#v-pills-10").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-7
             $("#v-pills-7-tab").click(function(){
                $("#v-pills-7-tab").addClass("active");
                $("#v-pills-7").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
            });
            // Tab-7
             $("#v-pills-8-tab").click(function(){
                $("#v-pills-8-tab").addClass("active");
                $("#v-pills-8").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-11").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-9-tab").removeClass("active");
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-9").removeClass('show active');
            });
            // Tab-9
             $("#v-pills-9-tab").click(function(){
                $("#v-pills-9-tab").addClass("active");
                $("#v-pills-9").addClass('show active');

                $("#v-pills-1-tab").removeClass('active');
                $("#v-pills-1").removeClass('show active');
                $("#v-pills-10").removeClass('show active');
                $("#v-pills-3").removeClass('show active');
                $("#v-pills-2").removeClass('show active');
                $("#v-pills-4").removeClass('show active');
                $("#v-pills-5").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-2-tab").removeClass("active");
                $("#v-pills-10-tab").removeClass("active");
                $("#v-pills-7-tab").removeClass("active");
                $("#v-pills-8-tab").removeClass("active");
                $("#v-pills-7").removeClass('show active');
                $("#v-pills-8").removeClass('show active');
            });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@php
    $metaInfo = App\Models\HomeMetaInformation::first();
    $metaid = null;
    if ($metaInfo) {
        $metaid = $metaInfo->id;
    }
@endphp
@php
    $aboutSection = App\Models\HomeAboutSection::first();
    $aboutId = null;
    if ($aboutSection) {
        $aboutId = $aboutSection->id;
    }
@endphp
@php
    $service = App\Models\HomeServiceSection::first();

    $serviceid = null;
    if ($service) {
        $serviceid = $service->id;
    }
@endphp
@php
    $schedule = App\Models\HomeScheduleSection::first();


    $scheduleId = null;
    if ($schedule) {
        $scheduleId = $schedule->id;
    }
@endphp

<script>
    $(document).ready(function() {
        $("#edit-form").submit(function(e) {
            e.preventDefault();

            var formData = {
                title: $("#edit-title").val(),
                description: $("#edit-shortdesc").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.metaupdate', ['id' => $metaid]) }}",
                data: formData,
                success: function(response) {

                    console.log(response);
                    alert('Meta IInformation Update Successfully !');
                },
                error: function(xhr, status, error) {

                    console.error(xhr.responseText);
                }
            });
        });

    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-about").submit(function(e) {
            e.preventDefault();

            var formData = {
                abouttitle: $("#edit-about-title").val(),
                aboutdesc: $("#edit-about-desc").val(),
                aboutstatus: $("input[name='aboutstatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.aboutUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('About Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-service").submit(function(e) {
            e.preventDefault();

            var formData = {
                servicetitle: $("#edit-service-title").val(),
                shortdesc: $("#edit-shortdesc").val(),
                servicestatus: $("input[name='servicestatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.serviceupdate', ['id' => $serviceid]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Service Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error, e.g., show error message
                }
            });
        });
    });
</script>



<script>
    $(document).ready(function() {
        $("#edit-schedule").submit(function(e) {
            e.preventDefault();

            var formData = {
                schedule_title: $("#edit-schedule-title").val(),
                schedule_desc: $("#edit-schedule-desc").val(),
                schedulestatus: $("input[name='schedulestatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.scheduleUpdate',['id' => $scheduleId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Schedule Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-member").submit(function(e) {
            e.preventDefault();

            var formData = {
                member_title: $("#edit-member-title").val(),
                member_desc: $("#edit-member-desc").val(),
                memberstatus: $("input[name='memberstatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.memberUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Member Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-portfolio").submit(function(e) {
            e.preventDefault();

            var formData = {
                portfolio_title: $("#edit-portfolio-title").val(),
                portfolio_desc: $("#edit-portfolio-desc").val(),
                portfoliostatus: $("input[name='portfoliostatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.portfolioUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Portfolio Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-testimonial").submit(function(e) {
            e.preventDefault();

            var formData = {
                testimonial_title: $("#edit-testimonial-title").val(),
                testimonial_desc: $("#edit-testimonial-desc").val(),
                testimonialstatus: $("input[name='testimonialstatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.testimonialUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Testimonial Section Update Successfully !');
                },
                error: function(xhr, testimonialstatus, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#edit-blog").submit(function(e) {
            e.preventDefault();

            var formData = {
                blog_title: $("#edit-blog-title").val(),
                blog_desc: $("#edit-blog-desc").val(),
                blogstatus: $("input[name='blogstatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.blogUpdate',['id' => $aboutId])}}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Blog Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#edit-event").submit(function(e) {
            e.preventDefault();

            var formData = {
                title: $("#edit-event-title").val(),
                subtitle: $("#edit-event-subtitle").val(),
                eventstatus: $("input[name='eventstatus']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.eventUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Event Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#edit-contactUs").submit(function(e) {
            e.preventDefault();

            var formData = {
                headline: $("#edit-contact-headline").val(),
                title: $("#edit-contact-title").val(),
                short_description: $("#edit-contact-desc").val(),
                map_location: $("#edit-contact-map-location").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.contactUsUpdate',['id' => $aboutId])}}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    alert('Contact Us Section Update Successfully !');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endpush
