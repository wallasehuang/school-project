<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();

        $pets = $user->pets;

        return view('dashboard', compact('pets'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->input('name');

        $user->email = $request->input('email');

        $user->save();

        return redirect()->route('dashboard');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if (! Hash::check($request->input('current_password'), $user->password)) {
            return '密碼錯誤，無法更新';
        }

        if($request->input('password') != $request->input('confirmation_password')) {
            return '請確認密碼輸入正確';
        }

        $user->password = Hash::make($request->input('password'));

        $user->save();

        return redirect()->route('dashboard');

    }
}
