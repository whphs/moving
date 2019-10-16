<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Support\Arr;
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
        $moveTypes = MoveType::all();
        return view('backend.move_type.index', compact('moveTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $areas = Arr::pluck(Area::all(), 'name', 'id');
        return view('backend.move_type.create', compact('areas'));
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
        $this->saveMoveType(new MoveType, $request);

        return redirect('admin/move_type')->with('status', __('string.created_success'));
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
        $moveType = MoveType::find($id);
        $areas = Arr::pluck(Area::all(), 'name', 'id');
        return view('backend.move_type.edit', compact('moveType', 'areas'));
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
        $this->saveMoveType(MoveType::find($id), $request);

        return redirect('admin/move_type')->with('status', __('string.updated_success'));
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
        $moveType = MoveType::find($id);
        $moveType->delete();
        return redirect('admin/move_type')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     * 
     * @param App\Models\MoveType $moveType
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveMoveType($moveType, $request) {
        $moveType->name = $request->name;
        $moveType->area_id = $request->area_id;
        $moveType->save();
    }
}
