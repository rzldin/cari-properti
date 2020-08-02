<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        return view('page.index');
    }

    public function login()
    {
        return view('page.login');
    }

    public function register()
    {
        return view('page.daftar');
    }
}
