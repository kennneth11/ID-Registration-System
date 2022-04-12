<?php

use Illuminate\Support\Facades\Route;

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
    return view('HomePage');
});

Route::get('/About', function () {
    return view('aboutus');
});

Route::get('/FAQ', function () {
    return view('faq');
});

Route::get('/ContactUs', function () {
    return view('contact-us');
});

//both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//administrator
Route::group(['middleware' => ['auth', 'role:administrator']], function() { 
    Route::get('/dashboard/user-management', 'App\Http\Controllers\UserManagementController@index')->name('dashboard.user-management');
    Route::get('/dashboard/user-management/create', 'App\Http\Controllers\UserManagementController@create')->name('dashboard.user-management.create');
    Route::post('/dashboard/user-management/creating', 'App\Http\Controllers\UserManagementController@store')->name('dashboard.user-management.creating');

});

require __DIR__.'/auth.php';
