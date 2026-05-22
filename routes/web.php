<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('posts', PostController::class);
});

Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
})

    Route::get('/login',[UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login',[UserController::class, 'login'])->name('login');
    Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/article', [PostController::class, 'show'])->name('posts.single');

