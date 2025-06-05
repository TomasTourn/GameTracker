import react from 'react';
import { PageProps } from '@/types'
import { Head } from '@inertiajs/react'

interface Game {
    id:number;
    title: string;
    description: string;
    releaseDate: string;
    developer: string;
    publisher: string;
    genres: {id: number; name: string}[];
    image: string;
}
interface Props extends PageProps {
    games: Game[];
}

export default function Index({ games }:Props){
    return (
    <>
        <Head title='Lista de Juegos'/>
        <div className='p-4'>
            <h1 className='text-2xl font-bold mb-4'>Juegos</h1>
            <ul className='flex flex-wrap gap-4'>
                {games.map((game)=>(
                    <li key={game.id} className='border p-4 rounded-shadow'>
                        <div className='font-semibold'>{game.title}</div>
                        <div className='text-sm text-gray-600'>
                            {game.developer} - {game.publisher}
                        </div>
                        <div className='text-sm'>{game.releaseDate}</div>
                        <div className='text-sm'>
                            Generos: {game.genres.map(g=>g.name).join(', ')}
                        </div>
                        <img src={game.image} alt={game.title} className='sm:w-50 object-cover mt-2' />
                    </li>
                ))}
            </ul>
        </div>
    </>
    );
}