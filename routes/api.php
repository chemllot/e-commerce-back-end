<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'auth'], function () {
    Route::post('me', 'JwtAuthController@me');
    Route::post('login', 'JwtAuthController@login');
    Route::post('logout', 'JwtAuthController@logout');
    Route::post('refresh', 'JwtAuthController@refresh');
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Articles'], function () {
    Route::resource('articles', 'ArticlesController');
});
Route::group(['namespace' => 'products'], function () {
    Route::resource('products', 'ProductsController');
});
//Route::group(['namespace'=>'delivery'], function (){
//   Route::resource('delivery', 'DeliveryController');
//});
Route::group(['namespace' => 'delivery'], function () {
    Route::resource('delivery', 'DeliveryController')->only(['index', 'store', 'update']);
});
Route::group(['namespace'=>'categories'], function (){
    Route::resource('categories', 'CategoriesController');
});
Route::group(['namespace'=>'Order'], function (){
    Route::resource('Order', 'OrderController');
});
Route::group(['namespace'=>'line_item'], function (){
    Route::resource('line_item', 'LineItemController');
});
