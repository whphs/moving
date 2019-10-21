<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Area;
use App\Models\Bonus;
use App\Models\AboutUs;
use App\Models\Booking;
use App\Models\Scale;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Agreement;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    /**
     * Display home page of frontend
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $areas = Area::all();
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        $scales = $this->scalesWithParams(Area::first()->id);

        return view('frontend.index', compact('areas', 'vehicles', 'scales'));
    }

    public function easyMoveDetail($vehicleId)
    {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        $selectedVehicle = Vehicle::find($vehicleId);

        return view('frontend.easy_move_detail',compact('vehicles','selectedVehicle'));
    }

    public function vehiclesWithParams($areaId) {
        return Vehicle::where('area_id', $areaId)->get();
    }

    public function scalesWithParams($areaId) {
        return Scale::where('area_id', $areaId)->get();
    }

    public function bookings() {
        $bookings = Booking::all();
        return view('frontend.user_center.bookings', compact('bookings'));
    }

    public function vehicleStandards() {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        return view('frontend.user_center.setting.standards', compact('vehicles'));
    }

    /**
     * Display About Us.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs() {
        $aboutUs = AboutUs::first();
        return view('frontend.user_center.setting.about_us', compact('aboutUs'));
    }

    /**
     * Display the Terms and Conditions.
     *
     * @return \Illuminate\Http\Response
     */
    public function agreement() {
        $agreement = Agreement::first();
        return view('frontend.user_center.setting.agreement', compact('agreement'));
    }

    /**
     * Display a listing of the bonus.
     *
     * @return \Illuminate\Http\Response
     */
    public function bonuses() {
        $bonuses = Bonus::all();
        return view('frontend.user_center.bonuses', compact('bonuses'));
    }

    public function bonusGuide() {
        return view('frontend.user_center.bonus_guide');
    }
}
