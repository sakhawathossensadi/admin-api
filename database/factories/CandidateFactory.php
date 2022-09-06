<?php

namespace Analyzen\Admin\Database\Factories;

use Analyzen\Auth\Database\Factories\UserFactory;
use Analyzen\Admin\Models\Candidate;

class CandidateFactory extends UserFactory
{
    protected $model = Candidate::class;
}
