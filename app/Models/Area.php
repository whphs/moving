<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table = 'area';
    protected $fillable = ['name', 'country', 'zip_code'];
}
