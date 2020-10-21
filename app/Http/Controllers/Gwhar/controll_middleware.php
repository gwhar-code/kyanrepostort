<?php


namespace App\Http\Controllers\Gwhar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Controllers\Controller;

class controll_middleware extends Controller
{
public function getviewaftermiddelwarw($age){
    return view('gview\viewaftermiddleware')->with('age',$age);
}
}
