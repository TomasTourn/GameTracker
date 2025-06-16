interface  GameStatsProps {
    number: string | number;
    title: string;
}

export default function GameStats({number, title}: GameStatsProps) {
    return (
        <div className="flex flex-col items-center justify-center text-center font-medium p-4 border-2 border-[#bfbfbf] rounded-sm  text-xl">
            <p>{number}</p>
            <p>{title}</p>
        </div>
    );
}