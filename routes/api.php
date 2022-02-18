<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getGames', 'GameController@show_games');

Route::post('/games/{game_id}/users/{user_id}/scores','ScoreController@addScore');

Route::get('/game/{game_id}/scoreboard','ScoreController@scoreBoard');