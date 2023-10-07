<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\BlogController;
use App\Models\IntroVideo;
use App\Models\MemberSection;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\ServiceSection;
use App\Models\SliderSection;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $sliders      = SliderSection::orderBy('id', 'desc')->get();

        $services     = ServiceSection::orderBy('id', 'desc')->get();

        $about        = AboutSection::first();

        $members      = MemberSection::latest()->take(3)->get();

        $introvideo   = IntroVideo::latest()->first();

        $testimonials = Testimonial::latest()->take(4)->get();

        $blogs        = BlogController::latest()->take(3)->get();
        $portfolios   = Portfolio::latest()->take(6)->get();
        // dd($portfolios);

        $pages        = Page::all();



        return view('frontend.index',compact('sliders','services','about','members','introvideo',
                'testimonials','blogs','portfolios','pages'));
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('frontend.portfolio-details', compact('portfolio'));
    }
    public function newsShow($slug)
    {
        $blogs = BlogController::where('slug', $slug)->first();
        return view('frontend.blog-details', compact('blogs'));
    }
    public function pageShow($slug)
    {
        $pages = Page::where('slug', $slug)->first();
        return view('frontend.page-details', compact('pages'));
    }

    public function blogs()
    {
        $allblogs  = BlogController::orderBy('id', 'desc')->get();
        return view('frontend.blogs',compact('allblogs'));
    }

    public function abc()
    {
        $allportfolios  = Portfolio::orderBy('id', 'desc')->get();
        return view('frontend.portfolio.all',compact('allportfolios'));
    }

}
