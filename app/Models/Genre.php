<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    // Relación con el modelo Game
    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
