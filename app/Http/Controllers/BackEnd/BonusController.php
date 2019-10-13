<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Bonus;
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
        return view('backend.bonuses.index', compact('bonuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.bonuses.create');
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
        $bonus = new Bonus;
        $bonus->title       = $request->title;
        $bonus->move_type   = $request->move_type;
        $bonus->price       = $request->price;
        $bonus->start_date  = $request->start_date;
        $bonus->end_date    = $request->end_date;
        $bonus->save();

        return redirect('admin/bonuses')->with('status', 'Created successfully.');
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
        $bonus = Bonus::find($id);
        return view('backend.bonuses.edit', compact('bonus'));
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
        $bonus = Bonus::find($id);
        $bonus->title       = $request->title;
        $bonus->move_type   = $request->move_type;
        $bonus->price       = $request->price;
        $bonus->start_date  = $request->start_date;
        $bonus->end_date    = $request->end_date;
        $bonus->save();

        return redirect('admin/bonuses')->with('status', 'Updated successfully.');
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
        return redirect('admin/bonuses')->with('status', 'Deleted successfully.');
    }
}
