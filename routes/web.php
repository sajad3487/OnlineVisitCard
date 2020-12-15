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

Auth::routes(['verify' => true]);
//Route::post('login',function (Request $request){
//        dd($request->all());
//});



Route::group(['middleware'=>'auth'],function (){
   Route::group(['middleware'=>'CheckUser'],function (){

       Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
       Route::group(['prefix'=>'profile','middleware'=>'auth'],function (){
           Route::get('/','HomeController@profile')->middleware('verified');
           Route::post('/update','HomeController@updateProfile')->middleware('verified');
       });
   });
});

Route::get('send','mailController@send');
