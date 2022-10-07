<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("/admin", "Admin\PostsController");
Route::patch("/admin/{id}/patch", "Admin\PostsController@removeFromCategory")->name("admin.clear");

Route::resource("/categories", "Admin\CategoriesController");

Route::resource("/tags", "Admin\TagsController");

Route::get("{any?}", function() {
    return view("guest.home");
})->where("any", ".*");