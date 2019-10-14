<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //
    public function index() {
        $aboutUs = AboutUs::all();
        if (count($aboutUs) > 0) {
            $aboutUs = $aboutUs[0];
        } else {
            $aboutUs = AboutUs::create(['title' => '']);
        }
        return view('backend.about_us.index', compact('aboutUs'));
    }

    public function update(Request $request) {
        $aboutUs = AboutUs::firstOrFail();
        $aboutUs->title         = $request->input('title');
        $aboutUs->introduction  = $request->input('introduction');
        $aboutUs->email         = $request->input('email');
        $aboutUs->phone         = $request->input('phone');
        $aboutUs->address       = $request->input('address');
        $aboutUs->website       = $request->input('website');
        $aboutUs->update();

        return redirect('/admin/about_us')->with('status', __('string.updated_success'));
    }
}
