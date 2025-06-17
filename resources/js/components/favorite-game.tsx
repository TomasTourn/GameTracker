import { Game } from "@/types/stats";

interface FavoriteGameProps {
    game: Game | null;
}

export default function FavoriteGame({ game } :FavoriteGameProps){
    return(
        <>
        <div className="flex flex-col xl:flex-row gap-4 items-center xl:items-start justify-center xl:justify-between  h-[88%]">
            <div className="xl:flex xl:gap-4 xl:flex-col xl:ml-4 xl:mt-4">
                <h1 className="text-2xl text-white/90">{game?.title}</h1>
                <p className="hidden mt-2 xl:line-clamp-7 ">{game?.description}</p>
            </div>
            <img className="w-40 xl:w-48 xl:mr-8 xl:mt-8 rounded-sm" src={game?.image}></img>

        </div>
        <p className="justify-self-center mt-2 xl:mt-0 xl:justify-self-start xl:ml-5">Favorite Game</p>
        </>
    );
}