<?php

namespace App\Http\Controllers\Ads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;;

class AdsController extends Controller
{
    public function index()
    {
        return view('admin/ads/data');
    }
}
