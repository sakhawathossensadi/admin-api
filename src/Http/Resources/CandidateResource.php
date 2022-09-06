<?php

namespace Analyzen\Admin\Http\Resources;

use Analyzen\Auth\Http\Resources\UserResource;
use Analyzen\Candidate\Http\Resources\CandidateResource as ResourcesCandidateResource;

class CandidateResource extends UserResource
{
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['cv_link'] = $this->cv_link;

        return $data;
    }
}
