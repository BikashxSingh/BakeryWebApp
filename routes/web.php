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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/menus', 'PagesController@menus')->name('menus');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/shop', 'PagesController@shop')->name('shop');

/* For testing */
Route::get('/test', function(){
    return view('pages.test');
});

/* Both method works */
Route::get('/checkout/{id}', 'PagesController@checkout')->name('checkout');
/* Route::get('/checkout/{id}', ['uses' =>'PagesController@checkout']); */

Route::get('/store/{id}', 'PagesController@store')->name('store');

Auth::routes();

Route::get('/admin/order', 'AdminController@order')->name('admin.order');
Route::get('/admin/order/success', 'AdminController@orderS')->name('admin.order.success');
Route::get('/admin/order/fail', 'AdminController@orderF')->name('admin.order.fail');

Route::get('/admin/order/success/{id}', 'AdminController@orderSuccess')->name('admin.order.success');
Route::get('/admin/order/fail/{id}', 'AdminController@orderFail')->name('admin.order.fail');

Route::get('/admin/product', 'AdminController@product')->name('admin.product');
Route::get('/admin/product/new', 'AdminController@new')->name('admin.product.new');

Route::get('/admin/test', function(){
    return view('admin.cake_size');
});


/* file upload dont allow get method */
Route::post('/admin/product/store', 'AdminController@store')->name('admin.product.store');
Route::post('/admin/product/editStore', 'AdminController@editStore')->name('admin.product.editStore');

/* route with varaible should be get */
Route::get('/admin/product/edit/{id}', 'AdminController@edit')->name('admin.product.edit');
Route::get('/admin/product/delete/{id}', 'AdminController@delete')->name('admin.product.delete');
