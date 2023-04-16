<?php

use App\Http\Controllers\Main\IndexController;
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
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class)->name('main.index');
});
//Posts
//UA-lang
Route::group(['namespace' => 'App\Http\Controllers\Post', 'prefix' => 'posts'], function () {
    Route::get('/', 'IndexController')->name('post.index');
    Route::get('/{post}', 'ShowController')->name('post.show');

    Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function () {
        Route::post('/', 'StoreController')->name('post.comment.store');
});
});


//Category
Route::group(['namespace' => 'App\Http\Controllers\Category', 'prefix' => 'categories'], function () {
    Route::get('/', 'IndexController')->name('category.index');
    Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function () {
        Route::get('/', 'IndexController')->name('category.post.index');
    });
});

//Blog RU-lang
//Posts
Route::group(['namespace' => 'App\Http\Controllers\Ru', 'prefix' => 'ru'], function () {
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('ru.post.index');
        Route::get('/{post}', 'ShowController')->name('ru.post.show');

        Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function () {
            Route::post('/', 'StoreController')->name('ru.post.comment.store');
    });
    });

    //Category
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('ru.category.index');
        Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function () {
            Route::get('/', 'IndexController')->name('ru.category.post.index');
        });
    });
});

//Admin
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.post.destroy');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.destroy');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('admin.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('admin.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('admin.comment.update');
        Route::delete('/{comment}', 'DestroyController')->name('admin.comment.destroy');
    });
    //Admin RU-lang
    Route::group(['namespace' => 'Ru', 'prefix' => 'ru'], function () {
    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/', 'IndexController')->name('admin.ru.post.index');
        Route::get('/create', 'CreateController')->name('admin.ru.post.create');
        Route::post('/', 'StoreController')->name('admin.ru.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.ru.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.ru.post.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.ru.post.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.ru.post.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('admin.ru.category.index');
        Route::get('/create', 'CreateController')->name('admin.ru.category.create');
        Route::post('/', 'StoreController')->name('admin.ru.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.ru.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.ru.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.ru.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.ru.category.destroy');
    });
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('admin.ru.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('admin.ru.comment.edit');
        Route::patch('/{comment}', 'UpdateController')->name('admin.ru.comment.update');
        Route::delete('/{comment}', 'DestroyController')->name('admin.ru.comment.destroy');
    });
    });
});
Auth::routes();


