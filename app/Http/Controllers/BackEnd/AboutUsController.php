<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //
    public function index() {
        $aboutus = AboutUs::all();
        if (count($aboutus) > 0) {
            $aboutus = $aboutus[0];
        } else {
            $aboutus = AboutUs::create(['title' => '']);
        }
        return view('backend.aboutus.index')->with('aboutus', $aboutus);
    }

    public function update(Request $request) {
        $aboutus = AboutUs::firstOrFail();
        $aboutus->title = $request->input('title');
        $aboutus->introduction = $request->input('introduction');
        $aboutus->email = $request->input('email');
        $aboutus->phone = $request->input('phone');
        $aboutus->address = $request->input('address');
        $aboutus->website = $request->input('website');
        $aboutus->update();

        return redirect('/admin/aboutus')->with('status', __('string.updated_success'));
    }
}
