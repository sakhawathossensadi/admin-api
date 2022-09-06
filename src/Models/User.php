<?php

namespace Analyzen\Admin\Models;

use Analyzen\Auth\Models\User as AuthUser;

class User extends AuthUser
{
    public function scopeCandidate($query)
    {
        $tableName = (new User())->getTable();

        return $query->where("$tableName.role", self::CANDIDATE);
    }

    protected static function newFactory()
    {
        return \Analyzen\Admin\Database\Factories\UserFactory::new();
    }
}
