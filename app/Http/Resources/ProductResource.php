<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;


/** 
 * @property Product $resource
 * @mixin Product
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return Arr::only(
            $this->resource->getAttributes(),
            [
                'id',
               // 'external_code',
                'name',
                'description',
                'price',
                'discount',
            ]
        );
    }
}
