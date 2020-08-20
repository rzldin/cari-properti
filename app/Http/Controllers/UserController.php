<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use Auth;

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
        $data['iklan_aktif'] = DB::table('t_post')->where(['user_id' => Auth::user()->id, 'status' => '1'])->get();

        // var_dump($data['iklan_aktif']);
        // die();
        return view('user.profile')->with($data);
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
