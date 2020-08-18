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
            ->where('t_post.user_id', Auth::user()->id)->get();
    }
}
