<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Transforms the resource into the Array
        return [
          'id' => $this->id,
          'title' => $this->title,
          'description' => $this->description,
          'created_at' => (string) $this->created_at, // Cast dates as strings to avoid returning them as objects in the response
          'updated_at' => (string) $this->updated_at, // Cast dates as strings to avoid returning them as objects in the response
          'user' => $this->user,
          'ratings' => $this->ratings,
          'average_rating' => $this->ratings->avg('rating') // gets the average of the ratings
        ];
    }
}
