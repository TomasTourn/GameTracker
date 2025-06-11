import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import UserStats from '@/components/user-stats';
import type { UserStatsData } from '@/types/stats';
import FavoriteGame from '@/components/favorite-game';
import GameSlider from '@/components/game-slider';
import { Game } from '@/types/stats';

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
    trendingGames: Game[];
};

export default function Dashboard({userStats,recentGames,topRatedGames,trendingGames}: DashboardProps) {
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

                    <GameSlider title="Nuevos Estrenos" games={recentGames}></GameSlider>
                    {/* <GameSlider title="Mejor Puntuados" games={topRatedGames}></GameSlider> */}
                    <GameSlider title="Tendencias" games={trendingGames}></GameSlider>

            </div>
        </AppLayout>
    );
}
