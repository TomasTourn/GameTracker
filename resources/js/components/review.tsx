import likeGrey from '@/assets/like-grey.svg';
import starGrey from '@/assets/stargrey.svg';

import { review } from '@/types/stats';
import { Game } from '@/types/stats';
import { User } from '@/types/stats';
import { ReviewLikes } from '@/types/stats';

interface reviewProps {
    review: review;
}


export default function Review({review}:reviewProps){
    return (
        <div className="flex p-4 border-2 rounded-sm max-w-3xl font-medium">
            <div>
                <img src={review.game.image} alt=""  className="rounded-sm max-w-32 md:max-w-48"/>
            </div>
            <div className="p-4 pt-0 flex flex-col gap-4">
                    <h1 className="text-2xl font-bold text-white/90">{review.game.title}</h1>
                    <p>{review.comment}</p>
                <div className="flex flex-col md:flex-row justify-between h-full items-end">
                    <ul className='flex flex-col gap-1'>
                        <li className='flex gap-2 items-center'><img src={starGrey} className='w-[30px]' alt="" /> {review.rating}</li>
                        <li className='flex gap-1 items-center cursor-pointer'><img src={likeGrey} alt="" className='w-[35px]' /> {15}</li>
                    </ul>
                    <p className="self-end">reviewed by {review.user.name}</p>
                </div>
            </div>

        </div>
    );
}