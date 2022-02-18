<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'game_id' => $this->id,
            'game_title' => $this->title,
            'total_play_count' => $this->total_play_count,
            'unique_users'=> $this->unique_users
        ];
    }
}
