<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    /**
     * Display About us management page of backend
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $aboutUs = AboutUs::first();
        if (!$aboutUs) {
            $aboutUs = AboutUs::create(['title' => '']);
        }
        return view('backend.about_us.index', compact('aboutUs'));
    }

    /**
     * Save the data to database
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function update(Request $request) {
        $aboutUs = AboutUs::first();
        $aboutUs->title         = $request->title;
        $aboutUs->introduction  = $request->introduction;
        $aboutUs->email         = $request->email;
        $aboutUs->phone         = $request->phone;
        $aboutUs->address       = $request->address;
        $aboutUs->website       = $request->website;
        $aboutUs->save();

        return redirect('admin/about_us')->with('status', __('string.updated_success'));
    }
}
