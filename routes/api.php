<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
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

/************************************ */
//Step 1 To Build CRUD API
/*
POST
To write a CRUD TypeProject

1. get all      (GET)       /api/get    
2. create       (POST)      /api/post
3. get a single (GET)       /api/get/{id}
4. update       (POST)      /api/put/{id}
5. delete       (DELETE)    /api/delete/{id}
*/

Route::get('/posts/get', 'PostController@index');
Route::post('/posts/post', 'PostController@store');
Route::show('/posts/show', 'PostController@show');
Route::put('/posts/put', 'PostController@update');
Route::delete('/posts/delete', 'PostController@destroy');
// OR
// Route::resource('posts', 'PostController');



/******************************* */

//Step 0 To Create COntent Resource to our DB
/*

1. Create a the DB and Migration  
2. Create a model
2.1. Create a service  (Elequant ORM)
3. Create a controller to got get info from that DB
4. Return Info
*/
/************************************************/





Route::get('/posts', function () {
    $post = Post::create([
        'title' => 'my first post title',
        'slug' => 'my-first-post Slug'
    ]);

    return $post;

});


