interface  GameStatsProps {
    number: string | number;
    title: string;
}

export default function GameStats({number, title}: GameStatsProps) {
    return (
        <div className="flex flex-col items-center justify-center text-center p-4 border border-[#bfbfbf]/30 rounded-sm  text-md xl:px-6">
            <p>{number}</p>
            <p>{title}</p>
        </div>
    );
}