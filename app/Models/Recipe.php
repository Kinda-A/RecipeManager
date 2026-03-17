<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // Tell Laravel the actual table name
    protected $table = 'recipe';

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'instructions'
    ];
}
