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

Route::get('/', function () {
    //to check user already logged in or not
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');

Route::get('/logout','LogoutController@index')->name('logout');

Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::get('/registration/student','RegistrationController@student')->name('registration.student');
Route::get('/registration/university','RegistrationController@university')->name('registration.university');
Route::get('/registration/org','RegistrationController@org')->name('registration.org');

Route::post('/registration/student','RegistrationController@insertStudent');
Route::post('/registration/university','RegistrationController@insertUniversity');
Route::post('/registration/org','RegistrationController@insertOrg');

Route::group(['middleware'=>['session']], function(){

    Route::group(['middleware'=>['verifyadmin']], function(){
        Route::get('/admin','AdminController@index')->name('admin.index');
       });

    Route::group(['middleware'=>['verifystudent']], function(){
        Route::get('/student','StudentController@index')->name('student.index');
        Route::get('/student/profile','StudentController@profile')->name('student.profile');
        Route::get('/student/update/profile','StudentController@editProfile')->name('student.editprofile');
        Route::post('/student/update/profile','StudentController@updateProfile');
        Route::get('/student/update/password','StudentController@editPassword')->name('student.updatepassword');
        Route::post('/student/update/password','StudentController@updatePassword');
       });

    Route::group(['middleware'=>['verifyuniversity']], function(){
        Route::get('/university','UniversityController@index')->name('university.index');
     });
    Route::group(['middleware'=>['verifyorg']], function(){
       Route::get('/government','GovernmentController@index')->name('government.index');
    });
});

