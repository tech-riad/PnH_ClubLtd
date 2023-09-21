<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use App\Models\IntroVideo;
use App\Models\MemberSection;
use App\Models\ServiceSection;
use App\Models\SliderSection;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $sliders = SliderSection::orderBy('id', 'desc')->get();

        $services = ServiceSection::orderBy('id', 'desc')->get();

        $about = AboutSection::first();

        $members = MemberSection::latest()->take(3)->get();

        $introvideo = IntroVideo::latest()->first();

        $testimonials  = Testimonial::latest()->take(4)->get();

        return view('frontend.index',compact('sliders','services','about','members','introvideo',
                'testimonials'));
    }
}
