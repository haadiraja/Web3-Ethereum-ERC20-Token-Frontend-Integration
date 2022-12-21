<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Posts;
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

Route::get('/posts', function(){

    $posts = Posts::all();

    return $posts;

});


Route::post('/post', function(){

    $post = new Posts();

    $post->title = request('title');
    $post->content = request('content');
    $post->save();
    return $post;


});