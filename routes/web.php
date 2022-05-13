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

    Route::group(['prefix' => 'types'], function () {
        Route::get('/', App\Http\Controllers\Admin\Type\IndexController::class)->name('admin.type.index');
        Route::get('/create', App\Http\Controllers\Admin\Type\CreateController::class)->name('admin.type.create');
        Route::post('/', App\Http\Controllers\Admin\Type\StoreController::class)->name('admin.type.store');
        Route::get('/{type}', App\Http\Controllers\Admin\Type\ShowController::class)->name('admin.type.show');
        Route::get('/{type}/edit', App\Http\Controllers\Admin\Type\EditController::class)->name('admin.type.edit');
        Route::patch('/{type}', App\Http\Controllers\Admin\Type\UpdateController::class)->name('admin.type.update');
        Route::delete('/{type}', App\Http\Controllers\Admin\Type\DeleteController::class)->name('admin.type.delete');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', App\Http\Controllers\Admin\Tag\IndexController::class)->name('admin.tag.index');
        Route::get('/create', App\Http\Controllers\Admin\Tag\CreateController::class)->name('admin.tag.create');
        Route::post('/', App\Http\Controllers\Admin\Tag\StoreController::class)->name('admin.tag.store');
        Route::get('/{tag}', App\Http\Controllers\Admin\Tag\ShowController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', App\Http\Controllers\Admin\Tag\EditController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', App\Http\Controllers\Admin\Tag\UpdateController::class)->name('admin.tag.update');
        Route::delete('/{tag}', App\Http\Controllers\Admin\Tag\DeleteController::class)->name('admin.tag.delete');
    });



});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
