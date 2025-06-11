
import UserStatNumber from "./user-stat-number";
import UserChart from "./userChart";
import type { UserStatsData } from '@/types/stats';

interface UserStatsProps {
    stats: UserStatsData;
}


export default function UserStats({stats}:UserStatsProps) {
    return (
        <>
            <div className="flex flex-col lg:flex-row justify-between items-center h-full p-4">
                <div className="grid h-full lg:h-[50%] grid-cols-2 md:grid-cols-3 2xl:gap-4 2xl:pl-12 text-center">
                    <UserStatNumber title="Played" value={stats.totalPlayed}/>
                    <UserStatNumber title="Playing" value={stats.totalPlaying}/>
                    <UserStatNumber title="Reviews" value={stats.totalReviews}/>
                    <UserStatNumber title="Owned" value={stats.totalGames}/>
                    <UserStatNumber title="WishList" value={stats.totalWishlist}/>
                    <UserStatNumber title="Hours Played" value={stats.totalHours}/>
                </div>
                <div className="hidden md:flex justify-end 2xl:mr-20">
                    <UserChart ratings={stats.ratingsDistribution} />
                </div>
            </div>
        </>
    );
}