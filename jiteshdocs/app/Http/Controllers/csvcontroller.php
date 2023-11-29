<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csvcontroller extends Controller
{
    //
    function fn10(Request $res){
        return $res->file('a1')->store('img');
    }
}
