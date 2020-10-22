<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Comment;
use Auth;

class PetController extends Controller
{
    public function index(Request $request)
    {
        $pets = new Pet();

        if($request->has('category') && $request->get('category')) {
            $pets = $pets->where('category', $request->get('category'));
        }
        if($request->has('breed') && $request->get('breed')) {
            $pets = $pets->where('breed', $request->get('breed'));
        }
        if($request->has('gender') && $request->get('gender')) {
            $pets = $pets->where('gender', $request->get('gender'));
        }
        if($request->has('color') && $request->get('color')) {
            $pets = $pets->where('color', $request->get('color'));
        }
        if($request->has('body_type') && $request->get('body_type')) {
            $pets = $pets->where('body_type', $request->get('body_type'));
        }
        if($request->has('age') && $request->get('age')) {
            $pets = $pets->where('age', $request->get('age'));
        }

        $pets = $pets->paginate(16);

        $comments = Comment::all();

        return view('about', compact('pets', 'comments'));
    }

    public function favorites(Request $request)
    {
        if(!Auth::check()) {
            return '請登入後再收藏';
        }

        $user = Auth::user();

        $user->pets()->toggle($request->input('pet_id'));

        return '收藏成功！';
    }
}
