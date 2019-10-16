<?php

namespace App\Models;

use App\User;
use App\Models\Area;
use App\Models\MoveType;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $table = 'bonuses';
    protected $fillable = ['title', 'move_type_id', 'area_id', 'price', 'start_date', 'end_date'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
