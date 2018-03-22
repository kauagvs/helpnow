<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/','HomeController');

Route::resource('/dash','DashController');

Route::resource('/listar_helps','HelpController');


Auth::routes();




