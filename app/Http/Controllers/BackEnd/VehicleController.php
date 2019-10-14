<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Area;
use App\Models\Vehicle;
use App\Models\MoveType;
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
        return view('backend.vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new vehicle.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $moveTypes = MoveType::all();
        $areas = Area::all();
        return view('backend.vehicle.create', compact('moveTypes', 'areas'));
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
        $this->saveVeichle(new Vehicle, $request);
        
        return redirect('admin/vehicle')->with('status', __('string.created_success'));
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
        $moveTypes = MoveType::all();
        $areas = Area::all();
        return view('backend.vehicle.edit', compact('vehicle', 'moveTypes', 'areas'));
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
        $this->saveVeichle(Vehicle::find($id), $request) ;
        
        return redirect('admin/vehicle')->with('status', __('string.updated_success'));
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
        
        return redirect('admin/vehicle')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     * 
     * @param App\Models\Vehicle $vehicle
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveVeichle($vehicle, $request) {
        $vehicle->name = $request->name;
        $vehicle->move_type_id = $request->move_type_id;
        $vehicle->area_id = $request->area_id;
        $vehicle->size = $request->size;
        $vehicle->load_weight = $request->load_weight;
        $vehicle->volume = $request->volume;
        $vehicle->description = $request->description;
        $vehicle->available_baggages = $request->available_baggages;
        $vehicle->unavailable_baggages = $request->unavailable_baggages;
        $vehicle->vehicle_thumb = $request->vehicle_thumb;
        $vehicle->baggage_thumb = $request->baggage_thumb;
        $vehicle->photo_0 = $request->photo_0;
        $vehicle->photo_1 = $request->photo_1;
        $vehicle->photo_2 = $request->photo_2;
        $vehicle->save();
    }
}
