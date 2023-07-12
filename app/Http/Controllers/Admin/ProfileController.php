<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $pagetitle = 'Profile';
        return view('admin.profile.index', compact('pagetitle'));
    }

    public function update(Request $request){

        $id = Auth::user()->id;
        $user = User::findorFail($id);

        $request->validate([
            'first_name' => ['required', 'string', 'max:55'],
            'last_name' => ['required', 'string',  'max:55'],
            'phone' => ['required', 'unique:'.User::class],
        ]);

         $user->forceFill([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone' => $request['phone'],
        ])->save();

        $notify = array(
                'message' => 'Profile Updated successfuly.',
                'alert-type' => 'success'
            );
            
            return redirect()->back()->with($notify);
    }
}
