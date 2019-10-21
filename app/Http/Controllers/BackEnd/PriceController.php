<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prices = Price::all();
        return view('backend.price.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.price.create');
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
        $this->savePrice(new Price, $request);
        return redirect('admin/price')->with('status', __('string.created_success'));
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
        $price = Price::find($id);
        return view('backend.price.edit', compact('price'));
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
        $this->savePrice(Price::find($id), $request);
        return redirect('admin/price')->with('status', __('string.updated_success'));
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
        $price = Price::find($id);
        $price->delete();
        return redirect('admin/price')->with('status', __('string.deleted_success'));
    }

    /**
     * Save the data to database
     *
     * @param App\Models\Price $price
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function savePrice($price, $request) {
        $price->distance_from   = $request->distance_from;
        $price->distance_to     = $request->distance_to;
        $price->amount          = $request->amount;
        $price->save();
    }
}
