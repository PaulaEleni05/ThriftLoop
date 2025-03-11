<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    public function charities()
    {
        return $this->belongsToMany(Charity::class);
    }
}
