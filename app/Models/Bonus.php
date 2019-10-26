<?php

namespace App\Models;

use App\User;
use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    // Get area of Bonus.
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    // Get user of Bonus.
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
