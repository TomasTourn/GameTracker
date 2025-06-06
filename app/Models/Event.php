<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'date',
        'start_time',
        'image'
    ];
    protected $casts = [
        'date' => 'datetime',
        'start_time' => 'datetime',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
