<?php

namespace App\Models;

use App\Models\Area;
use App\Models\DistancePrice;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    // Get moveType of vehicle.
    public function moveType()
    {
        return $this->belongsTo(MoveType::class);
    }

    // Get area of vehicle.
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    // Get distancePrice of vehicle.
    public function distancePrices()
    {
        return $this->hasMany(DistancePrice::class);
    }

    // Get string of distancePrice.
    public function distancePriceSToString() {
        $list = $this->distancePrices;
        $returnString = '';
        foreach ($list as $price) {
            $returnString .= $price->from . ' ~ ' . $price->to . 'km = $' . $price->amount . '/km<br/>';
        }
        return $returnString;
    }

    // Get string of itemPrice.
    public function itemPricesToString() {
        $returnString = __('string.init_price') . ' = $' . $this->init_price_for_items . '<br/>';
        $returnString .= __('string.price_per_floor') . ' = $' . $this->price_per_floor . '<br/>';
        $returnString .= __('string.price_per_big_item') . ' = $' . $this->price_per_big_item . '<br/>';
        $returnString .= __('string.price_per_floor_for_big_item') . ' = $' . $this->price_per_floor_for_big_item . '<br/>';
        return $returnString;
    }

}
