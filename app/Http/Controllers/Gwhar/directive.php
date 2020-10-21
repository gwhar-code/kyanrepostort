<?php


namespace App\Http\Controllers\Gwhar;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
class directive extends Controller
{
public function getdirective(){
    return view('gview\directive_if_foreach')->with('name','gwhar directive');
}
public function getobj(){
    $obj=new \stdClass();
    $obj->name="gwhar";
    $obj->age=25;
    return view('gview\directive_if_foreach',compact('obj'));
}
public function getarray(){
    $arrays=[];
    $arrays['name']="name gwhar from array";
    return view('gview\directive_if_foreach',['arrays'=>$arrays]);
}
}
