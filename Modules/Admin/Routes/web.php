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
            Route::get('/{card_id}/downloadCard','AdminCardController@downloadCard');
            Route::get('/{card_id}/downloadCardBack','AdminCardController@downloadCardBack');

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

        Route::group(['prefix'=>'contact'],function (){
            Route::get('/','AdminContactController@index');
            Route::get('/{contact_id}/show','AdminContactController@show');
            Route::get('/{contact_id}/makeUnread','AdminContactController@makeUnread');
        });

        Route::get('analysis/{landing_id}','AdminLandingController@dataAnalysis');
        Route::get('firstPage','AdminController@firstPage');
        Route::post('{section_id}/updateSection','AdminController@updateSection');
        Route::get('{section_id}/deleteSection','AdminController@deleteSection');
        Route::post('{type_id}/updateType','AdminController@updateType');
        Route::post('createSection','AdminController@createSection');

    });
});
