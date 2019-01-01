<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SignatureResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        
        return [
          'id' => $this->id,
          'name' => $this->name,
          'avatar' => $this->avatar,
          'body' => $this->body,
          'date' => $this->created_at->diffForHumans(),
        ];
    }
}
