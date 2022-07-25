<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {

    // Route::resource('categories', CategoryController::class);
    // Route::resource('products', ProductController::class);
    // Route::resource('reviews', ReviewController::class);

    // Route::controller(AuthController::class)->group(function(){
    //     Route::post('register', 'register');
    //     Route::post('login', 'login')->name('login');
    // });
    
    //Route::get('reviews/{product}', [ReviewController::class, 'index'])->name('reviews.index');
    // Route::get('user',      'Api\v1\UserController@index');
    // Route::get('user/{id}', 'Api\v1\UserController@show');
});