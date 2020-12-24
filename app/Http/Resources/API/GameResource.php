<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "game_date" => $this->game_date,
            "team_one" => $this->team_one,
            "team_two" => $this->team_two,
            "winning_team" => $this->winning_team
        ];
    }
}
