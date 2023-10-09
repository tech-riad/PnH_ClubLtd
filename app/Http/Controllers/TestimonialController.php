<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('backend.pagesettings.testimonial.index',compact('testimonial'));
    }

    public function create()
    {
        return view('backend.pagesettings.testimonial.create');

    }
    public function edit($id)
        {
            $testimonial = Testimonial::find($id);

            if (!$testimonial) {
                return redirect()->route('admin.testimonialsection')->with('error', 'Testimonial not found.');
            }

            return view('backend.pagesettings.testimonial.edit', compact('testimonial'));
        }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'position'     => 'required|string|max:255',
            'description'  => 'required|string',
        ]);

        $testimonial = new Testimonial();

        $testimonial->name         = $request->input('name');
        $testimonial->position     = $request->input('position');
        $testimonial->description  = $request->input('description');

        $testimonial->save();

        return redirect()->route('admin.testimonialsection')->with('success', 'Testimonial added successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'string|max:255',
            'position'     => 'string|max:255',
            'description'  => 'string',
        ]);

        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return redirect()->route('admin.testimonialsection')->with('error', 'Testimonial not found.');
        }

        $testimonial->name        = $request->input('name');
        $testimonial->position    = $request->input('position');
        $testimonial->description = $request->input('description');

        $testimonial->save();

        return redirect()->route('admin.testimonialsection')->with('success', 'Testimonial updated successfully.');
    }

    public function delete($id)
    {
        $testimonial = Testimonial::find($id);

        if (!$testimonial) {
            return redirect()->route('admin.testimonialsection')->with('error', 'Testimonial not found.');
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonialsection')->with('success', 'Testimonial deleted successfully.');
    }
}
