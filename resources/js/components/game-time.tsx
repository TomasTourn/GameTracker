import FullCircle from '@/assets/circle-full.svg';
import HalfCircle from '@/assets/circle-half.svg';
import QuarterCircle from '@/assets/quarter-circle.svg';


export default function GameTime() {
    return (
        <div className='bg-[#1E2025] p-4 rounded-sm gap-4 text-white/90 flex flex-col mt-5'>
            <div className='flex  items-center justify-between'>
                <img className='w-8' src={QuarterCircle} alt="" />
                <p>Main Story</p>
                <div className='border-[#bfbfbf] border py-2 px-4 rounded-sm'>
                    <span>12h</span>
                </div>
            </div>

            <div className='flex  items-center justify-between'>
                <img className='w-8' src={HalfCircle} alt="" />
                <p>Main + Extras</p>
                <div className='border-[#bfbfbf] border py-2 px-4 rounded-sm'>
                    <span>18h</span>
                </div>
            </div>
            
            <div className='flex  items-center justify-between'>
                <img className='w-8' src={FullCircle} alt="" />
                <p>Completionist</p>
                <div className='border-[#bfbfbf] border py-2 px-4 rounded-sm'>
                    <span>35h</span>
                </div>
            </div>
        </div>
    );
}
