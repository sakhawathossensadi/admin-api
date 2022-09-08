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

    public function updateStatus($candidateId, Request $request)
    {
        $candidate = User::findByUserId($candidateId);

        $status = $request->status;

        $data = $request->except(['_token', '_method']);

        $candidate->update($data);

        return new CandidateResource($candidate);
    }

    public function show($candidateId, Request $request)
    {
        $candidate = User::findByUserId($candidateId);

        return new CandidateResource($candidate);
    }
}
