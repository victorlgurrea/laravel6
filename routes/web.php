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

Route::get('/', function () {
    return view('welcome');
})->name('home');
/*
Route::get('home/{nombre?}/{apellido?}', function ( $nombre = 'Pepe', $apellido = "García") {
    
    $array_data['nombre'] = $nombre;
    $array_data['apellido'] = $apellido;
    $array_data['posts'] = ["post1","post2","post3","post4"];
    $array_data['posts2'] = null;

    return view('home')->with($array_data);;
})->name("home");
*/
//Dashboard admin
Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\CategoryController');
