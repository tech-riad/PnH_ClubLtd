<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutSection;
use App\Models\HomeMetaInformation;
use App\Models\HomeScheduleSection;
use App\Models\HomeServiceSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $metainfo  = HomeMetaInformation::first();
        $service   = HomeServiceSection::first();
        $about   = HomeAboutSection::first();
        $scheduleSection   = HomeScheduleSection::first();

        return view('backend.pagesettings.home',compact('metainfo','service','about','scheduleSection'));
    }

    public function metaupdate(Request $request,$id)
    {
        $metainfo = HomeMetaInformation::find($id);

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $metainfo->title = $validatedData['title'];
        $metainfo->description = $validatedData['description'];

        $metainfo->save();

        return response()->json(['success' => 'Meta information updated successfully']);

    }
    // Service
    public function serviceupdate(Request $request, $id)
    {
        $service = HomeServiceSection::find($id);

        if (!$service) {
            return response()->json(['error' => 'Service not found'], 404);
        }

        $validatedData = $request->validate([
            'servicetitle' => 'required',
            'shortdesc' => 'required',
            'status' => 'required|in:Show,Hide', // Assuming the status should be one of these values
        ]);

        $service->servicetitle = $validatedData['servicetitle'];
        $service->shortdesc = $validatedData['shortdesc'];
        $service->status = $validatedData['status'];

        $service->save();

        return response()->json(['success' => 'Service information updated successfully']);
    }

    // About

    public function aboutUpdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'abouttitle' => 'nullable|string',
            'aboutdesc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        // Create or update the 'about' section in the database
        $about = HomeAboutSection::firstOrNew([]); // Adjust the query as needed

        $about->abouttitle = $validatedData['abouttitle'];
        $about->aboutdesc = $validatedData['aboutdesc'];
        $about->status = $validatedData['status'];

        $about->save();

        return response()->json(['success' => 'About section updated successfully']);
    }

    // Schedule

    public function scheduleupdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'schedule_title' => 'nullable|string',
            'schedule_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        // Create or update the 'home_schedule_sections' record in the database
        $scheduleSection = HomeScheduleSection::firstOrNew([]);

        $scheduleSection->schedule_title = $validatedData['schedule_title'];
        $scheduleSection->schedule_desc = $validatedData['schedule_desc'];
        $scheduleSection->status = $validatedData['status'];

        $scheduleSection->save();

        return response()->json(['success' => 'Schedule section updated successfully']);
    }



}
