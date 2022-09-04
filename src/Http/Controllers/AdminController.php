<?php

namespace Analyzen\Admin\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function index(Request $request)
    {
        dd($request->user());
    }
}
