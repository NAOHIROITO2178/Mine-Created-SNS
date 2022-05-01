<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowPostsController;
use App\Models\Post;

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

Route::get('/', function () {
    $posts = Post::all();
    return view('showposts', compact('posts'));
});
Route::get('/', [ShowPostsController::class, 'showPostsPage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/showposts', 'ShowPostsController@ShowPostsPage')->name('showposts');
Route::post('/showposts', 'ShowPostsController@postsContents')->name('showposts');
