<?php

namespace App\Http\Controllers\Property;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\MasterModel;

class CategoriesController extends Controller
{

    public function index()
    {
        $data['category'] = MasterModel::category();
        return view('admin/property/categories/data')->with($data);
    }

    public function cek_category(Request $request)
    {
        $data = MasterModel::cek_category($request['data']);
        $return_data = ($data) ? "duplicate" : "success";
        echo $return_data;
    }

    public function category_doAdd(Request $request)
    {
        try {
            $tanggal = date('Y-m-d h:i:s');
            DB::table('p_category')->insert([
                'name' => $request->name,
                'created' => $tanggal
            ]);

            return redirect()->route('categories')->with('status', 'Data Category berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function category_get(Request $request)
    {
        $data = MasterModel::category_get($request['category_id']);
        return json_encode($data);
    }

    public function category_doEdit(Request $request)
    {
        try {
            $tanggal = date('Y-m-d h:i:s');
            DB::table('p_category')
                ->where('category_id', $request->category_id)
                ->update([
                    'name' => $request->name,
                    'updated' => $tanggal
                ]);

            return redirect()->route('categories')->with('status', 'Data Category berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    public function category_delete(Request $request)
    {
        try {
            DB::table('p_category')
                ->where('category_id', $request->category_id)
                ->delete();

            return redirect()->route('categories')->with('status', 'Data Category berhasil hapus');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }
}
