<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Resources\GameResource;

class GameController extends Controller
{
    public function show_games()
    {
        return GameResource::collection(Game::all());
    }
}
