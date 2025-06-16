interface gameDevProps {
    developer: string;
    publisher: string;
}

export default function GameDev({ developer, publisher }: gameDevProps) {
    return (
        <div className="flex gap-4 text-start bg-[#1E2025] rounded-sm p-4 justify-around">
            <div className="flex flex-col  gap-2 ">
                <span className="font-medium">Developer</span>
                <span>{developer}</span>
            </div>
            <div className="flex flex-col  gap-2">
                <span className="font-medium">Publisher</span>
                <span>{publisher}</span>
            </div>
        </div>
    );
}