<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/bdjobs', function () {
//    return view('hello');
//});
Route::get('/', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@view_ctegory');
Route::get('/product-details/{id}', 'WelcomeController@product_details');
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCartProduct');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/customer-login','CustomerLoginController@customerLogin');
Route::post('/new-checkout', 'CheckoutController@customerRegistration');
Route::get('/shipping-info', 'CheckoutController@saveShippingInfo');
Route::post('/new-shipping', 'CheckoutController@createShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentForm');
Route::post('/new-order', 'CheckoutController@saveOrderInfo');
Route::get('/customer-home', 'CheckoutController@customerHome');
Route::post('/search_product','ProductController@SearchProduct');
/*Search Option*/


/*authentication part*/
Auth::routes();
Route::match(['get', 'post'], 'register', function(){
    return redirect('/');
});

/*admin part*/
Route::get('/home', 'HomeController@index');
Route::get('/add-category', 'CategoryController@create_category')->middleware('authenticateMiddleware');
Route::post('/new-category', 'CategoryController@save_category')->middleware('authenticateMiddleware');
Route::get('/manage-category', 'CategoryController@manage_category')->middleware('authenticateMiddleware');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublished_category')->middleware('authenticateMiddleware');
Route::get('/published-category/{id}', 'CategoryController@published_category')->middleware('authenticateMiddleware');
Route::get('/edit-category/{id}', 'CategoryController@edit_category')->middleware('authenticateMiddleware');
Route::post('/update-category', 'CategoryController@update_category')->middleware('authenticateMiddleware');
Route::get('/delete-category/{id}', 'CategoryController@delete_category')->middleware('authenticateMiddleware');
/*customers*/
Route::get('manage-customer','UserController@manageCustomer')->middleware('authenticateMiddleware');
Route::get('/delete-customer/{id}','UserController@deleteCustomer')->middleware('authenticateMiddleware');

/*Manufacturer part*/
Route::get('/add-manufacturer', 'ManufacturerController@create_manufacturer')->middleware('authenticateMiddleware');
Route::post('/new-manufacturer', 'ManufacturerController@save_manufacturer')->middleware('authenticateMiddleware');
Route::get('/manage-manufacturer', 'ManufacturerController@manage_manufacturer')->middleware('authenticateMiddleware');
Route::post('/image-manufacturer', 'ManufacturerController@image_manufacturer')->middleware('authenticateMiddleware');
Route::get('/unpublished-manufacturer/{id}', 'ManufacturerController@unpublished_manufacturer')->middleware('authenticateMiddleware');
Route::get('/published-manufacturer/{id}', 'ManufacturerController@published_manufacturer')->middleware('authenticateMiddleware');
Route::get('/edit-manufacturer/{id}', 'ManufacturerController@edit_manufacturer')->middleware('authenticateMiddleware');
Route::post('/update-manufacturer', 'ManufacturerController@update_manufacturer')->middleware('authenticateMiddleware');
Route::get('/delete-manufacturer/{id}', 'ManufacturerController@delete_manufacturer')->middleware('authenticateMiddleware');

/*Product Mangement*/
Route::get('/add-product', 'ProductController@create_product')->middleware('authenticateMiddleware');
Route::post('/new-product', 'ProductController@save_product')->middleware('authenticateMiddleware');
Route::get('/manage-product', 'ProductController@manageProduct')->middleware('authenticateMiddleware');
Route::get('delete-product/{id}','ProductController@deleteProduct')->middleware('authenticateMiddleware');
Route::post('/manage-order', 'ProductController@manageProduct')->middleware('authenticateMiddleware');


/*Order Management*/
Route::get('/order-management','OrderController@orderManage')->middleware('authenticateMiddleware');
Route::get('delete-order/{id}','OrderController@deleteOrder')->middleware('authenticateMiddleware');
/*user Management*/
Route::get('/create-user', 'UserController@create_user');
Route::post('/new-user', 'UserController@save_user');
