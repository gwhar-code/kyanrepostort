<?php

namespace App\Http\Controllers\Gwhar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Firstcon extends Controller
{
    public function yu($idd){
        return "hello controller php artisan".$idd;
    }
    public function ty(){
     return   redirect('/uu/tt');
    }
    public function tryview(){
        return view('try1view')->with(["id"=>888]);
    }
    public function tryfun1(){
        return redirect()->route('routenmae1');
    }
    public function tryfun2(){
        return redirect()->route('routename2',['id'=>20]);
    }
}
