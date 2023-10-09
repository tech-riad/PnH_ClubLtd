<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IntroVideo;
use Illuminate\Http\Request;

class IntroVideoController extends Controller
{
    public function index()
    {
        $introVideo = IntroVideo::orderBy('id', 'desc')->get();
        return view('backend.pagesettings.introvideo.index',compact('introVideo'));
    }

    public function create()
    {
        return view('backend.pagesettings.introvideo.create');

    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'video_title'        => 'required|string|max:255',
            'video_description'  => 'required|string',
            'video_image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url'          => 'required|url',
        ]);

        // Handle image upload
        $videoImage       = $request->file('video_image');
        $destinationPath  = 'intro_videos/images/';
        $videoImageName   = date('YmdHis') . "." . $videoImage->getClientOriginalExtension();
        $videoImage->move($destinationPath, $videoImageName);

        $introVideo = new IntroVideo();

        $introVideo->video_title        = $request->input('video_title');
        $introVideo->video_description  = $request->input('video_description');
        $introVideo->video_image        = $destinationPath . $videoImageName;
        $introVideo->video_url          = $request->input('video_url');

        $introVideo->save();

        return redirect()->route('admin.introvideo')->with('success', 'Intro video added successfully.');
    }

    public function edit($id)
    {
        $introVideo = IntroVideo::findOrfail($id);
        return view('backend.pagesettings.introvideo.edit',compact('introVideo'));

    }


    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'video_title'        => 'required|string|max:255',
            'video_description'  => 'required|string',
            'video_image'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url'          => 'required|url',
        ]);

        $introVideo = IntroVideo::find($id);

        if (!$introVideo) {
            return redirect()->route('admin.introvideo')->with('error', 'Intro video not found.');
        }

        if ($videoImage = $request->file('video_image')) {
            $destinationPath = 'intro_videos/images/';
            $videoImageName  = date('YmdHis') . "." . $videoImage->getClientOriginalExtension();
            $videoImage->move($destinationPath, $videoImageName);

            if (file_exists(public_path($introVideo->video_image))) {
                unlink(public_path($introVideo->video_image));
            }

            $introVideo->video_image = $destinationPath . $videoImageName;
        }

        $introVideo->video_title        = $request->input('video_title');
        $introVideo->video_description  = $request->input('video_description');
        $introVideo->video_url          = $request->input('video_url');

        $introVideo->save();

        return redirect()->route('admin.introvideo')->with('success', 'Intro video updated successfully.');
    }



}
