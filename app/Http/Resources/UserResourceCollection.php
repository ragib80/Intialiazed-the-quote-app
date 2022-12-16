<?php

namespace App\Http\Resources;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public $pagination;

    public function __construct($resource)
    {
        $this->pagination = [
            'current_url' => $resource->path(),
            'next_page_url' => $resource->nextPageUrl(),
            'total_page' => $resource->lastPage(),
        ];

        $resource = $resource->getCollection();

        parent::__construct($resource);
    }


    public function toArray($request)
    {

        return [
            'data' => $this->collection,
            'metadata' => $this->pagination
        ];
    }
}
