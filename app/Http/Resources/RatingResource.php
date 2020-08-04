<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
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
          'user_id' => $this->user_id,
          'book_id' => $this->book_id,
          'rating' => $this->rating,
          'created_at' => (string) $this->created_at, // Cast dates as strings to avoid returning them as objects in the response
          'updated_at' => (string) $this->updated_at, // Cast dates as strings to avoid returning them as objects in the response
          'book' => $this->book,
        ];
    }
}
