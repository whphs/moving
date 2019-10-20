<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Area;
use App\Models\Vehicle;
use App\Models\PlusCost;
use Illuminate\Support\Arr;
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
        $areas = Arr::pluck(Area::all(), 'name', 'id');
        return view('backend.vehicle.create', compact('areas'));
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
        $this->saveVehicle(new Vehicle, $request);
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
        $areas = Arr::pluck(Area::all(), 'name', 'id');
        return view('backend.vehicle.edit', compact('vehicle', 'areas'));
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
        $this->saveVehicle(Vehicle::find($id), $request) ;

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
        PlusCost::where('vehicle_id', $id)->delete();

        return redirect('admin/vehicle')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     *
     * @param App\Models\Vehicle $vehicle
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveVehicle($vehicle, $request) {
        // $this->validate($request, ['vehicle_thumb' => 'dimensions:width=150,height=100']);

        $vehicle->name                  = $request->name;
        $vehicle->move_type_id          = 0;
        $vehicle->area_id               = $request->area_id;
        $vehicle->size                  = $request->size;
        $vehicle->load_weight           = $request->load_weight;
        $vehicle->volume                = $request->volume;
        $vehicle->description           = $request->description;
        $vehicle->available_items       = $request->available_items;
        $vehicle->unavailable_items     = $request->unavailable_items;
        $vehicle->vehicle_thumb         = $request->vehicle_thumb->store('uploads', 'public');
        $vehicle->baggage_thumb         = $request->baggage_thumb->store('uploads', 'public');
        $vehicle->photo_0               = $request->photo_0->store('uploads', 'public');
        $vehicle->photo_1               = $request->photo_1->store('uploads', 'public');
        $vehicle->photo_2               = $request->photo_2->store('uploads', 'public');
        $vehicle->save();

        PlusCost::where('vehicle_id', $vehicle->id)->delete();

        foreach ($request->distance_from as $key => $n) {
            $plusCost = new PlusCost;
            $plusCost->distance_from    = $request->distance_from[$key];
            $plusCost->distance_to      = $request->distance_to[$key];
            $plusCost->amount           = $request->amount[$key];
            $plusCost->vehicle_id       = $vehicle->id;
            $plusCost->save();
        }
    }

}
