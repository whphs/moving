<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\DistancePrice;
use App\Models\FloorPrice;
use App\Models\Scale;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $scales = Scale::all();
        return view('backend.scale.index', compact('scales'));

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
        return view('backend.scale.create', compact('areas'));
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
        $this->saveScale(new Scale, $request);
        return redirect('admin/scale')->with('status', __('string.created_success'));
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
        $scale = Scale::find($id);
        $areas = Arr::pluck(Area::all(), 'name', 'id');
        return view('backend.scale.edit', compact('scale', 'areas'));
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
        $this->saveScale(Scale::find($id), $request) ;
        return redirect('admin/scale')->with('status', __('string.updated_success'));
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
        $scale = Scale::find($id);
        $scale->delete();
        DistancePrice::where('scale_id', $id)->delete();

        return redirect('admin/scale')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     *
     * @param App\Models\Scale $scale
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveScale($scale, $request) {
        $scale->name                    = $request->name;
        $scale->move_type_id            = 1;
        $scale->area_id                 = $request->area_id;
        $scale->vehicle_description     = $request->vehicle_description;
        $scale->helper_description      = $request->helper_description;
        $scale->init_price              = $request->init_price;

        if ($request->main_photo) {
            $scale->main_photo       = $request->main_photo->store('uploads', 'public');
        }
        if ($request->vehicle_photo) {
            $scale->vehicle_photo       = $request->vehicle_photo->store('uploads', 'public');
        }
        if ($request->helper_photo) {
            $scale->helper_photo        = $request->helper_photo->store('uploads', 'public');
        }

        $scale->save();

        DistancePrice::where('scale_id', $scale->id)->delete();

        foreach ($request->distance_from as $key => $n) {
            $price = new DistancePrice;
            $price->from        = $request->distance_from[$key];
            $price->to          = $request->distance_to[$key];
            $price->amount      = $request->amount[$key];
            $price->scale_id    = $scale->id;
            $price->save();
        }

        FloorPrice::where('scale_id', $scale->id)->delete();

        foreach ($request->floor_from as $key => $n) {
            $price = new FloorPrice;
            $price->from        = $request->floor_from[$key];
            $price->to          = $request->floor_to[$key];
            $price->amount      = $request->amount[$key];
            $price->scale_id    = $scale->id;
            $price->save();
        }
    }
}
