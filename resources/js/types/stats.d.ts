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

export interface review {
    id: number;
    userId: number;
    gameId: number;
    comment: string;
    rating: number;
    game: Game;
    user: User;
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar: string;
    description: string;
    favoriteGameId: number | null;
}

export interface ReviewLikes {
    reviewId: number;
    likesCount: number;
}


