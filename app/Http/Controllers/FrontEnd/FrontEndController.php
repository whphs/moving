<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Area;
use App\Models\Bonus;
use App\Models\Terms;
use App\Models\AboutUs;
use App\Models\Vehicle;
use App\Models\MoveType;
use Illuminate\Http\Request;
use App\Models\TermCondition;
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
        $moveTypes = MoveType::all();
        $vehicles = $this->vehiclesWithParams(Area::first()->id, MoveType::first()->id);

        return view('frontend.index', compact('areas', 'moveTypes', 'vehicles'));
    }

    /**
     * Get list of vehicle with the area and the move type from database.
     * 
     * @param int $areaId
     * @param int $moveTypeId
     * @return Arr
     */
    public function vehiclesWithParams($areaId, $moveTypeId) {
        return Vehicle::where('area_id', $areaId)
                      ->where('move_type_id', $moveTypeId)
                      ->get();
    }


    /**
     * Display About Us.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs() {
        $aboutUs = AboutUs::first();
        return view('frontend.user_center.set_up.about_us', compact('aboutUs'));
    }

    /**
     * Display the Terms and Conditions.
     *
     * @return \Illuminate\Http\Response
     */
    public function termCondition() {
        $termCondition = TermCondition::first();
        return view('frontend.user_center.set_up.term_condition', compact('termCondition'));
    }

    /**
     * Display a listing of the bonus.
     *
     * @return \Illuminate\Http\Response
     */
    public function bonuses() {
        $bonuses = Bonus::all();
        return view('frontend.user_center.bonus_list', compact('bonuses'))->with('bonuses', $bonuses);
    }

    /**
     * Display the bonus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBonus($id) {
        $bonus = Bonus::find($id);
        return view('frontend.bonus.show', compact('bonus'));
    }

}
