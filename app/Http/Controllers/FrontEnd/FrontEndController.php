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

        return view('frontend.request.index', compact('areas', 'vehicles', 'scales'));
    }

    public function easyMoveDetail($id) {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        $selectedVehicle = Vehicle::find($id);

        return view('frontend.request.easy_move.easy_move_detail',compact('vehicles','selectedVehicle'));
    }

    public function safeMoveMore($id) {
        $scale = Scale::find($id);
        return view('frontend.request.safe_move.more', compact('scale'));
    }

    public function safeMoveDetail($id) {
        $scale = Scale::find($id);
        return view('frontend.request.safe_move.detail', compact('scale'));
    }

    public function safeMovePreview() {
        return view('frontend.request.safe_move.preview');
    }

    public function vehiclesWithParams($areaId) {
        return Vehicle::where('area_id', $areaId)->get();
    }

    public function scalesWithParams($areaId) {
        return Scale::where('area_id', $areaId)->get();
    }

    public function bookings() {
        $bookings = Booking::all();
        return view('frontend.user_center.booking.bookings', compact('bookings'));
    }

    public function bookingShow($bookingId) {
        $booking = Booking::find($bookingId);
        return view('frontend.user_center.booking.booking_show', compact('booking'));
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
        return view('frontend.user_center.bonus.bonuses', compact('bonuses'));
    }

    public function bonusGuide() {
        return view('frontend.user_center.bonus.bonus_guide');
    }

    public function submitBooking(Request $request) {
        $booking = new Booking;
        $booking->user_id       = $request->user_id;
        $booking->vehicle_id    = $request->vehicle_id;
        $booking->scale_id      = $request->scale_id;
        $booking->where_from    = $request->where_from;
        $booking->floor_from    = $request->floor_from;
        $booking->where_to      = $request->where_to;
        $booking->floor_to      = $request->floor_to;
        $booking->when          = $request->when;
        $booking->distance      = $request->distance;
        $booking->price         = $request->price;
        $booking->description   = $request->description;
        $booking->big_item      = $request->big_item;
        $booking->helper_count  = $request->helper_count;
        $booking->phone         = $request->phone;

        $booking->save();
    }
}
