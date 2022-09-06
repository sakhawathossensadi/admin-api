<?php

namespace Analyzen\Admin\Database\Factories;

use Analyzen\Admin\Models\User as ModelsUser;
use Analyzen\Admin\Models\User;
use Analyzen\Auth\Database\Factories\UserFactory as FactoriesUserFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends FactoriesUserFactory
{
    protected $model = ModelsUser::class;
}
