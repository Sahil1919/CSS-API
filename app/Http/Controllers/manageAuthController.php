<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageAuthController extends Controller
{
    public function userLogin(Request $request){
        return $request->all();
    }

    public function userSignup(Request $request){

    }

    public function mangerLogin(Request $request){

    }

    public function adminLogin(Request $request){

    }

    public function forgotPass(Request $request){

    }

    public function changePass(Request $request){

    }

    public function logout(Request $request){

    }

    public function updateInfo(Request $request){

    }
}
