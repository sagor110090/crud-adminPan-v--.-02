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
Route::resource('admin/sagor111', 'Admin\\sagor111Controller');
Route::resource('admin/sagor11111', 'Admin\\sagor11111Controller');
Route::resource('admin/student-attendance', 'Admin\\Student AttendanceController');
Route::resource('admin/student-attendances', 'Admin\\StudentAttendancesController');
Route::resource('admin/teacher-attendance', 'Admin\\TeacherAttendanceController');
Route::resource('admin/slider', 'Admin\\SliderController');
Route::resource('admin/mane', 'Admin\\ManeController');
Route::resource('admin/goodboy', 'Admin\\goodboyController');
Route::resource('admin/sagor-khan', 'Admin\\SagorKhanController');
Route::resource('admin/final-test', 'Admin\\FinalTestController');
Route::resource('admin/hellllllll', 'Admin\\hellllllllController');
Route::resource('admin/hello-frinds', 'Admin\\HelloFrindsController');
Route::resource('admin/slider', 'Admin\\SliderController');
Route::resource('admin/model-name', 'Admin\\ModelNameController');
Route::resource('admin/crud-test-final', 'Admin\\CrudTestFinalController');
Route::resource('admin/sdswewe', 'Admin\\sdsweweController');
Route::resource('admin/make', 'Admin\\MakeController');
Route::resource('admin/create-new', 'Admin\\CreateNewController');