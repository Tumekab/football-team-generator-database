<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Games;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// games
Route::get('/games', [Games::class, "index"]); // return all games
Route::get('/games/{game}', [Games::class, "show"]); // return a specific game
Route::post('/games', [Games::class, "store"]); // add a new game
Route::delete('games/{game}', [Games::class, "destroy"]); // remove a game
Route::patch('games/{game}', [Games::class, "update"]); //update a game