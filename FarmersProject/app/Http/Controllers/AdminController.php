<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');

    }
    public function authenticate(){
        return view('admin.authenticate');
    }

    public function logout(){
        return view('admin.logout');
    }
    public function update(){
        return view();
    }
}
