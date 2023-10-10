<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogControllerController extends Controller
{
    public function index()
    {
        $blogs = BlogController::orderBy('id', 'desc')->get();
        return view('backend.pagesettings.blog.index',compact('blogs'));
    }
    public function create()
    {
        return view('backend.pagesettings.blog.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_view_image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'      => 'nullable|string',
        ]);
        $blog = new BlogController();

        $blog->title        = $request->input('title');
        $blog->slug         = Str::slug($request->title);
        $blog->description  = $request->input('description');

        if ($request->hasFile('image')) {
            $image  = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $blog->image = 'blog_images/' . $imageName;
        }

        if ($request->hasFile('blog_view_image')) {
            $blogViewImage = $request->file('blog_view_image');
            $blogViewImageName = time() . '_view.' . $blogViewImage->getClientOriginalExtension();
            $blogViewImage->move(public_path('blog_images'), $blogViewImageName);
            $blog->blog_view_image = 'blog_images/' . $blogViewImageName;
        }

        $blog->save();
        $notification = array(
            'message' =>'Blog created successfully ',
            'alert-type' =>'success'
        );


        return redirect()->route('admin.blogsection')->with($notification);
    }

    public function edit($id)
    {
        $blogs = BlogController::findOrFail($id);

        return view('backend.pagesettings.blog.edit',compact('blogs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'            => 'required|string|max:255',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'blog_view_image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'      => 'nullable|string',
        ]);

        $blog = BlogController::find($id);

        if (!$blog) {
            return redirect()->route('blog.index')->with('error', 'Blog post not found.');
        }

        $blog->title       = $request->input('title');
        $blog->slug        = Str::slug($request->title);
        $blog->description = $request->input('description');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);

            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $blog->image = 'blog_images/' . $imageName;
        }

        if ($request->hasFile('blog_view_image')) {
            $blogViewImage     = $request->file('blog_view_image');
            $blogViewImageName = time() . '_view.' . $blogViewImage->getClientOriginalExtension();
            $blogViewImage->move(public_path('blog_images'), $blogViewImageName);

            if ($blog->blog_view_image && file_exists(public_path($blog->blog_view_image))) {
                unlink(public_path($blog->blog_view_image));
            }

            $blog->blog_view_image = 'blog_images/' . $blogViewImageName;
        }

        $blog->save();
        $notification = array(
            'message' =>'Blog updated successfully ',
            'alert-type' =>'info'
        );

        return redirect()->route('admin.blogsection')->with($notification);
    }



    public function delete($id)
    {
        $blog = BlogController::findOrFail($id);
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }
        if ($blog->blog_view_image && file_exists(public_path($blog->blog_view_image))) {
            unlink(public_path($blog->blog_view_image));
        }



        $blog->delete();
        $notification = array(
            'message' =>'Blog deleted successfully ',
            'alert-type' =>'warning'
        );

        return redirect()->route('admin.blogsection')->with($notification);
    }




}
