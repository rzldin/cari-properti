<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MasterModel extends Model
{
    public static function category()
    {
        return DB::table('p_category')->orderBy('name')->get();
    }

    public static function category_get($category_id)
    {
        return DB::table('p_category')->where('category_id', $category_id)->first();
    }

    public static function cek_category($name)
    {
        return DB::select("
        Select * from p_category where name ='" . $name . "'");
    }
}
