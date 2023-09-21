<?php

use App\Models\HomeAboutSection;
use App\Models\HomeServiceSection;

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
}
