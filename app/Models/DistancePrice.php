<?php

namespace App\Models;

use App\Models\Scale;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class DistancePrice extends Model
{
    //
    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}
