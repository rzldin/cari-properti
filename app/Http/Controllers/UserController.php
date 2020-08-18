<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;

class UserController extends Controller
{
    //

    public function index()
    {
        $data['posts'] = Post::get_post();
        return view('user.dashboard')->with($data);
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function message()
    {
        return view('user.message');
    }

    public function favorite()
    {
        return view('user.favorite');
    }

    public function myads()
    {
        $data['posts'] = Post::post_by_user();
        return view('user.myads')->with($data);
    }

    public function get_contact()
    {
        $contacts = User::all();
        return response()->json($contacts);
    }
}
