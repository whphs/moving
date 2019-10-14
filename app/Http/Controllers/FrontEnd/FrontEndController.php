<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Bonus;
use App\Models\Terms;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    /**
     * Display About Us.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs() {
        $aboutus = AboutUs::all();
        if (count($aboutus) > 0) {
            $aboutus = $aboutus[0];
        }
        return view('frontend.about_us.index')->with('aboutus', $aboutus);
    }

    /**
     * Display the Terms and Conditions.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms() {
        $terms = Terms::all();
        if (count($terms) > 0) {
            $terms = $terms[0];
        }
        return view('frontend.term_condition.index')->with('terms', $terms);
    }

    /**
     * Display a listing of the bonus.
     *
     * @return \Illuminate\Http\Response
     */
    public function bonusList() {
        $bonuses = Bonus::all();
        return view('frontend.bonus.index', compact('bonuses'));
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
