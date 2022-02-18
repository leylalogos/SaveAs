<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Play;

class PlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playes = [
            ['user_id' => 1, 'game_id' => 6, 'score' => 100],
            ['user_id' => 2, 'game_id' => 4, 'score' => 2000],
            ['user_id' => 3, 'game_id' => 5, 'score' => 7000],
            ['user_id' => 4, 'game_id' => 3, 'score' => 200],
            ['user_id' => 1, 'game_id' => 1, 'score' => 600],
            ['user_id' => 6, 'game_id' => 2, 'score' => 900],
        ];
        if (Play::count() == 0) {
            foreach ($playes as $play) {
                Play::create($play);
            }
        }
    }
}
