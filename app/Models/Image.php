<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    public $timestamps = false;// Disable timestamps

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
