<?php

namespace Analyzen\Admin\Models;

use Analyzen\Auth\Models\User;

class Candidate extends User
{
    protected static function newFactory()
    {
        return \Analyzen\Admin\Database\Factories\UserFactory::new();
    }
}
