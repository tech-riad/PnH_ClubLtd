<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('backend.pagesettings.pages.index',compact('pages'));
    }
    public function create()
    {
        return view('backend.pagesettings.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'description' => 'nullable|string',
        ]);
        $page = new Page();

        $page->title = $request->input('title');
        $page->slug = Str::slug($request->title);
        $page->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('pageimages'), $imageName);
            $page->image = 'pageimages/' . $imageName;
        }

        $page->save();

        return redirect()->route('admin.pages')->with('success', 'Blog post created successfully.');
    }

    public function edit($id)
    {
        $pages = Page::findOrFail($id);

        return view('backend.pagesettings.pages.edit',compact('pages'));


    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'description' => 'nullable|string',
        ]);

        $pages = Page::find($id);



        $pages->title = $request->input('title');
        $pages->slug = Str::slug($request->title);
        $pages->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('pageimages'), $imageName);

            if ($pages->image && file_exists(public_path($pages->image))) {
                unlink(public_path($pages->image));
            }

            $pages->image = 'pageimages/' . $imageName;
        }
        $pages->save();

        return redirect()->route('admin.pages')->with('success', 'Page updated successfully.');
    }

    public function delete($id)
    {
        $pages = Page::findOrFail($id);

        if ($pages->image && file_exists(public_path($pages->image))) {
            unlink(public_path($pages->image));
        }
        $pages->delete();

        return redirect()->route('admin.pages')->with('success', 'Page entry deleted successfully.');
    }
}
