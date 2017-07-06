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
    return view('welcome');//เรียกใช้ฟังก์ชั่น
});

Route::get('user', function () {
    // return 'user page';
    //dd(\App\User::all());

});
Route::get('users/show/{id}', 'UserController@show');//แสดงข้อมูลในฐานข้อมูล
Route::auth();
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@home');

//Route::get('cal-{num1?}-{num2?}','HomeController@cal');//id คือ parameter ที่ส่งเข้าไป
//Route::get('user','HomeController@home');//เรียกใช้ฟังก์ชั่น
//Route::get('user','HomeController@cal');//เรียกใช้ฟังก์ชั่น

//Route::get('/a', function () {
//    $arr=[1,2,3,4,5];
////    print_r($arr);
//    dd($arr);//แสดงผล array
//
//});

//Route::get('cal-{num1?}-{num2?}', function ($num1,$num2) {//id คือ parameter ที่ส่งเข้าไป
//    return $num1 + $num2;


//});


//
//Route::get('about', function () {
//    return "Welcome Sirichai";
//});
//
//Route::post('contack', function () {
//    return "Hello from contack page!";
//});






