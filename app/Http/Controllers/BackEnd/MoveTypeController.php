<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\MoveType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movetypes = MoveType::all();
        return view('backend.movetypes.index', compact('movetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.movetypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $movetype = new MoveType;
        $movetype->name = $request->name;
        $movetype->area = $request->area;
        $movetype->save();

        return redirect('admin/movetypes')->with('status', __('string.created_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movetype = MoveType::find($id);
        return view('backend.movetypes.edit', compact('movetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $movetype = MoveType::find($id);
        $movetype->name = $request->name;
        $movetype->area = $request->area;
        $movetype->save();

        return redirect('admin/movetypes')->with('status', __('string.updated_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movetype = MoveType::find($id);
        $movetype->delete();
        return redirect('admin/movetypes')->with('status', __('string.deleted_success'));
    }
}
