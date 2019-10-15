<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class MoveType extends Model
{
    //
    protected $table = 'move_types';
    protected $fillable = ['name', 'area_id'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
