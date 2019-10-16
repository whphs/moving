<?php

namespace App\Models;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class PlusCost extends Model
{
    //
    protected $table = 'plus_costs';
    protected $fillable = ['vehicle_id', 'distance_from', 'distance_to', 'amount'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
