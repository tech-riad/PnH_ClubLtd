@extends('backend.layouts.master')

@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-3 text-gray-800">Edit</h1>

    <form action="{{route('admin.about.update',$aboutdata->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Section Data</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.about') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">About Title *</label>
                    <input type="text" name="about_title" class="form-control" value="{{@$aboutdata->about_title ?? @old('about_title')}}" autofocus="">
                </div>
                <div class="form-group">
                    <label for="">About Description *</label>
                    <textarea name="about_description" class="form-control h_100" cols="30" rows="10">{{@$aboutdata->about_description ?? @old('about_description')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Image*</label>
                    <div>
                        <input type="file" name="about_image" class="custom-file-input" id="customFile"
                        onchange="document.getElementById('about_image').src = window.URL.createObjectURL(this.files[0])"
                        class="@error('about_image') is-invalid @enderror"><br>

                        <img class="mt-2" id="about_image" alt="about_image" width="100" height="100" />

                        @if (isset($aboutdata) && $aboutdata->about_image)
                        <div class="old_about_image mt-2">
                            <label class="mb-0" for="">Old about_image:</label><br>
                            <img class="mt-2" id="oldabout_image" src="{{ asset($aboutdata->about_image) }}"
                                alt="about_image" width="100" height="100" />
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
