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
    return view('welcome');
});


Route::get('template', ['as' => 'template', 'uses' => 'MasterController@index']);
Route::get('trang-chu', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);
Route::get('loai-san-pham/{_id_type_product}', [
    'as' => 'loai-san-pham',
    'uses' => 'PageController@getLoaiSanPham'
]);
Route::get('chi-tiet-san-pham', [
    'as' => 'chi-tiet-san-pham',
    'uses' => 'PageController@getChiTietSanPham'
]);
Route::get('lien-he', [
    'as' => 'lien-he',
    'uses' => 'PageController@getLienHe'
]);
Route::get('dang-ky', [
    'as' => 'dang-ky',
    'uses'  => 'PageController@getDangKy'
]);

