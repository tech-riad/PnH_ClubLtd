<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events  = Event::all();
        return view('backend.pagesettings.event.index',compact('events'));

    }

    public function create()
    {
        return view('backend.pagesettings.event.create');
    }

    public function store(Request $request)
    {
          $request->validate([
            'event_name' => 'required|string|max:255',
            'event_cost' => 'required|numeric',
            'event_contact' => 'required|string|max:255',
            'event_mail' => 'required|string|email|max:255',
            'event_location' => 'required|string|max:255',
            'event_map_location' => 'required|string|max:255',
            'event_date' => 'required',
            'event_time' => 'required|string|max:255',
            'btn_name' => 'required|string|max:255',
            'event_front_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'event_details_image' => 'required|array',
            'event_details_image.*' => 'image|mimes:jpeg,png,jpg,gif',

        ]);

        $event = new Event();
        $event->event_name = $request->event_name;
        $event->event_slug = Str::slug($request->event_name);
        $event->event_cost = $request->event_cost;
        $event->event_contact = $request->event_contact;
        $event->event_mail = $request->event_mail;
        $event->event_location = $request->event_location;
        $event->event_map_location = $request->event_map_location;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->btn_name = $request->btn_name;
        $event->description = $request->description;

        if ($request->hasFile('event_front_image')) {
            $frontImage = $request->file('event_front_image');
            $frontImageName = time() . '.' . $frontImage->getClientOriginalExtension();
            $frontImage->move(public_path('event_front_images'), $frontImageName);
            $event->event_front_image = 'event_front_images/' . $frontImageName;
        }

        if ($request->hasFile('event_details_image')) {
            $eventImagePaths = [];
            foreach ($request->file('event_details_image') as $eventImage) {
                $eventImageName = time() . '_' . rand(100, 999) . '.' . $eventImage->getClientOriginalExtension();
                $eventImage->move(public_path('event_details_images'), $eventImageName);
                $eventImagePaths[] = 'event_details_images/' . $eventImageName;
            }
            $event->event_details_image = json_encode($eventImagePaths);
        }

        $event->save();

        return redirect()->route('admin.events')->with('success', 'Event created successfully');
    }
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('backend.pagesettings.event.edit',compact('event'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_cost' => 'required|numeric',
            'event_contact' => 'required|string|max:255',
            'event_mail' => 'required|string|email|max:255',
            'event_location' => 'required|string|max:255',
            'event_map_location' => 'required|string|max:255',
            'event_date' => 'required',
            'event_time' => 'required|string|max:255',
            'btn_name' => 'required|string|max:255',
            'event_front_image' => 'image|mimes:jpeg,png,jpg,gif',
            'event_details_image' => 'array',
            'event_details_image.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $event = Event::findOrFail($id);

        $event->event_name = $request->event_name;
        $event->event_slug = Str::slug($request->event_name);
        $event->event_cost = $request->event_cost;
        $event->event_contact = $request->event_contact;
        $event->event_mail = $request->event_mail;
        $event->event_location = $request->event_location;
        $event->event_map_location = $request->event_map_location;
        $event->event_date = $request->event_date;
        $event->event_time = $request->event_time;
        $event->btn_name = $request->btn_name;
        $event->description = $request->description;

        if ($request->hasFile('event_front_image')) {
            if ($event->event_front_image && file_exists(public_path($event->event_front_image))) {
                unlink(public_path($event->event_front_image));
            }
            
            $frontImage = $request->file('event_front_image');
            $frontImageName = time() . '.' . $frontImage->getClientOriginalExtension();
            $frontImage->move(public_path('event_front_images'), $frontImageName);
            $event->event_front_image = 'event_front_images/' . $frontImageName;


        }

        $oldProfileImagePaths = json_decode($event->slider_profile_image, true) ?? [];
        if ($request->hasFile('slider_profile_image')) {
            $profileImagePaths = [];
            foreach ($request->file('slider_profile_image') as $profileImage) {
                $profileImageName = time() . '_' . rand(100, 999) . '.' . $profileImage->getClientOriginalExtension();
                $profileImage->move(public_path('profile_images'), $profileImageName);
                $profileImagePaths[] = 'profile_images/' . $profileImageName;
            }
            $event->slider_profile_image = json_encode($profileImagePaths);

            foreach ($oldProfileImagePaths as $oldProfileImagePath) {
                if (file_exists(public_path($oldProfileImagePath))) {
                    unlink(public_path($oldProfileImagePath));
                }
            }
        }

        $event->save();

        return redirect()->route('admin.events')->with('success', 'Event updated successfully');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if (file_exists(public_path($event->event_image))) {
            unlink(public_path($event->event_image));
        }

        $event->delete();

        return redirect()->route('admin.events')->with(['message'=>'Event Delete Successfully']);

    }
}
