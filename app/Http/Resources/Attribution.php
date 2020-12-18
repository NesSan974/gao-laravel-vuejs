<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;




class Attribution extends JsonResource
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
            'id' => $this->id,
            'ordinateur_id' => $this->ordinateur_id,
            'ordinateur' => $this->ordinateur,

            'date' => $this->date,
            'client' => $this->client,
            'horraire' => $this->horraire,

        ];
    }

}
