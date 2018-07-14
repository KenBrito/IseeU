<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class loginController extends Controller
{
    public function login(Request $req){
        $userEmail = $req->input('email');
        $userPass = $req->input('pass');

        if($userEmail==="icu.io@gmail.com" && $userPass ==="1234"){

            return view('index');

        }else{
            return view('login');
        }
    }
}
