<?php
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/logout', 'App\Http\Controllers\auth\LoginController@logout');
Route::resource('dashboard','DashboardController');
