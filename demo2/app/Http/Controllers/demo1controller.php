<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo1controller extends Controller
{
    //
    function fn3(){
        return view('title',["x"=>"JITESH MOHAPATRA","y"=>"Raja"]);
    }
}
