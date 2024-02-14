<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomizationLCDController;
use App\Http\Controllers\SliderImageController;

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

Route::get('/', [App\Http\Controllers\BaseController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blogs', [App\Http\Controllers\BaseController::class, 'blog'])->name('blog');
Route::resource('application', ApplicationController::class);


Route::group(['middleware' => ['auth']], function() {
    Route::resource('blogCategories', BlogCategoriesController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('lcd', CustomizationLCDController::class);
    Route::resource('slider', SliderImageController::class);

    Route::get('/slider/edit/{id}', [App\Http\Controllers\SliderImageController::class, 'edit']);
    Route::post('/slider/update/{id}', [App\Http\Controllers\SliderImageController::class, 'update']);
    Route::post('/slider/destroy/{id}', [App\Http\Controllers\SliderImageController::class, 'destroy']);
    
    Route::post('/lcd/update/{id}', [App\Http\Controllers\CustomizationLCDController::class, 'update']);
    Route::get('/blogCategories/edit/{category_id}', [App\Http\Controllers\BlogCategoriesController::class, 'edit'])->name('edit_category');
    Route::post('/blogCategories/update/{category_id}', [App\Http\Controllers\BlogCategoriesController::class, 'update'])->name('update_category');
    Route::post('/blogCategories/destroy/{category_id}', [App\Http\Controllers\BlogCategoriesController::class, 'destroy'])->name('destroy_category');
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
