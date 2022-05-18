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
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::view('/', 'main.index');
});



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
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

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', App\Http\Controllers\Admin\Category\IndexController::class)->name('admin.category.index');
        Route::get('/create', App\Http\Controllers\Admin\Category\CreateController::class)->name('admin.category.create');
        Route::post('/', App\Http\Controllers\Admin\Category\StoreController::class)->name('admin.category.store');
        Route::get('/{category}', App\Http\Controllers\Admin\Category\ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', App\Http\Controllers\Admin\Category\EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', App\Http\Controllers\Admin\Category\UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', App\Http\Controllers\Admin\Category\DeleteController::class)->name('admin.category.delete');
    });

    Route::group(['prefix' => 'earnings'], function () {
        Route::get('/', App\Http\Controllers\Admin\Earning\IndexController::class)->name('admin.earning.index');
        Route::get('/create', App\Http\Controllers\Admin\Earning\CreateController::class)->name('admin.earning.create');
        Route::post('/', App\Http\Controllers\Admin\Earning\StoreController::class)->name('admin.earning.store');
        Route::get('/{earning}', App\Http\Controllers\Admin\Earning\ShowController::class)->name('admin.earning.show');
        Route::get('/{earning}/edit', App\Http\Controllers\Admin\Earning\EditController::class)->name('admin.earning.edit');
        Route::patch('/{earning}', App\Http\Controllers\Admin\Earning\UpdateController::class)->name('admin.earning.update');
        Route::delete('/{earning}', App\Http\Controllers\Admin\Earning\DeleteController::class)->name('admin.earning.delete');
    });

    Route::group(['prefix' => 'spendings'], function () {
        Route::get('/', App\Http\Controllers\Admin\Spending\IndexController::class)->name('admin.spending.index');
        Route::get('/create', App\Http\Controllers\Admin\Spending\CreateController::class)->name('admin.spending.create');
        Route::post('/', App\Http\Controllers\Admin\Spending\StoreController::class)->name('admin.spending.store');
        Route::get('/{spending}', App\Http\Controllers\Admin\Spending\ShowController::class)->name('admin.spending.show');
        Route::get('/{spending}/edit', App\Http\Controllers\Admin\Spending\EditController::class)->name('admin.spending.edit');
        Route::patch('/{spending}', App\Http\Controllers\Admin\Spending\UpdateController::class)->name('admin.spending.update');
        Route::delete('/{spending}', App\Http\Controllers\Admin\Spending\DeleteController::class)->name('admin.spending.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', App\Http\Controllers\Admin\User\IndexController::class)->name('admin.user.index');
        Route::get('/create', App\Http\Controllers\Admin\User\CreateController::class)->name('admin.user.create');
        Route::post('/', App\Http\Controllers\Admin\User\StoreController::class)->name('admin.user.store');
        Route::get('/{user}', App\Http\Controllers\Admin\User\ShowController::class)->name('admin.user.show');
        Route::get('/{user}/edit', App\Http\Controllers\Admin\User\EditController::class)->name('admin.user.edit');
        Route::patch('/{user}', App\Http\Controllers\Admin\User\UpdateController::class)->name('admin.user.update');
        Route::delete('/{user}', App\Http\Controllers\Admin\User\DeleteController::class)->name('admin.user.delete');
    });



});



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
