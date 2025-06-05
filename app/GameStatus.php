<?php

namespace App;

//define los estados de un juego
enum GameStatus:string
{
    case Playing = 'playing';
    case Paused = 'paused';
    case Completed = 'completed';
    case Wishlist = 'wishlist';
    case Pending = 'pending';
    case Abandoned = 'abandoned';

    public static function values():array{
        return array_column(self::cases(),'value');
    }
}
