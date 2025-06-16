interface GameTagProps {
    title: string;
    isplatform?: boolean;
}

export default function GameTag({title,isplatform}:GameTagProps) {
    return (
        <span className={`${isplatform? 'bg-[#1E2025]':'bg-none border border-[#bfbfbf]'} py-2 px-4 mx-1 rounded-full `}>
            {title}
        </span>
    );
}