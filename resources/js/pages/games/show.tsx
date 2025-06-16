import AppLayout from '@/layouts/app-layout';
import { Head } from '@inertiajs/react';
import { Game } from '@/types/stats';
import { format } from 'date-fns';
import GameTag from '@/components/game-tag';
import { Button } from '@/components/ui/button';
import GameStats from '@/components/game-stats';
import GameDev from '@/components/game-dev';
import GameTime from '@/components/game-time';

interface ShowProps {
    game: Game;
}

export default function Show({ game }: ShowProps) {

    const formattedDate = format(new Date(game.release_date), 'MMMM dd, yyyy');

    return (
        <AppLayout>
            <Head title="hola" />
            <div className='flex flex-col  xl:flex-row text-center xl:text-start mt-5 w-[80%] lg:w-full self-center '>
                <div className='xl:w-[40%] m-4'>
                    <img className='rounded-sm border-[#252323] border-3 ' src={game.image} alt={game.title} />
                </div>
                <div className='mt-2'>
                    <h1 className='text-2xl text-white/90'>{game.title}</h1>
                    <h3 className='mb-4'>{formattedDate}</h3>
                    <div className='flex flex-wrap gap-y-2 justify-center'>
                        <GameTag title={'PC (microsoft Windows)'} isplatform={true} />
                        <GameTag title={'Playstation 5'} isplatform={true} />
                        <GameTag title={'Xbox Series X/S'} isplatform={true} />
                        <GameTag title={'Nintendo Switch'} isplatform={true} />
                    </div>
                    <div className='flex flex-wrap gap-2 mt-4 justify-center xl:justify-start'>
                        <Button>Mark as Played</Button>
                        <Button>Add to WishList</Button>
                        <Button>Add to BackLog</Button>
                    </div>
                    <div className='grid grid-cols-2  m-8 gap-2 '>
                        <GameStats number='10' title={'Rating'}></GameStats>
                        <GameStats number='50k' title={'Playing'}></GameStats>
                        <GameStats number='6m' title={'WishList'}></GameStats>
                        <GameStats number='30m' title={'Sales'}></GameStats>
                    </div>
                    <div className=' mx-auto'>
                        <GameDev developer={game.developer} publisher={game.publisher}></GameDev>
                    </div>
                    <div className='flex flex-wrap gap-y-2 justify-center mt-4'>
                        {game.genres.map((genre) => (
                            <GameTag key={genre.id} title={genre.name} />
                        ))} 
                    </div>
                    <div className='mt-8 mx-auto bg-[#1E2025] p-4 rounded-sm'>
                        <h2 className='text-2xl text-white/90 mb-2'>Summary</h2>
                        <p className='text-start'>{game.description}</p>
                    </div>
                </div>

            </div>
                <div>
                        <GameTime></GameTime>
                </div>
        </AppLayout>
    );
}