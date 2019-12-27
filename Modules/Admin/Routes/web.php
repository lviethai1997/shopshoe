<?php

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

Route::prefix('authenticate')->group(function(){
    Route::get('/login','AdminAuthController@getLogin')->name('admin.login');
    Route::post('/login','AdminAuthController@postLogin');
});



Route::prefix('admin')->middleware('CheckLoginAdmin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::group(['prefix' => 'category'],function(){
        Route::get('/','AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create','AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.get.action.category');
    });

    Route::group(['prefix' => 'product'],function(){
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create','AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@action')->name('admin.get.action.product');
    });

    Route::group(['prefix' => 'transaction'],function(){
        Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/View/{id}','AdminTransactionController@viewOrder')->name('admin.get.view.order');
    });

    Route::group(['prefix' => 'rating'],function(){
        Route::get('/','AdminRatingController@index')->name('admin.get.list.rating');
        Route::get('/{action}/{id}','AdminRatingController@action')->name('admin.get.action.rating');
    });

    Route::group(['prefix' => 'user'],function(){
        Route::get('/','AdminUserController@index')->name('admin.get.list.user');
        Route::get('/{action}/{id}','AdminUserController@action')->name('admin.get.action.user');
    });
});
