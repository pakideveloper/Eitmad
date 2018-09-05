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

Route::get('/', function () {
    return view('frontend/general/index');
});

Route::get('/admin', function () {
    return view('admin/ecommerce/modules/index');
});
Route::get('/admin2', function () {
    return view('admin/ecommerce/modules/index2');
});

Route::get('/jobportal', function () {
    return view('frontend/JobPortal/index');
});
Route::get('/ecommerce', function () {
    return view('frontend/ecommerce/modules/index');
});

Route::group(['middleware'=>'role:admin'], function(){

});

Route::resource('/brands','admin\ecommerce\BrandController');
Route::resource('/products','admin\ecommerce\ProductController');

// Route::get('/register', function () {
//     return view('frontend/ecommerce/modules/registration/register');
// });

// Route::get('/Home', function () {
//     return view('index');
// });
 // Route::get('/register', 'Auth\RegisterController@register');
 // Route::get('/login', 'Auth\LoginController@login');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



