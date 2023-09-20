@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Add Slider</h1>

    <form action="{{ route('admin.slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Slider</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.slider') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Welcome Text</label>
                    <input type="text" name="welcome_text" class="form-control" value="{{@$slider->welcome_text ?? @old('welcome_text')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Slider Title</label>
                    <input type="text" name="slider_title" class="form-control" value="{{@$slider->slider_title ?? @old('slider_title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">Slider Sescription</label>
                    <textarea name="slider_description" class="form-control h_100" cols="30" rows="10">{{@$slider->slider_description ?? @old('slider_description')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Slider Photo *</label>
                    <div>
                        <input type="file" name="slider_image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('slider_image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('slider_image') is-invalid @enderror"><br>

                        <img class="mt-2" id="slider_image" alt="slider_image" width="100" height="100" />

                        @if (isset($slider) && $slider->slider_image)
                        <div class="old_slider_image mt-2">
                            <label class="mb-0" for="">Old slider_image:</label><br>
                            <img class="mt-2" id="oldslider_image" src="{{ asset($slider->slider_image) }}"
                                alt="slider_image" width="100" height="100" />
                        </div>
                    @endif
                    </div>

                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>


</div>

@endsection
