<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladecontroller extends Controller
{
    //
    function fn10(){
 $name = "HII  Jitesh Mohapatra";
   return view('hello',['name'=>$name]);

    }
}
