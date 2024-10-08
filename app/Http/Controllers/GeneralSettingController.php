<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class GeneralSettingController extends Controller
{
    public function generalSetting()
    {
        $setting = GeneralSetting::first();
        return view('backend.generalsetting.setting',compact('setting'));

    }

    public function update(Request $request)
{
    $request->validate([
        'logo'            => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'white_logo'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'favicon'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        'phone'           => 'nullable|string',
        'email'           => 'nullable|email',
        'facebook_link'   => 'nullable|string',
        'twitter_link'    => 'nullable|string',
        'instagram_link'  => 'nullable|string',
        'linkedin_link'   => 'nullable|string',
        'address'         => 'nullable|string',
    ]);

    $generalSettings = GeneralSetting::firstOrFail();

    if ($request->hasFile('logo') && !empty($generalSettings->logo)) {
        $this->deleteImage($generalSettings->logo);
    }
    if ($request->hasFile('white_logo') && !empty($generalSettings->white_logo)) {
        $this->deleteImage($generalSettings->white_logo);
    }
    if ($request->hasFile('favicon') && !empty($generalSettings->favicon)) {
        $this->deleteImage($generalSettings->favicon);
    }

    $generalSettings->update([
        'phone'           => $request->input('phone'),
        'email'           => $request->input('email'),
        'facebook_link'   => $request->input('facebook_link'),
        'twitter_link'    => $request->input('twitter_link'),
        'instagram_link'  => $request->input('instagram_link'),
        'linkedin_link'   => $request->input('linkedin_link'),
        'address'         => $request->input('address'),
    ]);

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('uploads'), $logoName);
        $generalSettings->logo = 'uploads/' . $logoName;
    }

    if ($request->hasFile('white_logo')) {
        $whiteLogo = $request->file('white_logo');
        $whiteLogoName = time() . '.' . $whiteLogo->getClientOriginalExtension();
        $whiteLogo->move(public_path('uploads'), $whiteLogoName);
        $generalSettings->white_logo = 'uploads/' . $whiteLogoName;
    }

    if ($request->hasFile('favicon')) {
        $favicon = $request->file('favicon');
        $faviconName = time() . '.' . $favicon->getClientOriginalExtension();
        $favicon->move(public_path('uploads'), $faviconName);
        $generalSettings->favicon = 'uploads/' . $faviconName;
    }

    $generalSettings->save();
    $notification = array(
        'message' =>'Setting Update Successfull ',
        'alert-type' =>'info'
    );



    return redirect()->route('admin.setting')->with($notification);
}

private function deleteImage($imagePath)
    {
        if (file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
    }
}
