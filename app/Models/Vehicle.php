<?php

namespace App\Models;

use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $table = 'vehicles';
    protected $fillable = [
        'name',
        'move_type_id',
        'area_id',
        'size',
        'load_weight',
        'volume',
        'description',
        'available_baggages',
        'unavailable_baggages',
        'vehicle_thumb',
        'baggage_thumb',
        'photo_0',
        'photo_1',
        'photo_2',
    ];

    public function move_type()
    {
        return $this->belongsTo(MoveType::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
