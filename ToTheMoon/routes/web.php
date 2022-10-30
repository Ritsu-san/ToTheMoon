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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\userpagecontroller@login')->name('login');
Route::get('register', 'App\Http\Controllers\userpagecontroller@register')->name('register');
Route::post('custom-login', 'App\Http\Controllers\userpagecontroller@customLogin')->name('login.custom');
Route::post('custom-register', 'App\Http\Controllers\userpagecontroller@customRegister')->name('register.custom');

Route::get('signout', 'App\Http\Controllers\userpagecontroller@signOut')->name('signout');

Route::get('account/verify/{token}', 'App\Http\Controllers\userpagecontroller@verifyAccount')->name('user.verify'); 
Route::get('forget-password', 'App\Http\Controllers\userpagecontroller@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'App\Http\Controllers\userpagecontroller@submitForgetPasswordForm')->name('forget.password.post');
Route::get('reset-password/{token}', 'App\Http\Controllers\userpagecontroller@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password', 'App\Http\Controllers\userpagecontroller@submitResetPasswordForm')->name('reset.password.post');
Route::group(['middleware' => 'auth'], function(){
Route::get('adminindex', 'App\Http\Controllers\destinationcontroller@index');
Route::get('destination/{id}/delete', 'App\Http\Controllers\destinationcontroller@destroy')->name('destination.delete');
Route::post('custom-registeradventure', 'App\Http\Controllers\destinationcontroller@customRegisterAdventure')->name('registeradventure.custom');
Route::get('destination/{id}/edit', 'App\Http\Controllers\destinationcontroller@edit')->name('destination.edit');
Route::post('destination/update', 'App\Http\Controllers\destinationcontroller@update')->name('destination.update');
});
Route::get('index', 'App\Http\Controllers\userpagecontroller@index')->name('index');



