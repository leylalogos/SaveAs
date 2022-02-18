<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Play;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function addScore(Request $request, $game_id, $user_id)
    {
        return User::find($user_id)->user_rank;

        Play::create([
            'game_id' => $game_id,
            'user_id' => $user_id,
            'score' => $request->score
        ]);
        return response()->json(['massage' => 'your score has been saved'], 201);
    }
    public function scoreBoard($game_id)
    {
        return DB::table('plays')
            ->select(DB::raw('user_id,sum(score) as total'))
            ->where('game_id', $game_id)
            ->groupBy('user_id')
            ->orderBy('total', "desc")
            ->limit(25)
            ->get();
    }
}
