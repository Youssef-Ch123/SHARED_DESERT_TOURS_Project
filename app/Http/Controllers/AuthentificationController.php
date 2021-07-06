<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    //

    public function SignIn(){
        return view('Authentification');
    }

    public function SignUp(){
        return view('Inscription');
    }
}
