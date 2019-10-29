<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Area;
use App\Models\Bonus;
use App\Models\Scale;
use App\Models\AboutUs;
use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\Agreement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Response;

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
     * Put session variable
     *
     * @param \Illuminate\Support\Facades\Request
     */
    public function putSession(Request $request) {
        session()->put($request->all());
        session()->save();
    }

    /**
     * Get session variable
     *
     * @param \Illuminate\Support\Facades\Request
     * @return json
     */
    public function getSession(Request $request) {
        $value = session()->get($request->key);
        return response()->json($value);
    }

    /**
     * Display detail of easy move with id
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function easyMoveDetail() {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        return view('frontend.request.easy_move.detail',compact('vehicles'));
    }

    public function easyMovePreview(){
        $id = session()->get('vehicle_id');
        $vehicle = Vehicle::find($id);
        return view('frontend.request.easy_move.preview', compact('vehicle'));
    }

    public function selectLocation($move_type, $location) {
        return view('frontend.request.common.location')->with(['move_type' => $move_type, 'location' => $location]);
    }

    public function selectFloor($move_type, $location,$address) {
        return view('frontend.request.common.floor')->with(['move_type' => $move_type, 'location' => $location, 'address' => $address]);
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
    public function safeMoveDetail() {
        $scales = $this->scalesWithParams(Area::first()->id);
        return view('frontend.request.safe_move.detail', compact('scales'));
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

    public function standards() {
        $vehicles = $this->vehiclesWithParams(Area::first()->id);
        return view('frontend.user_center.setting.standard.index', compact('vehicles'));
    }

    public function standardPreview($vehicleId) {
        $vehicles = Vehicle::all();
        $selectVehicle = Vehicle::find($vehicleId);
        return view('frontend.user_center.setting.standard.preview', compact('vehicles', 'selectVehicle'));
    }

    public function standardDescription($vehicleId) {
        $selectVehicle = Vehicle::find($vehicleId);
        return view('frontend.user_center.setting.standard.description', compact('selectVehicle'));
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
    public function bonuses($where) {
        $bonuses = Bonus::all();
        return view('frontend.user_center.bonus.bonuses', compact('bonuses'))->with(['where' => $where]);
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
     */
    public function submitBooking(Request $request) {
        $booking = new Booking;
        $booking->user_id       = $request->user_id;
        if ($request->vehicle_id) {
            $booking->vehicle_id = $request->vehicle_id;
        }
        if ($request->scale_id) {
            $booking->scale_id = $request->scale_id;
        }
        $booking->where_from    = $request->where_from;
        $booking->floor_from    = $request->floor_from;
        $booking->where_to      = $request->where_to;
        $booking->floor_to      = $request->floor_to;
        $booking->when          = $request->when;
        $booking->distance      = $request->distance;
        $booking->price         = $request->price;
        $booking->description   = $request->description;
        $booking->big_item      = $request->big_item;
        if($request->helper_count){
            $booking->helper_count  = $request->helper_count;
        }
        $booking->phone         = $request->phone;
        if($request->bonus_id){
            $booking->bonus_id      = $request->bonus_id;
        }


        $booking->save();

//        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
}
