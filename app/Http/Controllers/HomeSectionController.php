<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutSection;
use App\Models\HomeBlogSection;
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
        $blogSection          = HomeBlogSection::first();

        return view('backend.pagesettings.home',compact('metainfo','service','about','scheduleSection'
        ,'memberSection','portfolioSection','testimonialSection','blogSection'));
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
            'status' => 'required|in:Show,Hide',
        ]);

        $service->servicetitle = $validatedData['servicetitle'];
        $service->shortdesc = $validatedData['shortdesc'];
        $service->status = $validatedData['status'];

        $service->save();

        return response()->json(['success' => 'Service information updated successfully']);
    }

    // About

    public function aboutUpdate(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'abouttitle' => 'nullable|string',
            'aboutdesc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $about = HomeAboutSection::find($id);

        $about->abouttitle = $validatedData['abouttitle'];
        $about->aboutdesc = $validatedData['aboutdesc'];
        $about->status = $validatedData['status'];

        $about->save();

        return response()->json(['success' => 'About section updated successfully']);
    }

    // Schedule

    public function scheduleupdate(Request $request,$id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'schedule_title' => 'nullable|string',
            'schedule_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $scheduleSection = HomeScheduleSection::find($id);

        $scheduleSection->schedule_title = $validatedData['schedule_title'];
        $scheduleSection->schedule_desc = $validatedData['schedule_desc'];
        $scheduleSection->status = $validatedData['status'];

        $scheduleSection->save();

        return response()->json(['success' => 'Schedule section updated successfully']);
    }

    // MemberSection
    public function memberUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'member_title' => 'nullable|string',
            'member_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $memberSection = HomeMemberSection::find($id);

        $memberSection->member_title = $validatedData['member_title'];
        $memberSection->member_desc = $validatedData['member_desc'];
        $memberSection->status = $validatedData['status'];

        $memberSection->save();

        return response()->json(['success' => 'Member section updated successfully']);
    }

    // Portfolio

    public function portfolioUpdate(Request $request,$id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'portfolio_title' => 'nullable|string',
            'portfolio_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $portfolioSection = HomePortfolioSection::find($id);

        $portfolioSection->portfolio_title = $validatedData['portfolio_title'];
        $portfolioSection->portfolio_desc = $validatedData['portfolio_desc'];
        $portfolioSection->status = $validatedData['status'];

        $portfolioSection->save();

        return response()->json(['success' => 'Portfolio section updated successfully']);
    }

    public function testimonialUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'testimonial_title' => 'nullable|string',
            'testimonial_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $testimonialSection = HomeTestimonialSection::find($id);

        $testimonialSection->testimonial_title = $validatedData['testimonial_title'];
        $testimonialSection->testimonial_desc = $validatedData['testimonial_desc'];
        $testimonialSection->status = $validatedData['status'];

        $testimonialSection->save();

        return response()->json(['success' => 'Testimonial section updated successfully']);
    }

    // Blog Section

    public function blogUpdate(Request $request,$id)
    {
        $validatedData = $request->validate([
            'blog_title' => 'nullable|string',
            'blog_desc' => 'nullable|string',
            'status' => 'required|in:Show,Hide',
        ]);

        $blogSection = HomeBlogSection::find($id);

        $blogSection->blog_title = $validatedData['blog_title'];
        $blogSection->blog_desc = $validatedData['blog_desc'];
        $blogSection->status = $validatedData['status'];

        $blogSection->save();

        return response()->json(['success' => 'Blog section updated successfully']);
    }



}
