<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {

        $aboutdata = AboutSection::all();

        return view('backend.pagesettings.about.index',compact('aboutdata'));

    }

    public function create()
    {

        return view('backend.pagesettings.about.create');

    }

    public function store(Request $request)
    {
        // Validate the form data
         $request->validate([
            'about_title' => 'string|max:255',
            'about_description' => 'string',
            'about_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $aboutdata = New AboutSection();

        if ($aboutImage = $request->file('about_image')) {
            $destinationPath = 'about/images/';
            $aboutImageName = date('YmdHis') . "." . $aboutImage->getClientOriginalExtension();
            $aboutImage->move($destinationPath, $aboutImageName);
            $aboutdata['about_image'] = $destinationPath . $aboutImageName;
        }


        $aboutdata->about_title =$request->about_title;
        $aboutdata->about_description =$request->about_description;



        $aboutdata->save();



        return redirect()->route('admin.about')->with('success', 'About information added successfully.');
    }

    public function edit($id)
    {
        $aboutdata = AboutSection::findOrFail($id);


        return view('backend.pagesettings.about.edit',compact('aboutdata'));

    }

    public function update(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'about_title' => 'string|max:255',
        'about_description' => 'string',
        'about_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the AboutSection model instance to update
    $aboutdata = AboutSection::find($id);

    if (!$aboutdata) {
        return redirect()->route('admin.about')->with('error', 'About information not found.');
    }

    // Update the fields based on the request data
    $aboutdata->about_title = $request->input('about_title');
    $aboutdata->about_description = $request->input('about_description');

    // Handle image upload if a new image is provided
    if ($aboutImage = $request->file('about_image')) {
        $destinationPath = 'about/images/';
        $aboutImageName = date('YmdHis') . "." . $aboutImage->getClientOriginalExtension();
        $aboutImage->move($destinationPath, $aboutImageName);

        // Delete the old image if it exists
        if (file_exists(public_path($aboutdata->about_image))) {
            unlink(public_path($aboutdata->about_image));
        }

        $aboutdata->about_image = $destinationPath . $aboutImageName;
    }

    // Save the updated model
    $aboutdata->save();

    return redirect()->route('admin.about')->with('success', 'About information updated successfully.');
}
}
