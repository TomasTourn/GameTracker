interface userStatsNumberProps {
    title: string;
    value: number|string;
}

export default function UserStatNumber({title, value}:userStatsNumberProps) {
    return (
        <div className="flex text-lg flex-col items-center justify-center min-w-[100px]">
            <h5 className="text-red-700 text-center w-full">{title}</h5>
            <p className="text-2xl font-bold p-2 text-center w-full">{value}</p>
        </div>
    );
}