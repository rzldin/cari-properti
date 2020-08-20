<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\MasterModel;
use App\Post;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Image;

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
        $files = $request->file('photo');
        $images = array();
        if ($request->hasFile('photo')) {
            foreach ($files as $file) {
                $name = 'Produk-' . date('YmdHis') . "-" . $file->getClientOriginalName();
                $destinationPath = public_path('assets/upload/thumbnail');
                $img = Image::make($file->path());
                $img->resize(400, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $name);

                $destinationPath = public_path('assets/upload/produk');
                $file->move($destinationPath, $name);
                $images[] = $name;
            }

            $tanggal = date('Y-m-d h:i:s');
            $facilities = implode(",", $input['facilities']);
            $image = implode("|", $images);
            $slug = Str::slug($input['title'], '-');

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
                'slug' => $slug,
                'description' => $input['description'],
                'price' => $input['price'],
                'photo' =>  $image,
                'province' => $input['province'],
                'city' => $input['city'],
                'district' => $input['district'],
                'created' => $tanggal,
                'status' => '1'
            ]);

            return redirect('dashboard')->with('status', 'Iklan Berhasil ditayangkan!');
        }
    }

    public function detailPost($slug)
    {
        // $data['posts'] = DB::table('t_post')->where('slug', $slug)->first();
        $data['posts'] = Post::showPost($slug);
        return view('user/ads/show_ads')->with($data);
    }

    public function delete($id)
    {
        DB::table('t_post')->where('post_id', $id)->delete();
        return redirect('dashboard')->with('status', 'Iklan Telah dihapus!');
    }
}
