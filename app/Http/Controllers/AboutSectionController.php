<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Exception;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    public function index()
    {

        $aboutdata = AboutSection::all();

        return view('backend.pagesettings.about.index',compact('aboutdata'));

    }

    // public function create()
    // {

    //     return view('backend.pagesettings.about.create');

    // }

    // public function store(Request $request)
    // {
    //     // Validate the form data
    //      $request->validate([
    //         'about_title' => 'string|max:255',
    //         'about_description' => 'string',
    //         'about_image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $aboutdata = New AboutSection();

    //     if ($aboutImage = $request->file('about_image')) {
    //         $destinationPath = 'about/images/';
    //         $aboutImageName = date('YmdHis') . "." . $aboutImage->getClientOriginalExtension();
    //         $aboutImage->move($destinationPath, $aboutImageName);
    //         $aboutdata['about_image'] = $destinationPath . $aboutImageName;
    //     }


    //     $aboutdata->about_title =$request->about_title;
    //     $aboutdata->about_description =$request->about_description;



    //     $aboutdata->save();



    //     return redirect()->route('admin.about')->with('success', 'About information added successfully.');
    // }

    public function edit($id)
    {
        $aboutdata = AboutSection::findOrFail($id);


        return view('backend.pagesettings.about.edit',compact('aboutdata'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'about_title' => 'string|max:255',
            'about_description' => 'string',
            'about_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'about_image_additional' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $aboutdata = AboutSection::find($id);

        if (!$aboutdata) {
            return redirect()->route('admin.about')->with('error', 'About information not found.');
        }

        $aboutdata->about_title = $request->input('about_title');
        $aboutdata->about_description = $request->input('about_description');

        if ($aboutImage = $request->file('about_image')) {
            $destinationPath = 'about/images/';
            $aboutImageName = date('YmdHis') . "." . $aboutImage->getClientOriginalExtension();
            $aboutImage->move($destinationPath, $aboutImageName);

            try{
                if (file_exists(public_path($aboutdata->about_image))) {
                    unlink(public_path($aboutdata->about_image));
                }
            }
            catch(Exception $e){}



            $aboutdata->about_image = $destinationPath . $aboutImageName;
        }

        if ($aboutImageAdditional = $request->file('about_image_additional')) {
            $destinationPath = 'about/images/';
            $aboutImageAdditionalName = date('YmdHis') . "." . $aboutImageAdditional->getClientOriginalExtension();
            $aboutImageAdditional->move($destinationPath, $aboutImageAdditionalName);

            try{

                if (file_exists(public_path($aboutdata->about_image_additional))) {
                    unlink(public_path($aboutdata->about_image_additional));
                }
            }catch(Exception $e){}

            $aboutdata->about_image_additional = $destinationPath . $aboutImageAdditionalName;
        }

        $aboutdata->save();

        return redirect()->back()->with('success', 'About information updated successfully.');
    }
}
