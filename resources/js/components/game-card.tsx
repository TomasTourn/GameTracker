import { Game } from "@/types/stats";
import { useState } from "react";

interface gameCardProps {
    game: Game;
}



export default function GameCard({game}:gameCardProps) {

    const [hovered, setHovered] = useState(false);

    return (
        <>
            <div className="keen-slider__slide">
                <img
                src={game.image}
                alt={game.title}
                className="rounded-sm"
                />
            </div>
        </>
    );
}