<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class Post extends Model
{
    public static function get_post()
    {
        return DB::table('t_post')
            ->leftJoin('indonesia_cities', 't_post.city', '=', 'indonesia_cities.id')
            ->leftJoin('indonesia_districts', 't_post.district', '=', 'indonesia_districts.id')
            ->select('t_post.*', 'indonesia_cities.name as city', 'indonesia_districts.name as district')
            ->orderBy('t_post.created', 'desc')->get();
    }

    public static function post_by_user()
    {
        return DB::table('t_post')
            ->leftJoin('indonesia_cities', 't_post.city', '=', 'indonesia_cities.id')
            ->leftJoin('indonesia_districts', 't_post.district', '=', 'indonesia_districts.id')
            ->select('t_post.*', 'indonesia_cities.name as city', 'indonesia_districts.name as district')
            ->where('t_post.user_id', Auth::user()->id)
            ->orderBy('t_post.created', 'desc')->get();
    }

    public static function showPost($slug)
    {

        return DB::table('t_post')
            ->leftJoin('indonesia_provinces', 't_post.province', '=', 'indonesia_provinces.id')
            ->leftJoin('indonesia_cities', 't_post.city', '=', 'indonesia_cities.id')
            ->leftJoin('indonesia_districts', 't_post.district', '=', 'indonesia_districts.id')
            ->leftJoin('p_category', 't_post.category', '=', 'p_category.category_id')
            ->leftJoin('users', 't_post.user_id', '=', 'users.id')
            ->select('t_post.*', 'indonesia_provinces.name as province', 'indonesia_cities.name as city', 'indonesia_districts.name as district', 'users.name as name_user', 'users.phone as phone', 'users.location as location_user', 'users.photo as photo_user', 'users.created_at as user_created', 'p_category.name as category')
            ->where('t_post.slug', $slug)->first();
    }
}
