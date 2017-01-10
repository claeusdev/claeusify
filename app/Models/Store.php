<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'location',
        'image_filename'
    ];

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
