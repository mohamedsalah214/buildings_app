<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'name',
        'description',
        'size',
        'date_built',
        'owner_name',
        'color',
        'floors',
    ];
}
