<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TourokuMiddleware;

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
//ログイン画面（初期表示）
Route::get('login','LoginController@index');
Route::post('login','LoginController@post');

//ログアウト確認画面
Route::get('logout','LogoutController@confirm');
Route::post('logout','LogoutController@confirm');

//ログアウト完了画面
Route::post('logout/delete','LogoutController@delete');

//新規登録画面
Route::get('touroku','TourokuController@index');
Route::post('touroku','TourokuController@index');

//新規登録確認画面
Route::post('touroku/confirm','TourokuController@confirm');

//新規登録完了画面
Route::post('touroku/create','TourokuController@create');

//ホーム画面（初期表示）
Route::get('portal','PortalController@index');
Route::post('portal','PortalController@index');

//販売者情報詳細画面
Route::post('portal/detail','PortalController@detail');

//販売者情報修正画面
Route::post('portal/update','PortalController@update');

//販売者情報削除確認画面
Route::post('portal/delete','PortalController@delete');

//販売者情報削除完了画面
Route::post('portal/deleteconfirm','PortalController@deleteconfirm');

// 商品登録画面
Route::post('merchandise/touroku','MerchandiseController@index');

//商品登録確認画面
Route::post('merchandisetouroku/confirm','MerchandiseController@confirm');

//商品登録完了画面
Route::post('merchandisetouroku/create','MerchandiseController@create');

//商品情報一覧画面
Route::post('merchandise/list','MerchandiseController@list');

//商品情報詳細画面
Route::get('merchandise/detail/{code}','MerchandiseController@detail');

//商品情報修正画面
Route::post('merchandise/update','MerchandiseController@update');

//商品情報削除確認画面
Route::post('merchandise/delete','MerchandiseController@delete');

//商品情報削除完了画面
Route::post('merchandise/deleteconfirm','MerchandiseController@deleteconfirm');

//以下フロント画面

//商品一覧画面(購入者用初期画面)
Route::get('list','ProductListController@index');

//商品詳細画面
Route::get('list/detail/{code}','ProductListController@detail');
