<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.pagesettings.portfolio.index',compact('portfolios'));
    }
    public function create()
    {
        return view('backend.pagesettings.portfolio.create');

    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'portfolio_category'    => 'required|string',
            'button_name'           => 'required|string',
            'portfolio_image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_image_view'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_description' => 'required|string',
        ]);

        $portfolio = new Portfolio();

        $portfolio->portfolio_category     = $request->input('portfolio_category');
        $portfolio->slug                   = Str::slug($request->portfolio_category);
        $portfolio->button_name            = $request->input('button_name');
        $portfolio->portfolio_description  = $request->input('portfolio_description');

        if ($request->hasFile('portfolio_image')) {
            $portfolioImage             = $request->file('portfolio_image');
            $portfolioImageName         = time() . '.' . $portfolioImage->getClientOriginalExtension();
            $portfolioImage->move(public_path('portfolio_images'), $portfolioImageName);
            $portfolio->portfolio_image = 'portfolio_images/' . $portfolioImageName;
        }

        if ($request->hasFile('portfolio_image_view')) {
            $portfolioImageView = $request->file('portfolio_image_view');
            $portfolioImageViewName = time() . '_view.' . $portfolioImageView->getClientOriginalExtension();
            $portfolioImageView->move(public_path('portfolio_image_view'), $portfolioImageViewName);
            $portfolio->portfolio_image_view = 'portfolio_image_view/' . $portfolioImageViewName;
        }

        $portfolio->save();

        return redirect()->route('admin.portfolios')->with('success', 'Portfolio entry added successfully.');
    }

    public function edit($id)
    {
        $portfolios = Portfolio::findOrFail($id);
        return view('backend.pagesettings.portfolio.edit',compact('portfolios'));

    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'portfolio_category' => 'required|string',
            'button_name' => 'required|string',
            'portfolio_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_image_view' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_description' => 'required|string',
        ]);

        $portfolio = Portfolio::findOrFail($id);

        $portfolio->portfolio_category = $request->input('portfolio_category');
        $portfolio->slug = Str::slug($request->portfolio_category);
        $portfolio->button_name = $request->input('button_name');
        $portfolio->portfolio_description = $request->input('portfolio_description');

        if ($request->hasFile('portfolio_image')) {
            $portfolioImage = $request->file('portfolio_image');
            $portfolioImageName = time() . '.' . $portfolioImage->getClientOriginalExtension();
            $portfolioImage->move(public_path('portfolio_images'), $portfolioImageName);

            if ($portfolio->portfolio_image && file_exists(public_path($portfolio->portfolio_image))) {
                unlink(public_path($portfolio->portfolio_image));
            }

            $portfolio->portfolio_image = 'portfolio_images/' . $portfolioImageName;
        }

        if ($request->hasFile('portfolio_image_view')) {
            $portfolioImageView = $request->file('portfolio_image_view');
            $portfolioImageViewName = time() . '_view.' . $portfolioImageView->getClientOriginalExtension();
            $portfolioImageView->move(public_path('portfolio_image_view'), $portfolioImageViewName);

            if ($portfolio->portfolio_image_view && file_exists(public_path($portfolio->portfolio_image_view))) {
                unlink(public_path($portfolio->portfolio_image_view));
            }

            $portfolio->portfolio_image_view = 'portfolio_image_view/' . $portfolioImageViewName;
        }

        $portfolio->save();

        return redirect()->route('admin.portfolios')->with('success', 'Portfolio entry updated successfully.');
    }

    public function delete($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        if ($portfolio->portfolio_image && file_exists(public_path($portfolio->portfolio_image))) {
            unlink(public_path($portfolio->portfolio_image));
        }

        if ($portfolio->portfolio_image_view && file_exists(public_path($portfolio->portfolio_image_view))) {
            unlink(public_path($portfolio->portfolio_image_view));
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios')->with('success', 'Portfolio entry deleted successfully.');
    }



}
