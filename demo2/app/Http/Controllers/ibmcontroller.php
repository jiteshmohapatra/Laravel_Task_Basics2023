<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ibmmodel;

class ibmcontroller extends Controller
{
    //
    function fn12(){
        return ibmmodel::all();
    }
}
