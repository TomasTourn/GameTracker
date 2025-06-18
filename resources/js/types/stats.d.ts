export interface Game{
    id: number;
    title: string;
    description: string;
    release_date: string;
    developer: string;
    publisher: string;
    rating: number;
    image: string;
    genres:Genre[];
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
    game_id: number;
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
    liked_by_users_count: number;
    is_liked_by_current_user: boolean;
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

export interface Genre{
    id: number;
    name: string;
    desription: string;
}

export interface EventData{
    id:number;
    name:string;
    description:string;
    date:string;
    start_time:string;
    image:string;
}

