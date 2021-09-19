<?php

namespace Yu2ry\Clean\Transport\Http\v1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class UserCreateResource
 * @package Yu2ry\Clean\Transport\Http\v1\Resources
 */
class UserCreateResource extends JsonResource
{


    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            $this->id => $this->id,
            $this->email => $this->email
        ];
    }
}
