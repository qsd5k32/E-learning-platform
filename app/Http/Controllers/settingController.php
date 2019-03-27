<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class settingController extends Controller
{
    public function index()
    {
        $user = User::where('id',Auth::id())->first(['email','username']);
        return view('user.setting' ,['user' => $user]);
    }
    public function update(Request $request)
    {
        $validator = $request->validate([
            'actual_password' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::where('id',Auth::id())->first();
        if( Hash::check($request->input('actual_password'),$user->password ))
        {
            User::where('id',Auth::id())->update([
                'password' => Hash::make($request->input('password'))
            ]);
            return back()->with(['success' => 'your password was changed with success']);
        }
        return back()->with(['warning' => 'password wrong']);
    }
}
