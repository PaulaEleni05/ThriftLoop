<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{

    use HasFactory;  // Add to enable the factory method

    public $timestamps = false;// Disable timestamps

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

    public function charity()
    {
        return $this->belongsTo(Charity::class); // A donation belongs to a charity
    }

    public function category()
    {
        return $this->belongsTo(Category::class);  // A donation belongs to a category
    }


    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
