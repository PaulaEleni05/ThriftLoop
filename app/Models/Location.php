<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;  // Disable automatic timestamp handling

    protected $fillable = ['address', 'latitude', 'longitude', 'charity_id'];  // Allowing mass assignment


}
