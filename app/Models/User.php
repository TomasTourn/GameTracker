<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'description',
        'favorite_game_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function games(){
        return $this->belongsToMany(Game::class)
        ->withPivot('status','hours_played','progress')
        ->withTimestamps();
    }

    public function favoriteGame(){
        return $this->belongsTo(Game::class, 'favorite_game_id');
    }

}
