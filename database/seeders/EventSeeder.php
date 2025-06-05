<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Event::create([
            'name' => 'Summer Game Fest 2025',
            'description' => 'Evento anual organizado por Geoff Keighley con anuncios de videojuegos.',
            'date' => '2025-06-07',
            'start_time' => '2025-06-07 18:00:00',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_screenshot_med_2x/elv9.webp',
        ]);

        Event::create([
            'name' => 'State of Play - Junio 2025',
            'description' => 'Transmisión de PlayStation con novedades sobre próximos lanzamientos.',
            'date' => '2025-06-10',
            'start_time' => '2025-06-10 17:00:00',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_screenshot_med_2x/elwj.webp',
        ]);

        Event::create([
            'name' => 'Nintendo Direct - Invierno 2025',
            'description' => 'Presentación de Mario Kart World.',
            'date' => '2025-06-15',
            'start_time' => '2025-06-15 16:00:00',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_screenshot_med_2x/eluh.webp',
        ]);

        Event::create([
            'name' => 'Xbox Showcase - Junio 2025',
            'description' => 'Conferencia de Xbox mostrando novedades de sus principales franquicias.',
            'date' => '2025-06-12',
            'start_time' => '2025-06-12 19:00:00',
            'image' => 'https://images.igdb.com/igdb/image/upload/t_screenshot_med_2x/eluj.webp',
        ]);
    }
}
