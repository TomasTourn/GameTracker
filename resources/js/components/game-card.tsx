import { Game } from "@/types/stats";
import { useState } from "react";
import GamePadGreen from '@/assets/gamepad-green.svg';
import { router } from '@inertiajs/react';
import { UserGame } from "@/types/stats";
import BackLogPink from '@/assets/backlog-pink.svg';
import WishlistRed from '@/assets/wishlist-red.svg';
import GamePadGrey from '@/assets/gamepadgrey.svg';
import WishListGrey from '@/assets/wishlist-grey.svg';
import BackLogGrey from '@/assets/backlog-grey.svg';
import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from "@/components/ui/tooltip";


interface gameCardProps {
    game: Game;
    userGame: UserGame;
}




export default function GameCard({game,userGame}:gameCardProps) {

    const [hovered, setHovered] = useState(false);
    const [currentStatus, setCurrentStatus] = useState<string | null>(userGame?.status || null);


    const updateGameStatus = async (gameId: number, status: string) => {
        if (currentStatus === status) {
            // Si el estado actual es igual al que queremos poner, eliminamos
            router.delete(`/user-games/game/${gameId}`, {
                preserveScroll: true,
                onSuccess: () => {
                    setCurrentStatus(null);
                    console.log('Game removed successfully');
                }
            });
        } else {
            // Si no, actualizamos o creamos
            router.post('/user-games', {
                game_id: gameId,
                status: status
            }, {
                preserveScroll: true,
                onSuccess: () => {
                    setCurrentStatus(status);
                    console.log('Status updated successfully');
                }
            });
        }
    };

    const handleCardClick = () => {

            router.visit(`/games/${game.id}`);

    };

    return (
        <>
            <div className="keen-slider__slide relative cursor-pointer"
                 onMouseEnter={()=>setHovered(true)}
                 onMouseLeave={()=>setHovered(false)}
                 onClick={handleCardClick}
            >
                <img
                src={game.image}
                alt={game.title}
                className="rounded-sm"
                />
                {hovered && (
                    <div className="absolute text-white inset-0 bg-black/60 flex justify-center items-center flex-col">
                        <div>
                            <h1 className="text-lg text-center m-2">{game.title}</h1>
                        </div>
                    <div className="backdrop-blur-xs bg-white/10 flex flex-row gap-4 absolute bottom-4 p-2 rounded-sm" onClick={(e) => e.stopPropagation()}>
                        <TooltipProvider>
                            <Tooltip>
                                <TooltipTrigger>
                                    <span className="flex items-center justify-center" onClick={(e) => {e.stopPropagation();updateGameStatus(game.id, 'completed');}}>
                                        <img src={currentStatus=='completed'?GamePadGreen:GamePadGrey} className="w-9 ml-1 cursor-pointer" />
                                    </span>
                                </TooltipTrigger>
                                <TooltipContent>
                                    <p>Mark as played</p>
                                </TooltipContent>
                            </Tooltip>

                            <Tooltip>
                                <TooltipTrigger>
                                    <span className="flex items-center justify-center" onClick={(e) => {e.stopPropagation();updateGameStatus(game.id, 'wishlist');}}>
                                        <img src={currentStatus=='wishlist'?WishlistRed:WishListGrey} className="w-7 cursor-pointer" />
                                    </span>
                                </TooltipTrigger>
                                <TooltipContent>
                                    <p>Add to wishlist</p>
                                </TooltipContent>
                            </Tooltip>

                            <Tooltip>
                                <TooltipTrigger>
                                    <span className="flex items-center justify-center" onClick={(e) => {e.stopPropagation();updateGameStatus(game.id, 'pending');}}>
                                        <img src={currentStatus=='pending'?BackLogPink:BackLogGrey} className="w-6 mr-1 cursor-pointer" />
                                    </span>
                                </TooltipTrigger>
                                <TooltipContent>
                                    <p>Add to backlog</p>
                                </TooltipContent>
                            </Tooltip>
                        </TooltipProvider>
                    </div>
                    </div>
                )}
            </div>
        </>
    );
}