<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','HomeController');

Route::resource('/dash','DashController');


Auth::routes();




