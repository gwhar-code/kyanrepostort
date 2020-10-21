<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControlerPassValue extends Controller
{
    //
    public function pass($value=5){
        echo $value;
    }

}
