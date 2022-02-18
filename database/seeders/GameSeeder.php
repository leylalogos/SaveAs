<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = [
            ['title' => 'Pac-Man'],
            ['title' => 'Pong'],
            ['title' => 'Mario'],
            ['title' => 'Donkey Kong'],
            ['title' => 'Tekken'],
            ['title' => 'Dig Dug'],
        ];
        if (Game::count() == 0) {
            foreach ($games as $game) {
                Game::create($game);
            }
        }
    }
}
