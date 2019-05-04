<?php

/*
|--------------------------------------------------------------------------
| Web greenliving.vip
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

Route::prefix('/')->group(function () {
    Route::get('/','Frontend\\PagesController@getindex')->name('index');
    Route::get('/gioi-thieu','Frontend\\PagesController@getAboutUs')->name('about'); 
    // san Pham
    Route::get('/san-pham','Frontend\\PagesController@getListProduct')->name('product');
    Route::get('/chi-tiet-san-pham/{slug}','Frontend\\PagesController@getDetailProduct')->name('detail_product');
    Route::get('/gio-hang','Frontend\\PagesController@getCart')->name('you_cart');
    Route::post('/gio-hang-update','Frontend\\PagesController@postSessionCart')->name('update_giohang');
    Route::get('/thanh-toan','Frontend\\PagesController@getClientInfo')->name('client_info');
    Route::post('/thanh-toan','Frontend\\PagesController@postClientInfo')->name('client_info');
    Route::get('/thanh-toan-thanh-cong','Frontend\\PagesController@getSuccess')->name('success');
    // tin tuc va su kien
    Route::get('/thong-tin-can-quan-tam.html','Frontend\\PagesController@getNews')->name('news');
    
    Route::get('/thong-tin-can-quan-tam/{slug}','Frontend\\PagesController@getDetailNews')->name('detail_news');

    // faq
    Route::get('/faq.html','Frontend\\PagesController@getFaq')->name('faq');
    // lien he
    Route::get('/lien-he.html','Frontend\\PagesController@getContact')->name('contact');
    Route::post('/lien-he.html','Frontend\\PagesController@postMessages');
    // tim kiem
    Route::get('/tim-kiem','Frontend\\PagesController@getSearch')->name('search');

    // IMPORTEXCEL
    Route::get('/import-excel.html','Frontend\\ImportCtityController@getImportExcel')->name('excel');
    

    // test
    // Route::get('/test-san-pham','Frontend\\PagesController@getTest')->name('test');
});
Route::prefix('/cart')->group( function () {
    Route::get('/{act}/{idsp}/{qty?}','Frontend\\PagesController@handleCart')->name('cart');
    // Route::post('/delivery', 'LaptopController@getDelivery');

  });
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




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
