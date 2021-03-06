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

Route::get('/', 'PublicController@home');
Route::post('/contact', 'PublicController@contactLead');
Route::get('/contact', 'PublicController@contact');
Route::get('/about', 'PublicController@about');
Route::get('/shop', 'PublicController@products');
Route::get('/shop/{slug}', 'ProductController@singleProduct');
Route::get('/shop/category/{category}', 'PublicController@productByCategory');
Route::get('/shop/company/{company}', 'PublicController@productByCompany');
Route::post('/lead', 'PublicController@productLead');

Auth::routes();

Route::get('/home', 'PublicController@dashboard')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::view('/admin', 'admin.dashboard');
    Route::get('/product', 'ProductController@getProduct');
    Route::get('/category', 'CatComController@getCategory');
    Route::get('/company', 'CatComController@getCompany');
    Route::get('/addProduct', 'ProductController@show');
    Route::view('/addCategory', 'admin.addCategory');
    Route::view('/addCompany', 'admin.addCompany');
    Route::post('/addProduct', 'ProductController@addProduct');
    Route::post('/updateProduct/{id}', 'ProductController@update');
    Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct');
    Route::post('/addCategory', 'CatComController@addCategory');
    Route::post('/updateCategory/{id}', 'CatComController@update');
    Route::get('/deleteCategory/{id}', 'CatComController@deleteCategory');
    Route::post('/addCompany', 'CatComController@addCompany');
    Route::post('/updateCompany/{id}', 'CatComController@update');
    Route::get('/deleteCompany/{id}', 'CatComController@deleteCompany');
});
