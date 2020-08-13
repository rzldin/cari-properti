<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PageController@index');
// Route::get('/login', 'PageController@login')->name('page.login');
// Route::get('/register', 'PageController@register')->name('page.register');

Auth::routes();
// User
Route::middleware('user')->group(function () {
    Route::get('/dashboard', 'UserController@index')
        ->name('user.page');
    Route::get('/profile', 'UserController@profile');
    Route::get('/message', 'UserController@message');
    Route::get('/favorite', 'UserController@favorite');
    Route::get('/myads', 'UserController@myads');
    Route::get('/post', 'UserController@post')
        ->name('user.post');
    Route::post('dependent-dropdown', 'UserController@store')
        ->name('dependent-dropdown.store');
    Route::post('/district', 'UserController@district')
        ->name('dependent-dropdown.district');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::get('/home', 'HomeController@index')->name('home');

    //Category
    Route::get('/categories', 'Property\CategoriesController@index')
        ->name('categories');
    Route::post('/cek_category', 'Property\CategoriesController@cek_category')
        ->name('categories.cek_category');
    Route::post('/category_doAdd', 'Property\CategoriesController@category_doAdd')
        ->name('categories.add_category');
    Route::post('/category_get', 'Property\CategoriesController@category_get')
        ->name('categories.get_category');
    Route::post('/category_doEdit', 'Property\CategoriesController@category_doEdit')
        ->name('categories.edit_category');
    Route::post('/category_delete', 'Property\CategoriesController@category_delete');
});
