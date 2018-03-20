<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','HomeController');

Route::resource('/dash','DashController');

Route::resource('/problemas','HelpController');


Auth::routes();




