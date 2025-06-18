import GameCard from '@/components/game-card';
import AppLayout from '@/layouts/app-layout';
import { Game, Genre } from '@/types/stats';
import { UserGame } from '@/types/stats';
import { Head, router } from '@inertiajs/react';
import { Select } from '@radix-ui/react-select';
import { SelectContent, SelectItem, SelectTrigger, SelectValue } from '@/components/ui/select';
import { Input } from '@/components/ui/input';
import { useState } from 'react';
import searchIcon from '@/assets/search.svg';

interface CatalogProps {
    games: Game[];
    userGames: UserGame[];
    filters: Filters;
    genres: Genre[];
}

interface Filters {
    search?: string;
    genre?: string;
    year?: string;
    rating?: string;
}

export default function Catalog({ games, userGames, filters, genres }: CatalogProps) {

    const [search, setSearch] = useState(filters.search || '');
    const years = Array.from({ length: 2025 - 1980 + 1 }, (_, i) => 2025 - i);
    const updateFilters = (newFilters: Partial<Filters>) => {

        // If value is "all", send undefined to remove the filter
        const processedFilters = Object.entries(newFilters).reduce((acc, [key, value]) => ({
            ...acc,
            [key]: value === "all" ? undefined : value
        }), {});

        router.get('/games', {
            ...filters,
            ...processedFilters
        }, {
            preserveState: true,
            preserveScroll: true,
        })
    }

    return (
        <AppLayout>
            <Head title="Catalog" />
            <div className='flex flex-col lg:flex-row justify-end gap-4 mt-4 m-2 lg:m-0 lg:mt-4'>
                <div className='w-full'>
                    <h3 className='text-lg font-semibold mb-1 text-white/90'>Catalog</h3>
                    <div className="relative">
                        <img src={searchIcon} className="absolute left-3 top-1/2 transform -translate-y-1/2 h-auto w-6 text-muted-foreground" />
                        <Input
                            type="text"
                            placeholder=""
                            className="pl-10 self-end"
                            onChange={(e) => setSearch(e.target.value)}
                            onKeyDown={(e) => {
                                if (e.key === 'Enter') {
                                    updateFilters({ search: search.trim() });
                                }
                            }}
                        />
                        <button onClick={() => updateFilters({ search: search.trim() })} className='absolute top-0 right-0 cursor-pointer px-4 py-[5.5px]'>Search</button>
                    </div>
                </div>
                <div>
                    <h3 className='text-lg font-semibold mb-1 text-white/90'>Rating</h3>
                    <Select
                        onValueChange={(value) => updateFilters({ rating: value })}>
                        <SelectTrigger className="w-full lg:w-[180px]">
                            <SelectValue placeholder="All" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="all">All</SelectItem>
                            <SelectItem value="10">10</SelectItem>
                            <SelectItem value="9">9</SelectItem>
                            <SelectItem value="8">8</SelectItem>
                        </SelectContent>
                    </Select>
                </div>
                <div>
                    <h3 className='text-lg font-semibold mb-1 text-white/90'>Year</h3>
                    <Select
                        onValueChange={(value) => updateFilters({ year: value })}>
                        <SelectTrigger className="w-full lg:w-[180px]">
                            <SelectValue placeholder="All" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="all">All</SelectItem>
                            {years.map((year) => (
                                <SelectItem key={year} value={year.toString()}>{year}</SelectItem>
                            ))}

                        </SelectContent>
                    </Select>
                </div>
                <div>
                    <h3 className='text-lg font-semibold mb-1 text-white/90'>Genre</h3>
                    <Select
                        onValueChange={(value) => updateFilters({ genre: value })}>
                        <SelectTrigger className="w-full lg:w-[180px]">
                            <SelectValue placeholder="All" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectItem value="all">All</SelectItem>
                            {genres.map((genre) => (
                                <SelectItem key={genre.id} value={genre.id.toString()}>{genre.name}</SelectItem>
                            ))}

                        </SelectContent>
                    </Select>
                </div>
            </div>
            <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4">
                {games.map((game: Game) => (
                    <GameCard
                        key={game.id}
                        game={game}
                        userGame={userGames.find(ug => ug.game_id === game.id) || null}
                    />
                ))}
            </div>
        </AppLayout>
    );
}