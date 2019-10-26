<?php

namespace App\Models;

use App\Models\Area;
use Illuminate\Database\Eloquent\Model;

class MoveType extends Model
{
    // Get area of MoveType.
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
