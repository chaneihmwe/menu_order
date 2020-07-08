<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;
class SubCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'id' => $this->id,
            'name' => $this->name,
            'category' => new CategoryResource(Category::find($this->category_id)),  
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
