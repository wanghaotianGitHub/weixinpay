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

Route::get('/test/urlencode', function () {
    echo urlencode($_GET['url']);
});

/*微信*/
//Route::get('index', 'Weixin\WxController@index');
//Route::any('index', 'Weixin\WxController@event');
//Route::any('event', 'Weixin\WxController@event');
//Route::get('token', 'Weixin\WxController@token');
//Route::get('getuser', 'Weixin\WxController@getuser');
//Route::post('menu2', 'Weixin\WxController@menu2');

//项目
Route::get('index', 'Index\IndexController@index');
Route::any('add/{goods_id?}', 'Index\IndexController@add');
Route::any('goods_detail/{goods_id?}', 'Index\IndexController@goods_detail');
Route::any('lis', 'Index\IndexController@lis');
Route::any('history', 'Index\IndexController@history');


Route::get('cart', 'Cart\CartController@cart');

Route::get('create', 'Order\OrderController@create');
Route::get('lists', 'Order\OrderController@lists');
Route::get('paystatus', 'Order\OrderController@paystatus');
Route::get('success', 'Order\OrderController@success');

//微信支付
Route::get('test/{order_id?}','Weixin\WxPayController@test');           //支付
Route::any('notify','Weixin\WxPayController@notify');                   //微信支付回调地址


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//微信JSSDK
Route::get('/wx/js/test', 'Weixin\JssdkController@jsTest');      //jssdk测试
Route::get('/wx/js/getImg', 'Weixin\JssdkController@getImg');      //获取JSSDK上传的照片


//计划任务
Route::get('/crontab/del_orders', 'Crontab\CrontabController@delOrders');  //删除过期订单


Route::get('/wxweb/u', 'Weixin\WXController@getU');         //微信网页授权回调
