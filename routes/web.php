<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\admin\dashboard;
use App\Http\Controllers\admin\mediaController;
use App\Http\Controllers\admin\addHomeController;
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


Route::group(['middleware' => ['get.menu']], function () {

    Auth::routes();
    Route::get('/admin', [dashboard::class, 'index'])->name('index');
    Route::get('/Homepage', [dashboard::class, 'homepage'])->name('homepage');
    Route::get('/homeSlider', [dashboard::class, 'homeSlider'])->name('homeSlider');
    Route::get('/addImage', [dashboard::class, 'addImage'])->name('addImage');
    Route::get('/editslider/{id}', [dashboard::class, 'editslider'])->name('editslider');
    Route::post('/imageSave', [dashboard::class, 'imageSave'])->name('imageSave');
    Route::post('/editslidersave/{id}', [dashboard::class, 'editslidersave'])->name('editslidersave');
    Route::get('/slider/delete/{id}', [dashboard::class, 'deleteslider'])->name('slider.destroy');
    Route::post('/sliderposition', [dashboard::class, 'sliderposition'])->name('sliderposition');

    
    Route::get('/filterCategories', [dashboard::class, 'category'])->name('filterCategories');
    Route::get('/create_category', [dashboard::class, 'create_category'])->name('create_category');
    Route::get('/category/delete/{id}', [dashboard::class, 'deletecategory'])->name('category.destroy');

    Route::get('/galleryitem', [dashboard::class, 'galleryitem'])->name('galleryitem');
    Route::get('/addgallery', [dashboard::class, 'addgallery'])->name('addgallery');
    Route::get('/editgallery/{id}', [dashboard::class, 'editgallery'])->name('editgallery');
    Route::post('/gallerysave', [dashboard::class, 'gallerysave'])->name('gallerysave');
    Route::post('/editgallerysave/{id}', [dashboard::class, 'editgallerysave'])->name('editgallerysave');
    // Route::get("/delete/gallery/", [dashboard::class, 'deletegallery'])->name('deletegallery');
    Route::get('/tasks/delete/{id}', [dashboard::class, 'deletegallery'])->name('tasks.destroy');
    

    Route::get('/add/media', [mediaController::class, 'store'])->name('add.media');
    Route::post('/add/homepage', [addHomeController::class, 'store'])->name('add.homepage');
    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('users',        'UsersController')->except( ['create', 'store'] );
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::prefix('menu/element')->group(function () { 
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () { 
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
    });
});