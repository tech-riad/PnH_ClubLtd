<?php

use App\Models\AboutSection;
use App\Models\GeneralSetting;
use App\Models\HomeAboutSection;
use App\Models\HomeBlogSection;
use App\Models\HomeMemberSection;
use App\Models\HomePortfolioSection;
use App\Models\HomeServiceSection;
use App\Models\HomeTestimonialSection;
use App\Models\IntroVideo;

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
}
