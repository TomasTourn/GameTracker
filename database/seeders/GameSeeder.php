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
            'description' => 'Step into a vast, beautiful world in this groundbreaking open-world action-adventure where you play as Link, awakening from a century-long slumber to defeat Calamity Ganon. Explore towering mountains, lush forests, and ancient ruins at your own pace. Experiment with physics-based puzzles, cook meals for survival, and master your tools in a game where exploration and discovery are as rewarding as the combat. Shape your journey however you want—no two players will travel the same path across Hyrule.',
            'release_date' => '2017-03-03',
            'developer' => 'Nintendo',
            'publisher' => 'Nintendo',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co3p2d.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'The Witcher 3: Wild Hunt',
            'description' => 'Play as Geralt of Rivia, a professional monster hunter searching for his adopted daughter in a war-torn, morally complex world. Dive into a vast open world filled with dynamic quests, rich characters, and dark political intrigue. Engage in tactical combat, craft potions and gear, and make impactful choices that shape your journey across the Northern Kingdoms. With stunning visuals, deep lore, and multiple endings, this is one of the most critically acclaimed RPGs of all time.',
            'release_date' => '2015-05-19',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1wyy.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Red Dead Redemption 2',
            'description' => 'Immerse yourself in the dying days of the American Wild West through the eyes of Arthur Morgan, an outlaw struggling with loyalty and survival. Set in a stunningly detailed open world, every encounter—whether with wildlife, townsfolk, or rival gangs—feels alive and consequential. Experience deep storytelling, meaningful choices, and one of the richest worlds ever created. Whether you’re hunting, robbing trains, or simply watching the sunset, the frontier never forgets you.',  
            'release_date' => '2018-10-26',
            'developer' => 'Rockstar Games',
            'publisher' => 'Rockstar Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co1q1f.webp',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Control',
            'description' => 'Enter the Federal Bureau of Control as Jesse Faden, the newly appointed Director, and uncover the truth behind a corrupt, reality-shifting force called the Hiss. Set in the mysterious Oldest House, a shifting brutalist skyscraper, this supernatural action game blends mind-bending visuals with telekinetic combat. Discover hidden secrets, shape your powers, and navigate a narrative dripping with paranoia and mystery. Control challenges your perception of space, power, and authority.',
            'release_date' => '2019-08-27',
            'developer' => 'Remedy Entertainment',
            'publisher' => '505 Games',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co2ewb.webp',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Cyberpunk 2077',
            'description' => 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the megalopolis of Night City, where you play as a cyberpunk mercenary wrapped up in a do-or-die fight for survival. Improved and featuring all-new free additional content, customize your character and playstyle as you take on jobs, build a reputation, and unlock upgrades. The relationships you forge and the choices you make will shape the story and the world around you. Legends are made here. What will yours be?',
            'release_date' => '2020-12-10',
            'developer' => 'CD Projekt Red',
            'publisher' => 'CD Projekt',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_1080p_2x/co7iy1.webp',
            'rating' => 10,
        ]);


        Game::firstOrCreate([
            'title' => 'Resident Evil 4',
            'description' => 'Six years after the fall of Raccoon City, Leon S. Kennedy returns—now a government agent on a mission to rescue the president’s daughter from a remote European village. What he finds is a cult-infested nightmare, plagued with infected villagers and unimaginable horrors. A genre-defining action-horror experience, RE4’s modern remake enhances the intensity with revamped mechanics, environmental storytelling, and grotesquely detailed visuals. Every encounter is a high-stakes dance of precision shooting, resource management, and sheer panic.',
            'release_date' => '2023-03-24',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.imgur.com/5oAj86u.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 2',
            'description' => 'Raccoon City. A biochemical catastrophe has turned the city into a necrotic warzone. Play as rookie cop Leon S. Kennedy or college student Claire Redfield as they plunge into the nightmare on their first day in hell. The remake of this survival horror classic uses cutting-edge visuals and sound to deliver a relentlessly tense and claustrophobic experience. With limited resources, dynamic puzzles, and unstoppable biological horrors lurking in the shadows, every hallway becomes a gamble and every bullet a lifeline.',
            'release_date' => '2019-01-25',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/3RNsWjvQ/re2.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 3',
            'description' => 'Just hours before Resident Evil 2, Jill Valentine is trying to escape a collapsing Raccoon City. But something is hunting her: Nemesis, an unstoppable bioweapon programmed to kill every remaining S.T.A.R.S. operative. This remake reimagines the frantic escape with modern visuals and tight action-horror pacing. Explore a dying city while being relentlessly pursued by an enemy who adapts, stalks, and won’t stop until you’re dead. The tension never lets up, and survival means pushing your skills—and your nerves—to the limit.',
            'release_date' => '2020-04-03',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.imgur.com/3vD8X6v.png',
            'rating' => 10,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil 7: Biohazard',
            'description' => 'Welcome to the Baker estate. After receiving a mysterious message from his missing wife, Ethan Winters finds himself trapped in a derelict Louisiana mansion where something has gone terribly, *terribly* wrong. A shift in the franchise’s formula, RE7 returns to true survival horror through a first-person lens. With grotesque body horror, suffocating tension, and twisted family dynamics, this isn’t just a haunted house—it’s a waking nightmare where every creak in the floorboards might be your last.',
            'release_date' => '2017-01-24',
            'developer' => 'Capcom',
            'publisher' => 'Capcom',
            'image' => 'https://i.postimg.cc/yxk3fG3p/re7.png',
            'rating' => 9,
        ]);

        Game::firstOrCreate([
            'title' => 'Resident Evil Requiem',
            'description' => 'The nightmare continues. Ethan Winters is thrust into a chilling European village after his daughter is kidnapped. What follows is a twisted odyssey through snow-covered ruins, gothic castles, and monstrous horrors inspired by folklore. From the towering Lady Dimitrescu to the grotesque experiments of House Beneviento, each new area is a descent into madness. With refined first-person combat, atmospheric world design, and a narrative steeped in trauma and legacy, RE Village evolves the franchise while honoring its haunted roots.',
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
