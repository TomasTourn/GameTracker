import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';
import { Game } from '@/types/stats';
import { format } from 'date-fns';
import GameTag from '@/components/game-tag';
import { Button } from '@/components/ui/button';
import GameStats from '@/components/game-stats';
import GameDev from '@/components/game-dev';
import GameTime from '@/components/game-time';
import { UserGame } from '@/types/stats';
import { useState } from 'react';
import { router } from '@inertiajs/react';


interface ShowProps {
    game: Game;
    userGame:UserGame|null;
}

export default function Show({ game,userGame }: ShowProps) {




    const formattedDate = format(new Date(game.release_date), 'MMMM dd, yyyy');
    const [currentStatus, setCurrentStatus] = useState<string | null>(userGame?.status || null);

    const updateGameStatus = async (gameId: number, status: string) => {
        if (currentStatus === status) {
            router.delete(`/user-games/game/${gameId}`, {
                preserveScroll: true,
                onSuccess: () => {
                    setCurrentStatus(null);
                }
            });
            router.post('/user-games', {
                game_id: gameId,
                status: status
            }, {
                preserveScroll: true,
                onSuccess: () => {
                    setCurrentStatus(status);
                }
            });
        }
    };

    return (
        <AppLayout>
            <Head title={game.title} />
            <div className='flex flex-col  xl:flex-row text-center xl:text-start mt-5 w-[80%] lg:w-full self-center justify-center xl:gap-x-3'>
                <div className='xl:w-[40%] 2xl:w-[30%] m-4'>
                    <img className='rounded-sm border-[#252323] border-3 ' src={game.image} alt={game.title} />
                    <GameTime></GameTime>
                </div>
                <div className='mt-3'>
                    <h1 className='text-2xl text-white/90 xl:text-4xl'>{game.title}</h1>
                    <h3 className='mb-4 mt-2'>{formattedDate}</h3>
                    <div className='flex flex-wrap gap-y-2 justify-center xl:justify-start'>
                        <GameTag title={'PC (microsoft Windows)'} isplatform={true} />
                        <GameTag title={'Playstation 5'} isplatform={true} />
                        <GameTag title={'Xbox Series X/S'} isplatform={true} />
                        <GameTag title={'Nintendo Switch'} isplatform={true} />
                    </div>
                    <div className='flex flex-wrap gap-2 mt-5 justify-center xl:justify-start'>
                        <Button onClick={()=>updateGameStatus(game.id, 'completed')}>Mark as Played</Button>
                        <Button onClick={()=>updateGameStatus(game.id, 'wishlist')}>Add to WishList</Button>
                        <Button onClick={()=>updateGameStatus(game.id, 'pending')}>Add to BackLog</Button>
                    </div>
                    <div className='grid grid-cols-2  mx-8 mt-5 xl:ml-0 gap-2 xl:gap-3 xl:flex'>
                        <GameStats number={game.rating} title={'Rating'}></GameStats>
                        <GameStats number='50k' title={'Playing'}></GameStats>
                        <GameStats number='6m' title={'WishList'}></GameStats>
                        <GameStats number='30m' title={'Sales'}></GameStats>
                    </div>

                    <h1 className='text-2xl text-white/90 mt-5'>Tags</h1>
                    <div className='flex flex-wrap gap-y-2 justify-center mt-3 xl:justify-start'>
                        {game.genres.map((genre) => (
                            <GameTag key={genre.id} title={genre.name} />
                        ))} 
                    </div>
                    <div className='mx-auto xl:mx-0 mt-8'>
                        <GameDev developer={game.developer} publisher={game.publisher}></GameDev>
                    </div>
                    <div className='mt-5 mx-auto p-4 '>
                        <h2 className='text-2xl text-white/90 mb-2'>Summary</h2>
                        <p className='text-start max-w-xl overflow-auto'>{game.description}</p>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}