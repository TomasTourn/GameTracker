import { useForm } from '@inertiajs/react';
import { Game } from '@/types/stats';
import { Button } from './ui/button';
import { Input } from './ui/input';
import { Textarea } from './ui/textarea';
import { Genre } from '@/types/stats';
import { Checkbox } from './ui/checkbox';

interface gameFormProps {
    game?: Game | null;
    genres: Genre[];
}

export default function GameForm({game,genres}: gameFormProps) {

    const toggleGenre=(id: number)=> {
        if (form.data.genres.includes(id)) {
            form.setData('genres', form.data.genres.filter(gid => gid !== id));
        } else {
            form.setData('genres', [...form.data.genres, id]);
        }
    }


    const form = useForm({
            title:game?.title || '',
            description: game?.description || '',
            release_date: game?.release_date || '',
            developer: game?.developer || '',
            publisher: game?.publisher || '',
            rating: game?.rating || '',
            image: null,
            genres: game?.genres?.map(genre => genre.id) || [],
    });

    function submit(){
        if(game?.id){//already exists, update it
            form.post(route('games.store'), {
    forceFormData: true
});
        }
        else{
            form.put(route('games.update', game?.id), {
    forceFormData: true
});
        }
    }

    return (
        <form className='m-2 flex flex-col gap-y-3'
         onSubmit={e => { e.preventDefault(); submit(); }}
         >
            <div>
                <h3 className='text-lg font-semibold mb-1 text-white/90'>Title:</h3>
                <Input className='border border-[#bfbfbf]/60 rounded-md'
                value={form.data.title}
                onChange={e => form.setData('title', e.target.value)}
                />
                {form.errors.title && <div>{form.errors.title}</div>}
            </div>
            <div>
                <h3 className='text-lg font-semibold mb-1 text-white/90'>Description:</h3>
                <Textarea className='border border-[#bfbfbf]/60 rounded-md'
                value={form.data.description}
                onChange={e => form.setData('description', e.target.value)}
                />
                {form.errors.description && <div>{form.errors.description}</div>}
            </div>
            <div>
                <h3 className="text-lg font-semibold mb-2 text-white/90">Genres:</h3>
                <div className="flex flex-wrap gap-4">
                    {genres.map(genre => (
                        <label key={genre.id} className="flex items-center space-x-2">
                        <Checkbox
                            checked={form.data.genres.includes(genre.id)}
                            onCheckedChange={() => toggleGenre(genre.id)}
                            id={`genre-${genre.id}`}
                        />
                        <span>{genre.name}</span>
                        </label>
                    ))}
                </div>
                {form.errors.genres && (
                <p className="text-red-600 mt-1">{form.errors.genres}</p>
                )}
            </div>

            <div>
                <h3 className='text-lg font-semibold mb-1 text-white/90'>Image:</h3>
                <Input
                    type="file"
                    accept="image/*"
                />
                {form.errors.image && <div className="text-red-600">{form.errors.image}</div>}
            </div>

            {/* otros campos */}

            <Button  disabled={form.processing}>Guardar</Button>
        </form>
    );
}
