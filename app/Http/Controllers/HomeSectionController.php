<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutSection;
use App\Models\HomeMemberSection;
use App\Models\HomeMetaInformation;
use App\Models\HomePortfolioSection;
use App\Models\HomeScheduleSection;
use App\Models\HomeServiceSection;
use App\Models\HomeTestimonialSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $metainfo             = HomeMetaInformation::first();
        $service              = HomeServiceSection::first();
        $about                = HomeAboutSection::first();
        $scheduleSection      = HomeScheduleSection::first();
        $memberSection        = HomeMemberSection::first();
        $portfolioSection     = HomePortfolioSection::first();
        $testimonialSection   = HomeTestimonialSection::first();

        return view('backend.pagesettings.home',compact('metainfo','service','about','scheduleSection'
        ,'memberSection','portfolioSection','testimonialSection'));
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

    // MemberSection
    public function memberUpdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'member_title' => 'nullable|string',
            'member_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        // Create or update the 'home_member_sections' record in the database
        $memberSection = HomeMemberSection::firstOrNew([]);

        $memberSection->member_title = $validatedData['member_title'];
        $memberSection->member_desc = $validatedData['member_desc'];
        $memberSection->status = $validatedData['status'];

        $memberSection->save();

        return response()->json(['success' => 'Member section updated successfully']);
    }

    // Portfolio

    public function portfolioUpdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'portfolio_title' => 'nullable|string',
            'portfolio_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        // Create or update the 'home_portfolio_sections' record in the database
        $portfolioSection = HomePortfolioSection::firstOrNew([]);

        $portfolioSection->portfolio_title = $validatedData['portfolio_title'];
        $portfolioSection->portfolio_desc = $validatedData['portfolio_desc'];
        $portfolioSection->status = $validatedData['status'];

        $portfolioSection->save();

        return response()->json(['success' => 'Portfolio section updated successfully']);
    }

    public function testimonialUpdate(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'testimonial_title' => 'nullable|string',
            'testimonial_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        // Create or update the 'home_testimonial_sections' record in the database
        $testimonialSection = HomeTestimonialSection::firstOrNew([]);

        $testimonialSection->testimonial_title = $validatedData['testimonial_title'];
        $testimonialSection->testimonial_desc = $validatedData['testimonial_desc'];
        $testimonialSection->status = $validatedData['status'];

        $testimonialSection->save();

        return response()->json(['success' => 'Testimonial section updated successfully']);
    }



}
