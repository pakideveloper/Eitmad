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
//usama
Route::get('/', function () {
    return view('frontend/ecommerce/modules/index');
});
Route::get('/products', function () {
	$products = App\Product::latest()->get();
    return view('frontend/ecommerce/modules/products/products',compact('products'));
});
<<<<<<< HEAD
Route::get('/single-product', function () {
    return view('frontend/ecommerce/modules/products/single-product');
});
=======
Route::get('/shoppingcart', function () {
    return view('frontend/ecommerce/modules/shopping-cart/cart');
});
Route::get('/wishlist', function () {
    return view('frontend/ecommerce/modules/wishlist/wishlist');
});
Route::get('/blog', function () {
    return view('frontend/ecommerce/modules/blog/blog');
});
Route::get('/singleblog', function () {
    return view('frontend/ecommerce/modules/blog/single_blog');
});
>>>>>>> 752aed6273d80b546d55205752f5576eac64a027
