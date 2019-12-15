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

Route::post('/registration/student','RegistrationController@insertStudent');
Route::post('/registration/university','RegistrationController@insertUniversity');

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
        Route::get('/student/update/cv','StudentController@editCV')->name('student.updatecv');
        Route::post('/student/update/cv','StudentController@updateCV');
        Route::get('/student/update/picture','StudentController@editPicture')->name('student.updatepicture');
        Route::post('/student/update/picture','StudentController@updatePicture');
        Route::get('/student/apply/{id}', 'StudentController@apply')->name('student.apply');
        Route::post('/student/apply/{id}', 'StudentController@confirmApply');
        Route::get('/student/applications','StudentController@applications')->name('student.applications');
       });

    Route::group(['middleware'=>['verifyuniversity']], function(){
        Route::get('/university','UniversityController@index')->name('university.index');
     });
    Route::group(['middleware'=>['verifyorganization']], function(){
       Route::get('/organization','OrganizationController@index')->name('organization.index');
    });
});

