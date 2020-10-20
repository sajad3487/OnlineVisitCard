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
Route::group(['prefix'=>'card','middleware'=>'auth'],function (){
    Route::get('/create/{type}','CardController@create');
    Route::post('/store','CardController@store');
    Route::get('/','CardController@index');
    Route::get('/{card_id}/show','CardController@show');
    Route::get('/{card_id}/reorder','CardController@reorder');

    Route::group(['prefix'=>'payment'],function(){
        Route::get('/{type}/company','CardController@paymentCompany');
    });

    Route::group(['prefix'=>'landing'],function (){
        Route::get('/','LandingController@index');
        Route::get('/{landing_id}/edit','LandingController@edit');
        Route::post('/{landing_id}/update','LandingController@update');
    });

    Route::group(['prefix'=>'analysis'],function(){
        Route::get('/{period}','LandingController@dataAnalysis');
    });
});
Route::get('card/landing/{landing_id}/show','LandingController@show');

