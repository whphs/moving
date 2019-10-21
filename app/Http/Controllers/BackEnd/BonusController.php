<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Area;
use App\Models\Bonus;
use App\Models\MoveType;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bonuses = Bonus::all();
        return view('backend.bonus.index', compact('bonuses'));
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
        return view('backend.bonus.create', compact('areas'));
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
        $this->saveBonus(new Bonus, $request);

        return redirect('admin/bonus')->with('status', __('string.created_success'));
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
        $bonus = Bonus::find($id);
        $areas = Arr::pluck(Area::all(), 'name', 'id');

        return view('backend.bonus.edit', compact('bonus', 'areas'));
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
        $this->saveBonus(Bonus::find($id), $request);

        return redirect('admin/bonus')->with('status', __('string.updated_success'));
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
        $bonus = Bonus::find($id);
        $bonus->delete();
        return redirect('admin/bonus')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     *
     * @param App\Models\Bonus $bonus
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveBonus($bonus, $request) {
        $bonus->title       = $request->title;
        $bonus->area_id     = $request->area_id;
        $bonus->price       = $request->price;
        $bonus->start_date  = $request->start_date;
        $bonus->end_date    = $request->end_date;
        $bonus->description = $request->description;

        $bonus->save();
    }
}
