<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        Game::firstOrCreate([
            'title' => 'The Legend of Zelda: Breath of the Wild',
            'description' => 'An open-world action-adventure game set in the vast kingdom of Hyrule.',
            'release_date' => '2017-03-03',
            'developer' => 'Nintendo',
            'publisher' => 'Nintendo',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co3p2d.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'An open-world RPG that follows Geralt of Rivia on his quest to find his adopted daughter.',
            'release_date' => '2015-05-19',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1wyy.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Red Dead Redemption 2',
            'description' => 'An epic tale of life in America at the dawn of the modern age.',  
            'release_date' => '2018-10-26',
            'developer' => 'Rockstar Games',
            'publisher' => 'Rockstar Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1q1f.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Control',
            'description' => 'A supernatural third-person action-adventure game set in a mysterious government building.',
            'release_date' => '2019-08-27',
            'developer' => 'Remedy Entertainment',
            'publisher' => '505 Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co2ewb.webp',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Cyberpunk 2077',
            'description' => 'An open-world RPG set in the dystopian Night City, where players assume the role of V, a customizable mercenary.',
            'release_date' => '2020-12-10',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co7iy1.webp',
            'rating' => 10,
        ]);


        Game::firstOrCreate([
            'title' => 'Resident Evil 4',
            'description' => 'A modernized take on the classic survival horror, with enhanced graphics and refined gameplay.',
            'release_date' => '2023-03-24',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.imgur.com/5oAj86u.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 2',
            'description' => 'A ground-up reimagining of the 1998 classic, offering modern visuals and intense atmosphere.',
            'release_date' => '2019-01-25',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/3RNsWjvQ/re2.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 3',
            'description' => 'A reworked version of the 1999 original, focused on escaping Raccoon City.',
            'release_date' => '2020-04-03',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.imgur.com/3vD8X6v.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 7: Biohazard',
            'description' => 'A return to roots with first‑person perspective, survival horror in a terrifying mansion.',
            'release_date' => '2017-01-24',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/yxk3fG3p/re7.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil Requiem',
            'description' => 'Ninth main installment in the survival horror series, protagonizado por Grace Ashcroft, una agente del FBI que investiga muertes misteriosas en un hotel ligado a su pasado.',
            'release_date' => '2026-02-27',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/rwQcmwPW/re9.png',
            'rating' => 9,
        ]);


        Game::firstOrCreate([
            'title' => 'Resident Evil Village',
            'description' => 'Direct sequel to RE7 with more action, mystery, and memorable villains.',
            'release_date' => '2021-05-07',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/y89c42Qw/village.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'God of War',
            'description' => 'A mythic adventure following Kratos and Atreus in Norse realms.',
            'release_date' => '2018-04-20',
            'developer' => 'Santa Monica Studio',
            'publisher' => 'Sony Interactive Entertainment',
            'image' => 'https://i.postimg.cc/WzWtgw9m/gow.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Dark Souls',
            'description' => 'A punishing action RPG renowned for its deep lore and challenging combat.',
            'release_date' => '2011-09-22',
            'developer' => 'FromSoftware',
            'publisher' => 'Bandai Namco',
            'image' => 'https://i.postimg.cc/43g4K0fk/darksouls.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'The Elder Scrolls V: Skyrim',
            'description' => 'An open-world RPG where you can explore, fight dragons, and join factions in Skyrim.',
            'release_date' => '2011-11-11',
            'developer' => 'Bethesda Game Studios',
            'publisher' => 'Bethesda Softworks',
            'image' => 'https://i.imgur.com/6Aj23QR.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Grand Theft Auto: San Andreas',
            'description' => 'An open-world crime saga set in the early ’90s California-inspired state.',
            'release_date' => '2004-10-26',
            'developer' => 'Rockstar North',
            'publisher' => 'Rockstar Games',
            'image' => 'https://i.postimg.cc/j5hDdbPF/gtasanandreas.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Hades',
            'description' => 'A rogue‑like dungeon crawler where you play as Zagreus trying to escape the Underworld.',
            'release_date' => '2020-09-17',
            'developer' => 'Supergiant Games',
            'publisher' => 'Supergiant Games',
            'image' => 'https://i.postimg.cc/0ND6FmQx/hades.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Devil May Cry 5',
            'description' => 'Stylish action hack and slash starring Dante, Nero, and V.',
            'release_date' => '2019-03-08',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/1Xt3mN98/dmc5.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Dragon Ball: Budokai Tenkaichi 3',
            'description' => 'A massive roster fighting game with iconic Dragon Ball characters.',
            'release_date' => '2007-02-06',
            'developer' => 'Spike',
            'publisher' => 'Atari',
            'image' => 'https://i.postimg.cc/ncXhN7R5/dbzbudokai3.png',
            'rating' => 8,
        ]);

        Game::firstOrCreate([
            'title' => 'Bayonetta',
            'description' => 'An over‑the‑top action game featuring witch Bayonetta battling angels with style.',
            'release_date' => '2009-10-29',
            'developer' => 'PlatinumGames',
            'publisher' => 'Sega',
            'image' => 'https://i.postimg.cc/Kv3m0b4h/bayonetta.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'The Elder Scrolls Online',
            'description' => 'An MMO set in the vast universe of Tamriel, playable solo or with others.',
            'release_date' => '2014-04-04',
            'developer' => 'ZeniMax Online Studios',
            'publisher' => 'ZeniMax Online Studios',
            'image' => 'https://i.postimg.cc/VNQvq6Fh/eso.png',
            'rating' => 8,
        ]);

        Game::firstOrCreate([
            'title' => 'The Last of Us',
            'description' => 'A harrowing post‑apocalyptic adventure focusing on Joel and Ellie’s journey.',
            'release_date' => '2013-06-14',
            'developer' => 'Naughty Dog',
            'publisher' => 'Sony Computer Entertainment',
            'image' => 'https://i.postimg.cc/GpKBbRkS/tlou.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'The Last of Us Part II',
            'description' => 'A brutal and emotional continuation of Ellie’s story in a post‑apocalyptic America.',
            'release_date' => '2020-06-19',
            'developer' => 'Naughty Dog',
            'publisher' => 'Sony Interactive Entertainment',
            'image' => 'https://i.imgur.com/g7nWaSs.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'FlatOut 2',
            'description' => 'A demolition derby racing game with a focus on destruction and mayhem.',
            'release_date' => '2006-06-30',
            'developer' => 'Bugbear Entertainment',
            'publisher' => 'Empire Interactive',
            'image' => 'https://i.postimg.cc/wTr7BFRg/flatout2.png',
            'rating' => 8,
        ]);

        Game::firstOrCreate([
            'title' => 'Horizon Zero Dawn',
            'description' => 'A post‑apocalyptic RPG featuring robotic creatures and a strong female protagonist.',
            'release_date' => '2017-02-28',
            'developer' => 'Guerrilla Games',
            'publisher' => 'Sony Interactive Entertainment',
            'image' => 'https://i.postimg.cc/8c1rh5TG/horizonzerodawn.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Alan Wake 2',
            'description' => 'A psychological horror thriller digging deeper into Alan’s terrifying story.',
            'release_date' => '2023-10-27',
            'developer' => 'Remedy Entertainment',
            'publisher' => 'Epic Games Publishing',
            'image' => 'https://i.postimg.cc/LXspLKG7/alanwake2.png',
            'rating' => 9,
        ]);


        Game::firstOrCreate([
            'title' => 'Balatro',
            'description' => 'A dark comedy point‑and‑click adventure with supernatural and occult themes.',
            'release_date' => '2024-05-18',
            'developer' => 'Klaus Wilde',
            'publisher' => 'Noodlecake Studios',
            'image' => 'https://i.postimg.cc/6Qtw6GcB/balatro.png',
            'rating' => 8,
        ]);

        Game::firstOrCreate([
            'title' => 'Sekiro: Shadows Die Twice',
            'description' => 'A challenging action‑adventure set in late‑1500s Japan with intense swordplay.',
            'release_date' => '2019-03-22',
            'developer' => 'FromSoftware',
            'publisher' => 'Activision',
            'image' => 'https://i.imgur.com/uPhOBBb.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Dead Space',
            'description' => 'A terrifying sci‑fi horror game aboard a spaceship infested with monstrous creatures.',
            'release_date' => '2023-01-27',
            'developer' => 'Motive Studio',
            'publisher' => 'Electronic Arts',
            'image' => 'https://i.postimg.cc/Pf3q6K4Y/deadspaceremake.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Ninja Gaiden II: Black',
            'description' => 'A brutal and fast‑paced ninja action game with over‑the‑top combos and difficulty.',
            'release_date' => '2008-09-16',
            'developer' => 'Team Ninja',
            'publisher' => 'Tecmo',
            'image' => 'https://i.imgur.com/YUZwdqs.png',
            'rating' => 9,
        ]);


        
    }
}
