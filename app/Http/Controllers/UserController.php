<?php

namespace App\Http\Controllers;

use App\MasterModel;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;

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

    public function post()
    {
        $provinces = Province::pluck('name', 'id');
        $category = MasterModel::category();
        return view('user.post', [
            'provinces' => $provinces,
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))
            ->pluck('name', 'id');

        return response()->json($cities);
    }

    public function district(Request $request)
    {
        $district = District::where('city_id', $request->get('id'))
            ->pluck('name', 'id');

        return response()->json($district);
    }
}
