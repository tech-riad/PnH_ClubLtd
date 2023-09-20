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
        // dd($request->all());

         $request->validate([
            'welcome_text'       => 'required',
            'slider_title'       => 'required',
            'slider_description' => 'required',
            'slider_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $slider = New SliderSection();

        if ($sliderImage = $request->file('slider_image')) {
            $destinationPath = 'slider/images/';
            $sliderImageName = date('YmdHis') . "." . $sliderImage->getClientOriginalExtension();
            $sliderImage->move($destinationPath, $sliderImageName);
            $slider['slider_image'] = $destinationPath . $sliderImageName;
        }

        $slider->welcome_text          = $request->welcome_text;
        $slider->slider_title          = $request->slider_title;
        $slider->slider_description    = $request->slider_description;


        $slider->save();

        return redirect()->route('admin.slider');



    }

    public function edit($id)
    {
        $slider = SliderSection::findOrFail($id);
        return view('backend.pagesettings.slider.edit',compact('slider'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slider = SliderSection::findOrFail($id);

        // Handle the image upload
        if ($request->hasFile('slider_image')) {
            // Delete the old image if it exists
            if (File::exists(public_path($slider->slider_image))) {
                File::delete(public_path($slider->slider_image));
            }

            $sliderImage = $request->file('slider_image');
            $destinationPath = public_path('slider/images/'); // Specify the local directory path
            $sliderImageName = date('YmdHis') . "." . $sliderImage->getClientOriginalExtension();
            $sliderImage->move($destinationPath, $sliderImageName);
            $slider->slider_image = 'slider/images/' . $sliderImageName; // Update with the local path
        }

        $slider->welcome_text = $request->input('welcome_text');
        $slider->slider_title = $request->input('slider_title');
        $slider->slider_description = $request->input('slider_description');

        $slider->save();

        return redirect()->route('admin.slider');

    }


    public function delete($id)
{
    $slider = SliderSection::findOrFail($id);

    // Delete the associated image if it exists
    if (File::exists(public_path($slider->slider_image))) {
        File::delete(public_path($slider->slider_image));
    }

    // Delete the slider record
    $slider->delete();

    return redirect()->route('admin.slider')->with('success', 'Slider and associated image deleted successfully');
}


}
