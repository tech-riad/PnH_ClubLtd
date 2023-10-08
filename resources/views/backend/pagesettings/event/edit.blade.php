@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Create</h1>

    <form action="{{route('admin.events.update',$event->id)}}" method="post" enctype="multipart/form-data"  >
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Event</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.events') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title *</label>
                    <input type="text" name="title" class="form-control" value="{{@$event->title ?? @old('title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Button Name *</label>
                    <input type="text" name="btn_name" class="form-control" value="{{@$event->btn_name ?? @old('btn_name')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Button URL * </label>
                    <input type="text" name="btn_link" class="form-control" value="{{@$event->btn_link ?? @old('btn_link')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Event Image *</label>
                    <div>
                        <input type="file" name="event_image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('event_image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('event_image') is-invalid @enderror"><br>

                        <img class="mt-2" id="event_image" alt="event_image" width="100" height="100" />

                        @if (isset($event) && $event->event_image)
                            <div class="old_event_image mt-2">
                                <label class="mb-0" for="">Old Member Image:</label><br>
                                <img class="mt-2" id="oldevent_image" src="{{ asset($event->event_image) }}"
                                    alt="event_image" width="100" height="100" />
                            </div>
                        @endif
                    </div>

                </div>

                <div class="form-group">
                    <label for="">Description *</label>
                    <textarea class="editor" name="description" class="form-control h_100" cols="30" rows="10">{{@$event->description ?? @old('description')}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>


</div>

@endsection


