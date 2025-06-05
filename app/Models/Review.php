<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'game_id',
        'rating',
        'comment',
    ];

    public function game(){
        return $this->belongsTo(Game::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function likedByUsers(){
        return $this->belongsToMany(User::class, 'review_user_like')->withTimestamps();
    }
    public function likesCount(){
        return $this->likedByUsers()->count();
    }

    public function toggleLike(User $user){
        if ($this->likedByUsers()->where('user_id', $user->id)->exists()){//si ya dio like
            $this->likedByUsers()->detach($user->id);//lo quita
        } else {
            $this->likedByUsers()->attach($user->id);//si no lo dio, lo agrega
        }
    }

}
