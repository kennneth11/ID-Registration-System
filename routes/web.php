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
    Route::get('/logout', 'App\Http\Controllers\dashboardController@out')->name('logout');
});

//administrator
Route::group(['middleware' => ['auth', 'role:administrator']], function() { 
    Route::get('/user-management', 'App\Http\Controllers\UserManagementController@index')->name('dashboard.user-management');
    Route::get('/user-management/create', 'App\Http\Controllers\UserManagementController@create')->name('dashboard.user-management.create');
    Route::post('/user-management/creating', 'App\Http\Controllers\UserManagementController@store')->name('dashboard.user-management.creating');
    Route::get('/Transaction/print{key}', 'App\Http\Controllers\TransactionController@showPrint')->name('Transaction.print');

});

//student
Route::group(['middleware' => ['auth', 'role:student']], function() { 
    Route::post('/Transaction/store', 'App\Http\Controllers\TransactionController@store')->name('Transaction.store');
    Route::get('/Transaction', 'App\Http\Controllers\TransactionController@myTransactions')->name('Transaction');
    
    Route::post('/Transaction/update', 'App\Http\Controllers\TransactionController@update')->name('Transaction.update');
    Route::post('/Transaction/delete', 'App\Http\Controllers\TransactionController@delete')->name('Transaction.delete');
    Route::get('/Account', 'App\Http\Controllers\dashboardController@account')->name('Account');
    
});


require __DIR__.'/auth.php';
