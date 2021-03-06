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
    return view('index');
});

Route::resource ('index','IndexController');
Route::resource ('about','AboutController');
Route::resource ('contact','ContactController');
Route::resource ('gallery','GalleryController');
Route::resource ('master','MasterController');
Route::resource ('projects','ProjectsController');
Route::resource ('test','TestController');
