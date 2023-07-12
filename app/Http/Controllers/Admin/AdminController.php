<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

    public function login()
    
    {
        return view('auth.admin_login');
    }

    public function about(){
        return view('about');
    }

    public function home(){
        return view('admin.dashboard');
    }
}
