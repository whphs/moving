<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    //
    protected $table = 'bonuses';
    protected $fillable = ['title', 'move_type', 'price', 'start_date', 'end_date'];
}
