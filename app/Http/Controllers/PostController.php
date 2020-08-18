<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\MasterModel;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;

class PostController extends Controller
{

    public function post()
    {
        $provinces = Province::pluck('name', 'id');
        $category = MasterModel::category();
        return view('user.post', [
            'provinces' => $provinces,
            'category' => $category
        ]);
    }

    public function city(Request $request)
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

    public function process_post(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ]);

        dd($request->all());
    }

    public function addProcess(Request $request)
    {
        $input = $request->all();
        $images = array();
        if ($files = $request->file('photo')) {
            foreach ($files as $file) {
                $name = 'Produk-' . date('YmdHis') . "." . $file->getClientOriginalName();
                $file->move(public_path('assets/upload/produk'), $name);
                $images[] = $name;
            }
        }
        $tanggal = date('Y-m-d h:i:s');
        $facilities = implode(",", $input['facilities']);
        $image = implode("|", $images);

        DB::table('t_post')->insert([
            'user_id' => $input['user_id'],
            'date' => $input['date'],
            'category' => $input['category'],
            'building_area' => $input['building_area'],
            'land_area' => $input['land_area'],
            'room' => $input['room'],
            'floor' => $input['floor'],
            'facilities' => $facilities,
            'location' => $input['location'],
            'title' => $input['title'],
            'description' => $input['description'],
            'price' => $input['price'],
            'photo' =>  $image,
            'province' => $input['province'],
            'city' => $input['city'],
            'district' => $input['district'],
            'created' => $tanggal
        ]);


        return redirect('dashboard')->with('status', 'Iklan Berhasil ditayangkan!');
    }
}
