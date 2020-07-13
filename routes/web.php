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

// Xây dựng route project
// Tuân thủ theo mô hình MVC thì tạo luôn 1 controller
/* Frontend Controller */

use Illuminate\Routing\RouteGroup;

Route::get('','frontend\IndexController@GetIndex');
Route::get('about.html', 'frontend\IndexController@GetAbout');
Route::get('contact.html', 'frontend\IndexController@GetContact');

// product
Route::group(['prefix' => 'product'], function () {
    Route::get('', 'frontend\ProductController@GetShop');
    Route::get('detail', 'frontend\ProductController@GetDetail');
});

// checkout
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', 'frontend\CheckoutController@GetCheckout');
    Route::post('', 'frontend\CheckoutController@PostCheckout');
    Route::get('complete', 'frontend\CheckoutController@GetComplete');
});

// cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('', 'frontend\CartController@GetCart');
});




/* Backend Controller */

Route::get('login', 'backend\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login', 'backend\LoginController@PostLogin');


Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    
    Route::get('', 'backend\IndexController@GetIndex');
    Route::get('logout', 'backend\IndexController@Logout');

    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@GetCategory');
        Route::post('', 'backend\CategoryController@PostCategory');
        Route::get('edit/{id_category}', 'backend\CategoryController@GetEditCategory');
        Route::post('edit/{id_category}', 'backend\CategoryController@PostEditCategory');
    });

    // user
    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@GetListUser');
        Route::get('add', 'backend\UserController@GetAddUser');
        Route::post('add', 'backend\UserController@PostAddUser');
        Route::get('edit', 'backend\UserController@GetEditUser');
    });

    // order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@GetOrder');
        Route::get('processed', 'backend\OrderController@GetProcessed');
        Route::get('detail', 'backend\OrderController@GetDetailorder');
    });

    // product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@GetListProduct');
        Route::get('add', 'backend\ProductController@GetAddProduct');
        Route::post('add', 'backend\ProductController@PostAddProduct');
        Route::get('edit', 'backend\ProductController@GetEditProduct');
    });
});

