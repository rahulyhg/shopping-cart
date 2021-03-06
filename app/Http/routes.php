<?php

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/search', [
    'uses' => 'ProductController@search',
    'as' => 'product.search'
]);
Route::get('/autocomplete', [
    'uses' => 'ProductController@autocpmplete',
    'as' => 'product.autocpmplete'
]);

Route::get('/register', [
    'uses' => 'UserController@getRegister',
    'as' => 'user.register',
    'middleware' => 'guest'
]);

Route::post('/register', [
    'uses' => 'UserController@postRegister',
    'as' => 'user.register',
    'middleware' => 'guest'
]);

Route::get('/login', [
    'uses' => 'UserController@getLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);

Route::post('/login', [
    'uses' => 'UserController@postLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);

Route::get('user/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
]);

/*warehouse routes*/
/*warehouse routes*/
Route::get('/warehouse/dashboard', [
    'uses' => 'WarehouseController@getDashboard',
    'as' => 'warehouse.dashboard',
    'middleware' => 'admin'
]);

Route::get('/warehouse/categories', [
    'uses' => 'WarehouseController@getCategories',
    'as' => 'warehouse.categories',
    'middleware' => 'admin'
]);

Route::post('/warehouse/categories', [
    'uses' => 'WarehouseController@postCategories',
    'as' => 'warehouse.categories',
    'middleware' => 'admin'
]);

Route::get('/warehouse/addproduct', [
    'uses' => 'WarehouseController@getAddProduct',
    'as' => 'warehouse.addproduct',
    'middleware' => 'admin'
]);

Route::post('/warehouse/addproduct', [
    'uses' => 'WarehouseController@postAddProduct',
    'as' => 'warehouse.addproduct',
    'middleware' => 'admin'
]);

Route::get('/warehouse/editproduct/{id}', [
    'uses' => 'WarehouseController@getEditProduct',
    'as' => 'warehouse.editproduct',
    'middleware' => 'admin'
]);

Route::put('/warehouse/editproduct/{id}', [
    'uses' => 'WarehouseController@putEditProduct',
    'as' => 'warehouse.editproduct',
    'middleware' => 'admin'
]);

Route::put('/warehouse/unavailableproduct/{id}', [
    'uses' => 'WarehouseController@putUnavailableProduct',
    'as' => 'warehouse.unavailableproduct',
    'middleware' => 'admin'
]);

Route::get('/warehouse/getdueorders/api', [
    'uses' => 'WarehouseController@getDueOrdersApi',
    'as' => 'warehouse.getdueordersapi',
    'middleware' => 'admin'
]);

Route::get('/warehouse/dueorders', [
    'uses' => 'WarehouseController@getDueOrders',
    'as' => 'warehouse.dueorders',
    'middleware' => 'admin'
]);

Route::put('/warehouse/confirmorder/{id}', [
    'uses' => 'WarehouseController@putConfirmOrder',
    'as' => 'warehouse.confirmorder',
    'middleware' => 'admin'
]);
/*warehouse routes*/
/*warehouse routes*/


Route::get('/addtocart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addtocart'
]);

Route::get('/add/{id}', [
    'uses' => 'ProductController@getAddByOne',
    'as' => 'product.addbyone'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reducebyone'
]);

Route::get('/removeitem/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.removeitem'
]);

Route::get('/shoppingcart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingcart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'product.checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'product.checkout',
    'middleware' => 'auth'
]);