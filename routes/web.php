<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;

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

Route::group(['as'=>'frontend','namespace'=>'frontend'],function(){
    Route::get('/', [homeController::class, 'index'])->name('index');
});

Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
