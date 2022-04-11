<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function() {

    Route::get('/', function() {
        return view('admin.dashboard');
    })->middleware('auth');

    Route::get('/properties', [PropertiesController::class, 'index'])->middleware('auth');
    Route::get('/properties/create', [PropertiesController::class, 'create'])->middleware('auth');
    Route::post('/properties/store-post', [PropertiesController::class, 'store'])->name('admin.store_properties')->middleware('auth');


});

Route::get('/logout', function() {
    Auth::logout();
    return redirect('login');
});
