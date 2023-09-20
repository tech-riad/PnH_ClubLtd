<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ServiceSection;
use Illuminate\Http\Request;

class ServiceSectionController extends Controller
{
    public function index()
    {
        $services = ServiceSection::all();
        return view('backend.pagesettings.service.index',compact('services'));
    }
    public function create()
    {
        return view('backend.pagesettings.service.create');

    }
    public function store(Request $request)
        {

            $validatedData = $request->validate([
                'service_title' => 'required|string|max:255',
                'service_icon_tag' => 'required|string|max:255',
                'service_description' => 'nullable|string',
            ]);

            $service = new ServiceSection();
            $service->service_title = $validatedData['service_title'];
            $service->service_icon_tag = $validatedData['service_icon_tag'];
            $service->service_description = $validatedData['service_description'];

            $service->save();

            return redirect()->route('admin.services')->with('success', 'Service section added successfully');
        }
            public function edit($id)
            {
                $services = ServiceSection::findOrFail($id);

                return view('backend.pagesettings.service.edit',compact('services'));

            }
            public function update(Request $request,$id)
            {
                $validatedData = $request->validate([
                    'service_title' => 'nullable|string|max:255',
                    'service_icon_tag' => 'nullable|string|max:255',
                    'service_description' => 'nullable|string',
                ]);
                $service = ServiceSection::findOrFail($id);
                $service->service_title = $validatedData['service_title'];
                $service->service_icon_tag = $validatedData['service_icon_tag'];
                $service->service_description = $validatedData['service_description'];

                $service->save();

                return redirect()->route('admin.services')->with('success', 'Service section updated successfully');
            }

            public function delete($id)
            {
                $service = ServiceSection::findOrFail($id);

                $service->delete();
                return redirect()->route('admin.services')->with('success', 'Service Deleted successfully');



            }
}
