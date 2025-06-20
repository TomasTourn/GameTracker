import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import UserStats from '@/components/user-stats';
import type { EventData, UserStatsData } from '@/types/stats';
import FavoriteGame from '@/components/favorite-game';
import GameSlider from '@/components/game-slider';
import { Game } from '@/types/stats';
import { UserGame } from '@/types/stats';
import Review from '@/components/review';
import { review } from '@/types/stats';
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "@/components/ui/select"
import { router } from '@inertiajs/react';
import Event from '@/components/event';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

type DashboardProps = {
    userStats: UserStatsData;
    recentGames: Game[];
    topRatedGames: Game[];
    userGames:Record<number,UserGame>
    reviews: review[];
    events: EventData[];
};

export default function Dashboard({userStats,recentGames,topRatedGames,userGames,reviews,events}: DashboardProps) {

    const handleFilterChange = (value : string) => {
        router.get('/dashboard',{
            filter:value
        },{
            preserveScroll: true,
            preserveState: true,
            only: ['reviews'],
        })
    }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                <div className="flex flex-col md:flex-row gap-4">
                    <div className="md:basis-3/5 h-80 border-sidebar-border/70 dark:border-sidebar-border relative overflow-hidden rounded-xl border">
                        <UserStats stats={userStats}/>
                    </div>
                    <div className="md:basis-2/5 h-80 border-sidebar-border/70 dark:border-sidebar-border relative overflow-hidden rounded-xl border">
                        <FavoriteGame game={userStats.favoriteGame} />
                    </div>
                </div>

                    <GameSlider title="New" games={recentGames} userGames={userGames}></GameSlider>
                    <GameSlider title="Top Rated" games={topRatedGames} userGames={userGames}></GameSlider>
                <div className='mt-10'> 
                    <div className='flex justify-between mr-4 mb-2'>
                        <h1 className="text-2xl font-bold text-white/90 mb-2">Reviews</h1>
                        <Select defaultValue="popular" onValueChange={handleFilterChange}>
                            <SelectTrigger className="w-[180px] ">
                                <SelectValue placeholder="Filter reviews" />
                            </SelectTrigger>
                            <SelectContent>
                                <SelectItem value="popular">Popular</SelectItem>
                                <SelectItem value="recent">Recent</SelectItem>
                                <SelectItem value="oldest">Oldest</SelectItem>
                            </SelectContent>
                        </Select>
                    </div>
                    <div className='flex flex-row flex-wrap gap-4'>

                        {reviews.map((review) => (
                            <Review key={review.id} review={review}/>
                        ))}
                    </div>
                </div>  

                <div className='grid grid-cols-3 gap-4'>
                    {events.map((event:EventData) => (
                        <Event event={event}></Event>
                    ))}
                </div>
            </div>
        </AppLayout>
    );
}
