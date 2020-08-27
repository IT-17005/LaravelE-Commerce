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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.index');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });

Route::get('/','Frontend\PagesController@index')->name('index');
Route::get('/contact','Frontend\PagesController@contact')->name('contact');

/*
Products Route
All the routes for our Product for frontend
*/
Route::get('/products','Frontend\ProductsController@index')->name('products');
Route::get('/products/{slug}','Frontend\ProductsController@show')->name('products.show');

//admin route
Route::group(['prefix' => 'admin'], function(){
Route::get('/','Backend\PagesController@index')->name('admin.index');

//product route
Route::group(['prefix' => '/products'], function(){
Route::get('/','Backend\ProductsController@index')->name('admin.products');
Route::get('/create','Backend\ProductsController@create')->name('admin.product.create');
Route::get('/edit/{id}','Backend\ProductsController@edit')->name('admin.product.edit');

Route::post('/store','Backend\ProductsController@store')->name('admin.product.store');
Route::post('/product/edit/{id}','Backend\ProductsController@update')->name('admin.product.update');
Route::post('/product/delete/{id}','Backend\ProductsController@delete')->name('admin.product.delete');
});

});
