<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function charities()
    {
        return $this->belongsToMany(Charity::class , 'charity_category');

    }
}
