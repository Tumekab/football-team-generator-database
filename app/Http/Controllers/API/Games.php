<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\API\GameRequest;
use App\Http\Resources\API\GameResource;

class Games extends Controller
{
    public function index() //show all games
    {

        $games = Game::all()->sortBy('game_date');
        return GameResource::collection($games);
        
        // return GameResource::collection(Game::all()->sortBy('game_date')); 
    }

    public function store(GameRequest $request) //add new teams
    {
        $data = $request->all(); //will accept incoming data
        $game = Game::create($data); //make the model and save the model into database
        return new GameResource($game);
    }

    public function show(Game $game) //return a game
    {
        return new GameResource ($game); 
    }

    public function update(GameRequest $request, Game $game) //update a game
    {
        $data = $request->all(); //save data into $data
        $game->update($data);//update $data 
        return new GameResource($game);//request the get
    }

    public function destroy(Game $game) //delete a set of teams
    {
        $game->delete();
        return response('', 204);
    }
}
