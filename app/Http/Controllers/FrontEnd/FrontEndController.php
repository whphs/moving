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

    /**
     * Display detail of easy move with id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function easyMoveDetail($id) {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        $selectedVehicle = Vehicle::find($id);

        return view('frontend.request.easy_move.easy_move_detail',compact('vehicles','selectedVehicle'));
    }

    /**
     * Display more guide of safe move with id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function safeMoveMore($id) {
        $scale = Scale::find($id);
        return view('frontend.request.safe_move.more', compact('scale'));
    }

    /**
     * Display detail of safe move with id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function safeMoveDetail($id) {
        $scale = Scale::find($id);
        return view('frontend.request.safe_move.detail', compact('scale'));
    }

    /**
     * Display confirmation of safe move
     *
     * @return \Illuminate\Http\Response
     */
    public function safeMovePreview() {
        return view('frontend.request.safe_move.preview');
    }

    /**
     * return array of vehicles with areaId
     *
     * @param int $areaId
     * @return Arr
     */
    public function vehiclesWithParams($areaId) {
        return Vehicle::where('area_id', $areaId)->get();
    }

    /**
     * return array of scales with areaId
     *
     * @param int $areaId
     * @return Arr
     */
    public function scalesWithParams($areaId) {
        return Scale::where('area_id', $areaId)->get();
    }

    /**
     * Display list of booking
     *
     * @param int $bookingId
     * @return \Illuminate\Http\Response
     */
    public function bookings() {
        $bookings = Booking::all();
        return view('frontend.user_center.booking.bookings', compact('bookings'));
    }

    /**
     * Display detail of booking for bookingId.
     *
     * @param int $bookingId
     * @return \Illuminate\Http\Response
     */
    public function bookingShow($bookingId) {
        $booking = Booking::find($bookingId);
        return view('frontend.user_center.booking.booking_show', compact('booking'));
    }

    /**
     * Display standards for vehicle prices.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the bonus Guide.
     *
     * @return \Illuminate\Http\Response
     */
    public function bonusGuide() {
        return view('frontend.user_center.bonus.bonus_guide');
    }

    /**
     * Store a booking requested
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
