<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contactus');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'number'  => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contactUs = new ContactUs();

        $contactUs->name     = $request->input('name');
        $contactUs->email    = $request->input('email');
        $contactUs->number   = $request->input('number');
        $contactUs->subject  = $request->input('subject');
        $contactUs->message  = $request->input('message');

        $contactUs->save();

        return response()->json(['message' => 'Message sent successfully']);
    }
}
