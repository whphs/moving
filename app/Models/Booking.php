<?php

namespace App\Models;

use App\User;
use App\Models\Scale;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}
