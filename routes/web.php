<?php

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
use App\Post;
use App\User;
Route::get('/', function () {
    //
    $user = User::has('posts')->get();
    // dd($user[0]->posts);
   $posts = Post::select('id', 'title', 'post')->chunk('10',function($items){
    	 
    });


    return view('welcome', compact('posts'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/delete', 'HomeController@delete')->middleware('can:isAdmin')->name('delete');
Route::post('/policy', 'HomeController@policy')->middleware('can:isAdmin')->name('policy');



Route::get('array','ArrayController@index');
Route::get('pay', 'PayOrderController@store');
Route::get('channel','ChannelController@index');
Route::get('post/create','PostController@create');