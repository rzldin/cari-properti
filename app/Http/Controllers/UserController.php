<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('user.dashboard');
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
        return view('user.myads');
    }
}
