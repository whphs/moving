<?php

namespace App\Models;

use App\User;
use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
