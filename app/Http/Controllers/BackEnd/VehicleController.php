<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vehicles = Vehicle::all();
        return view('backend.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.vehicles.create');
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
        $vehicle = new Vehicle;
        $vehicle->name = $request->name;
        $vehicle->movetype = $request->movetype;
        $vehicle->size = $request->size;
        $vehicle->load_weight = $request->load_weight;
        $vehicle->volume = $request->volume;
        $vehicle->description = $request->description;
        $vehicle->save();
        
        return redirect('admin/vehicles')->with('status', __('string.created_success'));
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
        $vehicle = Vehicle::find($id);
        return view('backend.vehicles.edit', compact('vehicle'));
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
        $vehicle = Vehicle::find($id);
        $vehicle->name = $request->name;
        $vehicle->movetype = $request->movetype;
        $vehicle->size = $request->size;
        $vehicle->load_weight = $request->load_weight;
        $vehicle->volume = $request->volume;
        $vehicle->description = $request->description;
        $vehicle->save();
        
        return redirect('admin/vehicles')->with('status', __('string.updated_success'));
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
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        
        return redirect('admin/vehicles')->with('status', __('string.deleted_success'));
    }
}
