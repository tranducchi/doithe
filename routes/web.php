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
    return view('front-end.layouts.index');
});
Route::get('/mua-the-dien-thoai',function(){
    return view('front-end.layouts.buy_card');
});
Route::get('/nap-tien-dien-thoai',function(){
    return view('front-end.layouts.load_card');
});
Route::get('/ban-the-cao',function(){
    return view('front-end.layouts.sell_card');
});
Route::get('/chiet-khau',function(){
    return view('front-end.layouts.discount');
});
Route::get('/nap-tien-vao-tai-khoan',function(){
    return view('front-end.layouts.pass_money');
});
Route::get('/tin-tuc/hoi-dap',function(){
    return view('front-end.layouts.qa');
});
Route::get('/tin-tuc/huong-dan',function(){
    return view('front-end.layouts.guide');
});
// Admin
Route::prefix('/dashboard')->group(function () {
    Route::get('', function () {
        return view('dashboard.layouts.index');
    });
    Route::resource('slider', 'admin\SliderController');
});