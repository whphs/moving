<?php

namespace App\Models;

use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $table = 'bonus';
    protected $fillable = ['title', 'move_type_id', 'area_id', 'price', 'start_date', 'end_date'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
