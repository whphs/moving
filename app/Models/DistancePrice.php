<?php

namespace App\Models;

use App\Models\Scale;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class DistancePrice extends Model
{
    // Get vehicle of DistancePrice.
    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    // Get scale of DistancePrice.
    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}
