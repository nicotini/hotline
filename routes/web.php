<?php
 
use App\Http\Controllers\Main\IndexController as MainIndexController;
use App\Http\Controllers\Post\IndexController as PostIndexController;
use App\Http\Controllers\Post\ShowController as PostShowController;
use App\Http\Controllers\Post\Comment\StoreController as PostCommentStoreController;
use App\Http\Controllers\Post\Like\StoreController as PostLikeStoreController;

use App\Http\Controllers\Admin\Main\IndexController as AdminMainIndexController;


use App\Http\Controllers\Personal\Main\IndexController as PersonalMainIndexController;
use App\Http\Controllers\Personal\Liked\IndexController as PersonalLikedIndexController;
use App\Http\Controllers\Personal\Liked\DestroyController as PersonalLikedDestroyController;

use App\Http\Controllers\Personal\Comment\IndexController as PersonalCommentIndexController;
use App\Http\Controllers\Personal\Comment\EditController as PersonalCommentEditController;
use App\Http\Controllers\Personal\Comment\UpdateController as PersonalCommentUpdateController;
use App\Http\Controllers\Personal\Comment\DestroyController as PersonalCommentDestroyController;




use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Admin\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Admin\Category\DestroyController as AdminCategoryDestroyController;

use App\Http\Controllers\Admin\Tag\IndexController as AdminTagIndexController;
use App\Http\Controllers\Admin\Tag\CreateController as AdminTagCreateController;
use App\Http\Controllers\Admin\Tag\StoreController as AdminTagStoreController;
use App\Http\Controllers\Admin\Tag\ShowController as AdminTagShowController;
use App\Http\Controllers\Admin\Tag\EditController as AdminTagEditController;
use App\Http\Controllers\Admin\Tag\UpdateController as AdminTagUpdateController;
use App\Http\Controllers\Admin\Tag\DestroyController as AdminTagDestroyController;

use App\Http\Controllers\Admin\Post\IndexController as AdminPostIndexController;
use App\Http\Controllers\Admin\Post\CreateController as AdminPostCreateController;
use App\Http\Controllers\Admin\Post\StoreController as AdminPostStoreController;
use App\Http\Controllers\Admin\Post\ShowController as AdminPostShowController;
use App\Http\Controllers\Admin\Post\EditController as AdminPostEditController;
use App\Http\Controllers\Admin\Post\UpdateController as AdminPostUpdateController;
use App\Http\Controllers\Admin\Post\DestroyController as AdminPostDestroyController;

use App\Http\Controllers\Admin\User\IndexController as AdminUserIndexController;
use App\Http\Controllers\Admin\User\CreateController as AdminUserCreateController;
use App\Http\Controllers\Admin\User\StoreController as AdminUserStoreController;
use App\Http\Controllers\Admin\User\ShowController as AdminUserShowController;
use App\Http\Controllers\Admin\User\EditController as AdminUserEditController;
use App\Http\Controllers\Admin\User\UpdateController as AdminUserUpdateController;
use App\Http\Controllers\Admin\User\DestroyController as AdminUserDestroyController;

use Illuminate\Support\Facades\Auth;
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

Route::name('main.')->group(function () {
    Route::get('/', MainIndexController::class)->name('index');
});
Route::prefix('posts')->name('post.')->group(function () {
    Route::get('/', PostIndexController::class)->name('index');
    Route::get('/{post}', PostShowController::class)->name('show');

    Route::prefix('{post}/comments')->name('comments.')->group(function() {
        Route::post('/', PostCommentStoreController::class)->name('store');
    });

    Route::prefix('{post}/likes')->name('like.')->group(function() {
        Route::post('/', PostLikeStoreController::class)->name('store');
    });
    
});

Route::middleware(['auth', 'verified'])->prefix('personal')->name('personal.')->group(function () {
    Route::group([],function () {
        Route::get('/', PersonalMainIndexController::class)->name('main.index');
    });

    Route::prefix('liked')->name('liked.')->group(function () {
        Route::get('/', PersonalLikedIndexController::class)->name('index');
        Route::delete('/{post}', PersonalLikedDestroyController::class)->name('delete');
    });

    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('/', PersonalCommentIndexController::class)->name('index');
        Route::get('/{comment}/edit', PersonalCommentEditController::class)->name('edit');
        Route::patch('/{comment}', PersonalCommentUpdateController::class)->name('update');
        Route::delete('/{comment}', PersonalCommentDestroyController::class)->name('delete');
    });
});

Route::middleware(['auth','admin', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::group([],function () {
        Route::get('/', AdminMainIndexController::class)->name('main.index');
    });
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', AdminCategoryIndexController::class)->name('index');
        Route::get('/create', AdminCategoryCreateController::class)->name('create');
        Route::post('/', AdminCategoryStoreController::class)->name('store');
        Route::get('/{category}', AdminCategoryShowController::class)->name('show');
        Route::get('/{category}/edit', AdminCategoryEditController::class)->name('edit');
        Route::patch('/{category}', AdminCategoryUpdateController::class)->name('update');
        Route::delete('/{category}', AdminCategoryDestroyController::class)->name('delete');
    });

    Route::prefix('tags')->name('tag.')->group(function () {
        Route::get('/', AdminTagIndexController::class)->name('index');
        Route::get('/create', AdminTagCreateController::class)->name('create');
        Route::post('/', AdminTagStoreController::class)->name('store');
        Route::get('/{tag}', AdminTagShowController::class)->name('show');
        Route::get('/{tag}/edit', AdminTagEditController::class)->name('edit');
        Route::patch('/{tag}', AdminTagUpdateController::class)->name('update');
        Route::delete('/{tag}', AdminTagDestroyController::class)->name('delete');
    });

    Route::prefix('posts')->name('post.')->group(function () {
        Route::get('/', AdminPostIndexController::class)->name('index');
        Route::get('/create', AdminPostCreateController::class)->name('create');
        Route::post('/', AdminPostStoreController::class)->name('store');
        Route::get('/{post}', AdminPostShowController::class)->name('show');
        Route::get('/{post}/edit', AdminPostEditController::class)->name('edit');
        Route::patch('/{post}', AdminPostUpdateController::class)->name('update');
        Route::delete('/{post}', AdminPostDestroyController::class)->name('delete');
    });

    Route::prefix('users')->name('user.')->group(function () {
        Route::get('/', AdminUserIndexController::class)->name('index');
        Route::get('/create', AdminUserCreateController::class)->name('create');
        Route::post('/', AdminUserStoreController::class)->name('store');
        Route::get('/{user}', AdminUserShowController::class)->name('show');
        Route::get('/{user}/edit', AdminUserEditController::class)->name('edit');
        Route::patch('/{user}', AdminUserUpdateController::class)->name('update');
        Route::delete('/{user}', AdminUserDestroyController::class)->name('delete');
    });
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
