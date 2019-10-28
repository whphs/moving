<?php

namespace App\Models;

use App\Models\Area;
use App\Models\MoveType;
use App\Models\FloorPrice;
use App\Models\DistancePrice;
use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    // Get moveType of scale.
    public function moveType()
    {
        return $this->belongsTo(MoveType::class);
    }

    // Get area of scale.
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    // Get distancePrice of scale.
    public function distancePrices() {
        return $this->hasMany(DistancePrice::class);
    }

    // Get floorPrice of scale.
    public function floorPrices() {
        return $this->hasMany(FloorPrice::class);
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
}
