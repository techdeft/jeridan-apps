<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    public function members(){
        $members = User::role('user')->get();

        return view('admin.users.members', compact('members'));
    }

     public function lawyers(){
        $lawyers = User::role('Lawyer')->get();

        return view('admin.users.lawyers', compact('lawyers'));
    }

    public function admins(){
        $admins = User::role('Admin')->get();

        return view('admin.users.admins', compact('admins'));
    }
}
