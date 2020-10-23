<?php
\

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::group(['middleware'=>'CheckAdmin'],function (){
        Route::get('/', 'AdminController@index');

        Route::group(['prefix'=>'card'],function (){
            Route::get('/','AdminCardController@index');
            Route::get('/{card_id}/show','AdminCardController@show');
            Route::get('/{user_id}/userCards','AdminCardController@userCards');
            Route::post('/{card_id}/changeStatus','AdminCardController@changeStatus');

        });

        Route::group(['prefix'=>'landing'],function (){
            Route::get('/','AdminLandingController@index');
            Route::get('/{landing_id}/edit','AdminLandingController@edit');
            Route::get('/{landing_id}/userLanding','AdminLandingController@userLanding');
            Route::post('/{landing_id}/update','AdminLandingController@update');
            Route::get('/{landing_id}/changeStatus','AdminLandingController@changeStatus');
        });

        Route::group(['prefix'=>'customer'],function (){
            Route::get('/','AdminCustomerController@index');
        });

        Route::get('analysis/{landing_id}','AdminLandingController@dataAnalysis');

    });
});
