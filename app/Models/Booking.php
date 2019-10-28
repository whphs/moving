<?php

namespace App\Models;

use App\User;
use App\Models\Scale;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // Get user of Booking.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get vehicle of Booking.
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    // Get scale of Booking.
    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}
