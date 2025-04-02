<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{

    use HasFactory;  // Add to enable the factory method

    protected $fillable = ['name']; 

    public $timestamps = false;// Disable timestamps

    public function charities()
    {
        return $this->belongsToMany(Charity::class , 'charity_category');

    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
