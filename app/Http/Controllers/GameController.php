<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Resources\GameResource;
use Illuminate\Support\Facades\Cache;


class GameController extends Controller
{
    public function show_games()
    {
        return Cache::remember('games', 5, function () {
            return GameResource::collection(Game::all());
        });
    }
}
