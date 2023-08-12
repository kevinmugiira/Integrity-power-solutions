<?php

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
