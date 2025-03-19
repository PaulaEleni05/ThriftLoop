<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    // Disable timestamps
    public $timestamps = false;

    
    // Define which attributes are mass assignable. This explicitly define which attributes are mass-assignable, ensuring security and control over my data.
    protected $fillable = [
        'title',
        'user_id',
        'charity_id',
        'category_id',
        'description',
        'condition',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);  // A donation belongs to a user
    }

    public function charities()
    {
        return $this->belongsToMany(Charity::class); // A donation belongs to a charity
    }

    public function category()
    {
        return $this->belongsTo(Category::class);  // A donation belongs to a category
    }
}
