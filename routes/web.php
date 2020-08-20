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
    Route::get('/post', 'PostController@post')
        ->name('user.post');

    //Get City and District use Laravolt
    Route::post('dependent-dropdown', 'PostController@city')
        ->name('dependent-dropdown.store');
    Route::post('/district', 'PostController@district')
        ->name('dependent-dropdown.district');
    //Post
    Route::post('/post/proses', 'PostController@addProcess');
    Route::get('/post/detail/{slug}', 'PostController@detailPost')
        ->name('detail');
    Route::delete('/post/delete/{id}', 'PostController@delete');
    //Get Contacts
    Route::get('/contacts', 'UserController@get_contact')
        ->name('user.get_contacts');
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

    //Ads
    Route::get('/ads', 'Ads\AdsController@index')
        ->name('pages.ads');
});
