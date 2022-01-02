<?php
            Route::any('chart', 'WelcomeController@chart')->name('chart');
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

            Route::get('/', 'WelcomeController@index')->name('index');
         

            /////////////
            Route::post('logout', 'RegisterController@logout')->name('logout');
            Route::get('forgetpass', 'RegisterController@forgetpass')->name('forgetpass');
            Route::post('saveemailadmin', 'RegisterController@saveemailadmin')->name('saveemailadmin');
        
            //product routes
            Route::resource('comps', 'CampsController')->except(['show']);
            Route::get('/employee/pdf','CampsController@createPDF');
            Route::get('exportsum', 'CampsController@export')->name('exportsum');

  // sumcompsroutes
  Route::resource('sumcomps', 'SumCampsController')->except(['show']);
  Route::get('exporttotlal', 'SumCampsController@export')->name('exporttotlal');
            //contacts routes
            Route::resource('contacts', 'ContactsController')->except(['show']);
       

        
            /////////////////user routes////
            Route::resource('users', 'UserController')->except(['show']);
            
        }); //end of dashboard routes
    }
);
