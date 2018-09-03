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
    return view('index');
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
Route::get('signup', function () {
    return view('frontend/ecommerce/modules/registration/register');
});

// Route::get('/Home', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



