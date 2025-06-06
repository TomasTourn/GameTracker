<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'release_date',
        'developer',
        'publisher',
        'rating',
        'image'
    ];

    protected $casts = [
        'release_date' => 'date',
        'rating' => 'float',
    ];

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
