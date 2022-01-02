<?php

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

       Route::prefix('fakka')->name('fakka.')->middleware(['webauth'])->group(function () {


           });
                    /////////////////////////home///////////
                   Route::prefix('')->name('fakka.')->group(function () {
                    Route::get('/', 'WelcomeController@index')->name('index');
                
                    //product routes//////////////////////////////////
                    Route::resource('products', 'ProductController')->except(['show']);
         
                //////////////contactus////////////////////////
                Route::resource('contactus', 'ContactUsController')->except(['show']);
        
        


            
         
                });



    });


