<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'charity_category');
    }
}




