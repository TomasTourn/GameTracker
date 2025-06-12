export interface Game{
    id: number;
    title: string;
    description: string;
    releaseDate: string;
    developer: string;
    publisher: string;
    rating: number;
    image: string;
}

export type RatingsDistribution = number[];

export interface UserStatsData {
    totalGames: number;
    totalHours: number;
    progressAvg: number;
    totalWishlist: number;
    totalReviews: number;
    totalPlayed: number;
    totalPlaying: number;
    favoriteGame: Game | null;
    ratingsDistribution: RatingsDistribution;
}

export interface UserGame {
    id: number;
    userId: number;
    gameId: number;
    status: string;
    progress: number;
    hoursPlayed: number;
}



