<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//予約入力画面
Route::get("/", "App\Http\Controllers\ReservationController@create")->where('id','[0-9]+')->name('create');

Route::post("/confirm/2", "App\Http\Controllers\ReservationController@send")->name('send');

Route::get("/confirm", "App\Http\Controllers\ReservationController@confirm")->where('id','[0-9]+');

// Route::post("/confirm/register", "App\Http\Controllers\ReservationController@register")->where('id','[0-9]+');

//予約管理画面
Route::get('/dayDetail/{today}','App\Http\Controllers\CalendarController@detailshow');

Route::get('/loginPage','App\Http\Controllers\CalendarController@loginPage')->name('loginPage');

Route::get('/calendar','App\Http\Controllers\CalendarController@dayShow')->name('calendar');

Route::get('/customer/{id}','App\Http\Controllers\CalendarController@showCustomer');

Route::get('/customer/destroy/{id}','App\Http\Controllers\CalendarController@destroy');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
