<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    //
    public function index() {
        $terms = Terms::all();
        if (count($terms) > 0) {
            $terms = $terms[0];
        } else {
            $terms = Terms::create(['content' => '']);
        }
        return view('backend.terms.index')->with('terms', $terms);
    }

    public function update(Request $request) {
        $terms = Terms::firstOrFail();
        $terms->content = $request->input('content');
        $terms->update();

        return redirect('/admin/terms')->with('status', 'Your data is updated');
    }

}
