<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/posts", "Api\PostsController@index");

Route::get("/posts/{id}", "Api\PostsController@show");

Route::get("/posts/search/{title}", "Api\PostsController@searchPosts");

Route::get("/categories", "Api\CategoriesController@index");

Route::get("/categories/{slug}", "Api\CategoriesController@show");

Route::get("/tags", "Api\TagsController@index");

Route::get("/tags/{slug}", "Api\TagsController@show");