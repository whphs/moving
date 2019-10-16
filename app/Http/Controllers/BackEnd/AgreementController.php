<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\Agreement;
use App\Http\Controllers\Controller;

class AgreementController extends Controller
{
    public function index() {
        $agreement = Agreement::first();
        if (!$agreement) {
            $agreement = Agreement::create(['content' => '']);
        }
        return view('backend.agreement.index', compact('agreement'));
    }

    public function update(Request $request) {
        $agreement = Agreement::first();
        $agreement->content = $request->content;
        $agreement->save();

        return redirect('admin/agreement')->with('status', __('string.updated_success'));
    }
}
