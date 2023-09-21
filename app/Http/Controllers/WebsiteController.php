<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection;
use App\Models\SliderSection;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {

        $sliders = SliderSection::orderBy('id', 'desc')->get();

        $services = ServiceSection::orderBy('id', 'desc')->get();

        return view('frontend.index',compact('sliders','services'));
    }
}
