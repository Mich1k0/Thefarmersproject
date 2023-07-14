<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //login registration view//
    
public function signup(){
    return view('Farmer.sign-up');
}

public function login(){
    return view('User.login');
}
public function authenticate(){
    return view('Farmer.authenticate');

}

public function signin(){
    return view('Farmer.sign-in');
}
}
