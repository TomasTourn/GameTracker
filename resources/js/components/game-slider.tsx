import {useKeenSlider} from 'keen-slider/react';
import 'keen-slider/keen-slider.min.css';
import { Game } from "@/types/stats";
import GameCard from './game-card';
import { UserGame } from '@/types/stats';

interface GameSliderProps {
    title: string;
    games: Game[];
    userGames:Record<number, UserGame>;
}

export default function GameSlider({title, games,userGames}:GameSliderProps){
    const [sliderRef] = useKeenSlider({
        slides:{
            perView: 3,
            spacing: 15,
        },
        breakpoints: {
            '(min-width: 768px)': {
                slides: { perView: 4, spacing: 15 }
            },
            '(min-width: 1024px)': {
                slides: { perView: 5, spacing: 15 }
            },
            '(min-width: 1280px)': {
                slides: { perView: 6, spacing: 15 }
            },
        }
    });

    return(
        <>
        <div>
            <h2 className='text-2xl mb-2'>{title}</h2>
            <div ref={sliderRef} className='keen-slider rounded-sm'>
                {games.map(game=>(
                    <GameCard key={game.id} game={game}
                    userGame={userGames[game.id]}></GameCard>
                ))}
            </div>
        </div>
        </>
    );
}