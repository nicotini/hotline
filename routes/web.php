<?php

use App\Http\Controllers\Main\IndexController;

use App\Http\Controllers\Admin\Main\IndexController as AdminMainIndexController;

use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
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

Route::group([], function () {
    Route::get('/', IndexController::class)->name('index');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::group([],function () {
        Route::get('/', AdminMainIndexController::class)->name('main.index');
    });
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', AdminCategoryIndexController::class)->name('index');
        Route::get('/create', AdminCategoryCreateController::class)->name('create');
        Route::post('/', AdminCategoryStoreController::class)->name('store');
        Route::post('/', AdminCategoryStoreController::class)->name('store');
        Route::get('/{category}', AdminCategoryShowController::class)->name('show');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
