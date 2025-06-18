import { EventData } from '@/types/stats';
import { format } from 'date-fns';
interface eventProps {
    event: EventData;
}

export default function Event({event}:eventProps){
    const formattedDate = format(new Date(event.date), 'MMMM dd, yyyy');
    const formattedStartTime = event.start_time ? format(new Date(event.start_time), 'HH:mm') : null;

    return (
        <>
        <div className='flex flex-col gap-5 bg-[#1E2025] rounded-md p-4'>
            <div className='flex flex-col gap-2'>
                <img className='rounded-sm' src={event.image}></img>
                <h1>{event.name}</h1>
            </div>
                <p>{formattedDate},  {formattedStartTime}h</p>
        </div>
        </>
    );
}