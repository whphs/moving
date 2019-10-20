<?php

namespace App\Models;

use App\Models\Scale;
use Illuminate\Database\Eloquent\Model;

class FloorPrice extends Model
{
    //
    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}
