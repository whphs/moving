<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoveType extends Model
{
    //
    protected $table = 'movetypes';
    protected $fillable = ['name', 'area'];
}
