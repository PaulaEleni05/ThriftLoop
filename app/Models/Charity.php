<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charity extends Model
{
    use HasFactory;  // Add to enable the factory method

    protected $fillable = ['name', 'description']; 

    public $timestamps = false;// Disable timestamps

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'charity_category');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}




