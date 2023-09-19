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
                                    <input type="text" name="servicetitle" id="edit-service-title" class="form-control" value="{{ $service->servicetitle ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-shortdesc">Short Description</label>
                                    <input type="text" name="shortdesc" id="edit-shortdesc" class="form-control" value="{{ $service->shortdesc ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Show" {{ $service->status === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Hide" {{ $service->status === 'Hide' ? 'checked' : '' }}>
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
                                    <input type="text" name="abouttitle" id="edit-about-title" class="form-control" value="{{ $about->abouttitle ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-about-desc">Short Description</label>
                                    <input type="text" name="aboutdesc" id="edit-about-desc" class="form-control" value="{{ $about->aboutdesc ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-about-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-about-status-show" value="Show" {{ $about->status === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-about-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-about-status-hide" value="Hide" {{ $about->status === 'Hide' ? 'checked' : '' }}>
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
                                    <input type="text" name="schedule_title" id="edit-schedule-title" class="form-control" value="{{ $scheduleSection->schedule_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-schedule-desc">Description</label>
                                    <textarea name="schedule_desc" id="edit-schedule-desc" class="form-control">{{ $scheduleSection->schedule_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-schedule-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-schedule-status-show" value="Show" {{ $scheduleSection->status === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-schedule-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-schedule-status-hide" value="Hide" {{ $scheduleSection->status === 'Hide' ? 'checked' : '' }}>
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
                                    <input type="text" name="member_title" id="edit-member-title" class="form-control" value="{{ $memberSection->member_title ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="edit-member-desc">Description</label>
                                    <textarea name="member_desc" id="edit-member-desc" class="form-control">{{ $memberSection->member_desc ?? '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="edit-member-status">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-member-status-show" value="Show" {{ $memberSection->status === 'Show' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-member-status-show">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="edit-member-status-hide" value="Hide" {{ $memberSection->status === 'Hide' ? 'checked' : '' }}>
                                            <label class="form-check-label font-weight-normal" for="edit-member-status-hide">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="update-member-button" class="btn btn-success">Update</button>
                            </form>

                            <!-- // Tab 4 -->
                        </div>
                        {{--<div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                            <!-- Tab 5 -->
                            <form action="https://agmesconsultants.com/admin/page/home/5" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="current_photo" value="testimonial_bg.jpeg">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="testimonial_title" class="form-control" value="Testimonial">
                                </div>
                                <div class="form-group">
                                    <label for="">Subtitle</label>
                                    <input type="text" name="testimonial_subtitle" class="form-control" value="What our clients tell about us">
                                </div>
                                <div class="form-group">
                                    <label for="">Existing Background</label>
                                    <div><img src="https://agmesconsultants.com/public/uploads/testimonial_bg.jpeg" alt="" class="w_200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Change Background</label>
                                    <div><input type="file" name="testimonial_bg"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="testimonial_status" id="rr1" value="Show">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="testimonial_status" id="rr2" value="Hide" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 5 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                            <!-- Tab 6 -->
                            <form action="https://agmesconsultants.com/admin/page/home/6" method="post">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="project_title" class="form-control" value="Our Projects">
                                </div>
                                <div class="form-group">
                                    <label for="">Subtitle</label>
                                    <input type="text" name="project_subtitle" class="form-control" value="Some of Our Featured Projects">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="project_status" id="rr1" value="Show" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="project_status" id="rr2" value="Hide">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 6 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                            <!-- Tab 7 -->
                            <form action="https://agmesconsultants.com/admin/page/home/7" method="post">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="team_member_title" class="form-control" value="Team Members">
                                </div>
                                <div class="form-group">
                                    <label for="">Subtitle</label>
                                    <input type="text" name="team_member_subtitle" class="form-control" value="See all our expert team members who are ready to help you always">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="team_member_status" id="rr1" value="Show" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="team_member_status" id="rr2" value="Hide">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 7 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                            <!-- Tab 8 -->
                            <form action="https://agmesconsultants.com/admin/page/home/8" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="current_photo" value="appointment_bg.jpeg">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="appointment_title" class="form-control" value="Want to hire us for your business?">
                                </div>
                                <div class="form-group">
                                    <label for="">Text</label>
                                    <textarea name="appointment_text" class="form-control h_100" cols="30" rows="10">If you want to take our service to build your business, our expert team members are always here to help you to make you successful.</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Button Text</label>
                                    <input type="text" name="appointment_btn_text" class="form-control" value="Make An Appointment">
                                </div>
                                <div class="form-group">
                                    <label for="">Button URL</label>
                                    <input type="text" name="appointment_btn_url" class="form-control" value="/contact">
                                </div>
                                <div class="form-group">
                                    <label for="">Existing Background</label>
                                    <div><img src="https://agmesconsultants.com/public/uploads/appointment_bg.jpeg" alt="" class="w_200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Change Background</label>
                                    <div><input type="file" name="appointment_bg"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="appointment_status" id="rr1" value="Show" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="appointment_status" id="rr2" value="Hide">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 8 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                            <!-- Tab 9 -->
                            <form action="https://agmesconsultants.com/admin/page/home/9" method="post">
                                <input type="hidden" name="_token" value="u2lbaoQ57lgdG3rdwH04ufhtWR37eBOSzpDTbxv8">                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="latest_blog_title" class="form-control" value="Latest News &amp; Events">
                                </div>
                                <div class="form-group">
                                    <label for="">Subtitle</label>
                                    <input type="text" name="latest_blog_subtitle" class="form-control" value="See all the latest blog about our activity from here">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="latest_blog_status" id="rr1" value="Show">
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="latest_blog_status" id="rr2" value="Hide" checked="">
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 9 -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
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
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
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
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
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
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-4-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
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
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");

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
                $("#v-pills-11-tab").removeClass("active");
                $("#v-pills-6-tab").removeClass("active");
                $("#v-pills-3-tab").removeClass("active");
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

<script>
    $(document).ready(function() {
        $("#edit-form").submit(function(e) {
            e.preventDefault();

            var formData = {
                title: $("#edit-title").val(),
                description: $("#edit-shortdesc").val(),
                _token: $("input[name='_token']").val()
            };

            // Send the AJAX request
            $.ajax({
                type: "POST",
                url: "{{ route('admin.metaupdate', ['id' => $metaid]) }}",
                data: formData,
                success: function(response) {

                    console.log(response);
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
                status: $("input[name='status']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.serviceupdate', ['id' => $serviceid]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle success, e.g., show success message
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
        $("#edit-about").submit(function(e) {
            e.preventDefault();

            var formData = {
                abouttitle: $("#edit-about-title").val(),
                aboutdesc: $("#edit-about-desc").val(),
                status: $("input[name='status']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.aboutUpdate',['id' => $aboutId]) }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle success, e.g., show success message
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
                status: $("input[name='status']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.scheduleUpdate') }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle success, e.g., show success message
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
        $("#edit-member").submit(function(e) {
            e.preventDefault();

            var formData = {
                member_title: $("#edit-member-title").val(),
                member_desc: $("#edit-member-desc").val(),
                status: $("input[name='status']:checked").val(),
                _token: $("input[name='_token']").val()
            };

            $.ajax({
                type: "POST",
                url: "{{ route('admin.memberUpdate') }}",
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle success, e.g., show success message
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Handle error, e.g., show error message
                }
            });
        });
    });
</script>







@endpush
