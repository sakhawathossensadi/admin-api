<?php

namespace Analyzen\Admin\Http\Models;

use Analyzen\Auth\Models\User as AuthUser;

class User extends AuthUser
{
    protected static function newFactory()
    {
        return \Analyzen\Admin\Database\Factories\CandidateFactory::new();
    }
}
