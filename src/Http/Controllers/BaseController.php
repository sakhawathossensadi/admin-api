<?php

namespace Analyzen\Admin\Http\Controllers;

use Illuminate\Routing\Controller as AppController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BaseController extends AppController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
