<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SliderSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderSectionController extends Controller
{
    public function index()
    {
        $slider = SliderSection::all();
        return view('backend.pagesettings.slider.slider',compact('slider'));
    }

    public function create()
    {
        return view('backend.pagesettings.slider.create');
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'welcome_text' => 'string',
        //     'slider_title' => 'string',
        //     'slider_description' => 'string',
        //     'slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'slider_profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'slider_profile_button_name' => 'string',
        //     'slider_profile_button_url' => 'string',
        // ]);

        $sliderSection = new SliderSection();

        $sliderSection->welcome_text = $request->input('welcome_text');
        $sliderSection->slider_title = $request->input('slider_title');
        $sliderSection->slider_description = $request->input('slider_description');

        if ($request->hasFile('slider_image')) {
            $sliderImage = $request->file('slider_image');
            $sliderImageName = time() . '.' . $sliderImage->getClientOriginalExtension();
            $sliderImage->move(public_path('slider_images'), $sliderImageName);
            $sliderSection->slider_image = 'slider_images/' . $sliderImageName;
        }

        if ($request->hasFile('slider_profile_image')) {
            $profileImagePaths = [];
            foreach ($request->file('slider_profile_image') as $profileImage) {
                $profileImageName = time() . '_' . rand(100, 999) . '.' . $profileImage->getClientOriginalExtension();
                $profileImage->move(public_path('profile_images'), $profileImageName);
                $profileImagePaths[] = 'profile_images/' . $profileImageName;
            }
            $sliderSection->slider_profile_image = json_encode($profileImagePaths);
        }

        $sliderSection->slider_profile_button_name = $request->input('slider_profile_button_name');
        $sliderSection->slider_profile_button_url = $request->input('slider_profile_button_url');

        $sliderSection->save();


        return redirect()->route('admin.slider')->with('success', 'Slider added successfully.');
    }


    public function edit($id)
    {
        $slider = SliderSection::findOrFail($id);
        return view('backend.pagesettings.slider.edit',compact('slider'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'welcome_text' => 'string|nullable',
            'slider_title' => 'string|nullable',
            'slider_description' => 'string|nullable',
            'slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'slider_profile_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'slider_profile_button_name' => 'string|nullable',
            'slider_profile_button_url' => 'string|nullable',
        ]);

        $sliderSection = SliderSection::findOrFail($id);

        // Get the old profile image paths
        $oldProfileImagePaths = json_decode($sliderSection->slider_profile_image);

        $sliderSection->welcome_text = $request->input('welcome_text');
        $sliderSection->slider_title = $request->input('slider_title');
        $sliderSection->slider_description = $request->input('slider_description');

        if ($request->hasFile('slider_image')) {
            $sliderImage = $request->file('slider_image');
            $sliderImageName = time() . '.' . $sliderImage->getClientOriginalExtension();
            $sliderImage->move(public_path('slider_images'), $sliderImageName);
            $sliderSection->slider_image = 'slider_images/' . $sliderImageName;

            if ($sliderSection->slider_image && file_exists(public_path($sliderSection->slider_image))) {
                unlink(public_path($sliderSection->slider_image));
            }
        }

        if ($request->hasFile('slider_profile_image')) {
            $profileImagePaths = [];
            foreach ($request->file('slider_profile_image') as $profileImage) {
                $profileImageName = time() . '_' . rand(100, 999) . '.' . $profileImage->getClientOriginalExtension();
                $profileImage->move(public_path('profile_images'), $profileImageName);
                $profileImagePaths[] = 'profile_images/' . $profileImageName;
            }
            $sliderSection->slider_profile_image = json_encode($profileImagePaths);

            foreach ($oldProfileImagePaths as $oldProfileImagePath) {
                if (file_exists(public_path($oldProfileImagePath))) {
                    unlink(public_path($oldProfileImagePath));
                }
            }
        }

        $sliderSection->slider_profile_button_name = $request->input('slider_profile_button_name');
        $sliderSection->slider_profile_button_url = $request->input('slider_profile_button_url');

        $sliderSection->save();

        return redirect()->route('admin.slider')->with('success', 'Slider updated successfully.');
    }

    public function delete($id)
    {
        $sliderSection = SliderSection::findOrFail($id);

        if ($sliderSection->slider_image && file_exists(public_path($sliderSection->slider_image))) {
            unlink(public_path($sliderSection->slider_image));
        }

        if ($sliderSection->slider_profile_image) {
            $profileImagePaths = json_decode($sliderSection->slider_profile_image);
            foreach ($profileImagePaths as $profileImagePath) {
                if (file_exists(public_path($profileImagePath))) {
                    unlink(public_path($profileImagePath));
                }
            }
        }
        $sliderSection->delete();

        return redirect()->route('admin.slider')->with('success', 'Slider deleted successfully.');
    }


}
