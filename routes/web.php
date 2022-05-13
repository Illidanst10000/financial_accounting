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
    return view('main.index');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', App\Http\Controllers\Admin\IndexController::class)->name('admin.main.index');


    Route::group(['prefix' => 'sources'], function () {
        Route::get('/', App\Http\Controllers\Admin\Source\IndexController::class)->name('admin.source.index');
        Route::get('/create', App\Http\Controllers\Admin\Source\CreateController::class)->name('admin.source.create');
        Route::post('/', App\Http\Controllers\Admin\Source\StoreController::class)->name('admin.source.store');
        Route::get('/{source}', App\Http\Controllers\Admin\Source\ShowController::class)->name('admin.source.show');
        Route::get('/{source}/edit', App\Http\Controllers\Admin\Source\EditController::class)->name('admin.source.edit');
        Route::patch('/{source}', App\Http\Controllers\Admin\Source\UpdateController::class)->name('admin.source.update');
        Route::delete('/{source}', App\Http\Controllers\Admin\Source\DeleteController::class)->name('admin.source.delete');
    });



});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
