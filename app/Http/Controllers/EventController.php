<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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
            'title'          => 'string|max:255',
            'btn_name'       => 'string|nullable',
            'btn_link'       => 'string|nullable',
            'description'    => 'string|required',
            'event_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $event  = new Event();

        $event->title         = $request->title;
        $event->btn_name      = $request->btn_name;
        $event->btn_link      = $request->btn_link;
        $event->description   = $request->description;


        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('eventimage'), $imageName);
            $event->event_image = 'eventimage/' . $imageName;
        }

        $event->save();

        return redirect()->route('admin.events')->with(['message'=>'Event Create Successfully']);

    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('backend.pagesettings.event.edit',compact('event'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'          => 'string|max:255',
            'btn_name'       => 'string|nullable',
            'btn_link'       => 'string|nullable',
            'description'    => 'string|required',
            'event_image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $event = Event::findOrFail($id);
        $event->title         = $request->title;
        $event->btn_name      = $request->btn_name;
        $event->btn_link      = $request->btn_link;
        $event->description   = $request->description;


        if ($request->hasFile('event_image')) {
            $event_image = $request->file('event_image');
            $event_imageName = time() . '_view.' . $event_image->getClientOriginalExtension();
            $event_image->move(public_path('eventimage'), $event_imageName);

            if ($event->event_image && file_exists(public_path($event->event_image))) {
                unlink(public_path($event->event_image));
            }

            $event->event_image = 'eventimage/' . $event_imageName;
        }

        $event->save();

        return redirect()->route('admin.events')->with(['message'=>'Event Update Successfully']);

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
