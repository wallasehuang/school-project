<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();

        $pets = $user->pets;

        return view('dashboard', compact('pets'));
    }
}
