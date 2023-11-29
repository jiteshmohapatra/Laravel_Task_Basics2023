<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userauth extends Controller
{
    //
    function userlogin(Request $req){

        //return $req->input(); for practice
        $data =$req->input('user');
        $req->session()->put('user',$data);
        //echo session('user'); //only echo the userpart 
        return redirect('pro');


    }
}
