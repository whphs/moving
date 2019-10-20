<?php

namespace App\Models;

use App\Models\Area;
use App\Models\MoveType;
use App\Models\FloorPrice;
use App\Models\DistancePrice;
use Illuminate\Database\Eloquent\Model;

class Scale extends Model
{
    public function move_type()
    {
        return $this->belongsTo(MoveType::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function distancePrices() {
        return $this->hasMany(DistancePrice::class);
    }

    public function floorPrices() {
        return $this->hasMany(FloorPrice::class);
    }

    public function distancePriceSToString() {
        $list = $this->distancePrices;
        $returnString = '';
        foreach ($list as $price) {
            $returnString .= $price->from . ' ~ ' . $price->to . 'km = $' . $price->amount . '/km<br/>';
        }
        return $returnString;
    }
}
