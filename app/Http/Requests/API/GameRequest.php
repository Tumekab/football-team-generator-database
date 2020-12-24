<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "game_date" => ['required', 'date'],
            "team_one" => ['required', 'string'],
            "team_two" => ['required', 'string'],
            "winning_team" => ['required', 'string']
        ];
    }
}
