<?php

namespace App\Models;

use App\GameStatus;
use Illuminate\Database\Eloquent\Model;

class UserGame extends Model
{
    protected $table = 'game_user';

    protected $fillable = [
        'user_id',//foranea
        'game_id',//foranea
        'status',//jugado,jugando,pendiente,wishlist,pausado
        'hours_played',//horas jugadas
        'progress',//% logros
    ];

    protected $casts =[
        'status'=>GameStatus::class,
        'hours_played'=>'integer',
        'progress'=>'float',
    ];

    //relaciones

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function game(){
        return $this->belongsTo(Game::class,'game_id');
    }

    //scope para traerme la biblioteca de un usuario, es decir, sin su wishlist
    public function scopeWithoutWishlist($query){
        return $query->where('status','!=',GameStatus::Wishlist->value);
    }

}
