<?php

namespace Analyzen\Admin\Http\Controllers;

use Analyzen\Admin\Http\Resources\CandidateResource;
use Analyzen\Admin\Models\User;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function index(Request $request)
    {
        $query = User::candidate();

        $candidates = $query->paginate();

        return CandidateResource::collection($candidates);
    }
}
