<?php

use App\Models\AboutSection;
use App\Models\GeneralSetting;
use App\Models\HomeAboutSection;
use App\Models\HomeBlogSection;
use App\Models\HomeContactUsSection;
use App\Models\HomeMemberSection;
use App\Models\HomeMetaInformation;
use App\Models\HomePortfolioSection;
use App\Models\HomeServiceSection;
use App\Models\HomeTestimonialSection;
use App\Models\IntroVideo;
use App\Models\Page;
use App\Models\User;

class helper
{
    public static function getServiceSection()
    {
        return HomeServiceSection::first();
    }

    public static function getAboutSection()
    {
        return HomeAboutSection::first();
    }
    public static function getMemberSection()
    {
        return HomeMemberSection::first();
    }
    public static function getPortfolioSection()
    {
        return HomePortfolioSection::first();
    }
    public static function getTestimonialSection()
    {
        return HomeTestimonialSection::first();
    }
    public static function getBlogSection()
    {
        return HomeBlogSection::first();
    }
    public static function getAboutId()
    {
        return AboutSection::first();
    }
    public static function getLatestVideoThumb()
    {
        return IntroVideo::latest()->first();
    }
    public static function getLatestsetting()
    {
        return GeneralSetting::latest()->first();
    }
    public static function getContactUs()
    {
        return HomeContactUsSection::latest()->first();
    }
    public static function pageName()
    {
        return Page::all();
    }
    public static function pageContent($slug)
    {
        return Page::where('slug',$slug)->first();
    }

    public static function metaInformation()
    {
        return HomeMetaInformation::first();
    }
    // public static function getUser()
    // {
    //     return User::first();
    // }

}
