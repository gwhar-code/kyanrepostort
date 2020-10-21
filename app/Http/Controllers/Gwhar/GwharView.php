<?php


namespace App\Http\Controllers\Gwhar;


use App\Http\Controllers\Controller\Gwhar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GwharView extends Controller
{
public function getviewindex(){
return view('viewindex');
}
    public function getviewof($id=20){
        return view('gview\viewindex',['id'=>$id]);
    }
    public function geter($id=20){
        return view('saadview',['name'=>$id]);
    }
    public function getobject(){
    $obj=new  \stdClass();
    $obj->name="gwhar";
    return view('objectview',compact('obj'));
    }
}
