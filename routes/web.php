<?php

Auth::routes();
Route::get('logout', function () {
    Auth::logout();
    return redirect('user/login');
});

Route::get('/crudIndex', 'HomeController@crudIndex');
Route::get('/crud2index', 'HomeController@crud2index');
Route::post('/jsonSave', 'HomeController@jsonSave');
Route::post('/crudMaker', 'HomeController@crudMaker');
//back End part------------------------------------------------------------

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', 'HomeController@index');

});

//forentEnd part----------------------------

Route::group(['middleware' => ['user']], function () {

});