<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MemberSection;
use Illuminate\Http\Request;

class MemberSectionController extends Controller
{
    public function index()
    {
        $memberinfo = MemberSection::all();
        return view('backend.pagesettings.member.index',compact('memberinfo'));
    }
    public function create()
    {
        return view('backend.pagesettings.member.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'member_name' => 'string|max:255',
            'member_position' => 'string|max:255',
            'member_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $memberSection = new MemberSection();

        $memberSection->member_name = $request->input('member_name');
        $memberSection->member_position = $request->input('member_position');

        if ($memberImage = $request->file('member_image')) {
            $destinationPath = 'member/images/';
            $memberImageName = date('YmdHis') . "." . $memberImage->getClientOriginalExtension();
            $memberImage->move($destinationPath, $memberImageName);
            $memberSection->member_image = $destinationPath . $memberImageName;
        }

        $memberSection->save();

        return redirect()->route('admin.memberinfo')->with('success', 'Member section added successfully.');
    }

    public function edit($id)
    {
        $memberinfo = MemberSection::findOrFail($id);
        return view('backend.pagesettings.member.edit',compact('memberinfo'));


    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'member_name' => 'string|max:255',
            'member_position' => 'string|max:255',
            'member_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $memberSection = MemberSection::find($id);

        if (!$memberSection) {
            return redirect()->route('admin.memberinfo')->with('error', 'Member section not found.');
        }

        $memberSection->member_name = $request->input('member_name');
        $memberSection->member_position = $request->input('member_position');

        if ($memberImage = $request->file('member_image')) {
            $destinationPath = 'member/images/';
            $memberImageName = date('YmdHis') . "." . $memberImage->getClientOriginalExtension();
            $memberImage->move($destinationPath, $memberImageName);

            if (file_exists(public_path($memberSection->member_image))) {
                unlink(public_path($memberSection->member_image));
            }

            $memberSection->member_image = $destinationPath . $memberImageName;
        }

        $memberSection->save();

        return redirect()->route('admin.memberinfo')->with('success', 'Member section updated successfully.');
    }

    public function delete($id)
    {
        $memberSection = MemberSection::find($id);

        if (!$memberSection) {
            return redirect()->route('admin.memberinfo')->with('error', 'Member Info not found.');
        }

        if (file_exists(public_path($memberSection->member_image))) {
            unlink(public_path($memberSection->member_image));
        }

        $memberSection->delete();

        return redirect()->route('admin.memberinfo')->with('success', 'Member Info deleted successfully.');
    }




}
