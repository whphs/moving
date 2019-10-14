<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\TermCondition;
use App\Http\Controllers\Controller;

class TermConditionController extends Controller
{
    //
    public function index() {
        $termCondition = TermCondition::all();
        if (count($termCondition) > 0) {
            $termCondition = $termCondition[0];
        } else {
            $termCondition = TermCondition::create(['content' => '']);
        }
        return view('backend.term_condition.index', compact('termCondition'));
    }

    public function update(Request $request) {
        $termCondition = TermCondition::firstOrFail();
        $termCondition->content = $request->input('content');
        $termCondition->update();

        return redirect('/admin/term_condition')->with('status', __('string.updated_success'));
    }
}
