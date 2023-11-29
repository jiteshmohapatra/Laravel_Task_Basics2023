<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itmodel;

class itcontroller extends Controller
{
    //
    function fn4(){
        return itmodel::all();
    }
}
