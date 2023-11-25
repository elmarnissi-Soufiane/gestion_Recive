<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'ingredients',
        'steps',
        'preparation_time'
    ];

}
