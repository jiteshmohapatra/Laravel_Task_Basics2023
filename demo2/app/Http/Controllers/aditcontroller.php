<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aditcontroller extends Controller
{
    //
    function index(){
        return DB::select('select * from data');
    }
}
