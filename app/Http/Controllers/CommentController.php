<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function write(Request $request)
    {

        $user = Auth::user();

        $user->comments()->create([
            'content' => $request->get('content')
        ]);

        return redirect()->route('about');
    }
}
