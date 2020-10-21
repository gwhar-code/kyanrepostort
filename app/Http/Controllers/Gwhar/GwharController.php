<?php

namespace App\Http\Controllers\Gwhar;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class GwharController extends Controller
{
public function GWharfun(){
    return "hi gwhar name space";
}
}
