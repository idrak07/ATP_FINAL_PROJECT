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

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');

Route::get('/logout','LogoutController@index')->name('logout');

Route::get('/registration','RegistrationController@index')->name('registration.index');
Route::get('/registration/student','RegistrationController@student')->name('registration.student');
Route::get('/registration/university','RegistrationController@university')->name('registration.university');
Route::get('/registration/organization','RegistrationController@organization')->name('registration.organization');
Route::post('/registration/student','RegistrationController@insertStudent');
Route::post('/registration/university','RegistrationController@insertUniversity');
Route::post('/registration/organization','RegistrationController@insertOrganization');
Route::group(['middleware'=>['session']], function(){

    Route::group(['middleware'=>['verifyadmin']], function(){
        Route::get('/admin','AdminController@index')->name('admin.index');
       });

    Route::group(['middleware'=>['verifystudent']], function(){
        Route::get('/student','StudentController@index')->name('student.index');
       
       });

    Route::group(['middleware'=>['verifyuniversity']], function(){
        Route::get('/university','UniversityController@index')->name('university.index');
     });
    Route::group(['middleware'=>['verifyorganization']], function(){

       Route::get('/organization','OrganizationController@index')->name('organization.index');
       Route::get('/organization/profile','OrganizationController@profile')->name('organization.profile');
      //profile upadate 
       Route::get('/organization/update/profile/personal','OrganizationController@editpersonal')->name('organization.personal');
       Route::post('/organization/update/profile/personal','OrganizationController@updatepersonal');
       Route::get('/organization/update/profile/address','OrganizationController@editaddress')->name('organization.address');
       Route::post('/organization/update/profile/address','OrganizationController@updateaddress');
       Route::get('/organization/update/profile/attachment','OrganizationController@editattachment')->name('organization.attachment');
       Route::post('/organization/update/profile/attachment','OrganizationController@updateattachment');
       Route::get('/organization/update/profile/check','OrganizationController@editpassword')->name('organization.password');
       Route::post('/organization/update/profile/check','OrganizationController@currentpassword');
       Route::get('/organization/update/profile/newpassword','OrganizationController@confirmpassword')->name('organization.confirm');
       Route::post('/organization/update/profile/newpassword','OrganizationController@confirmpasswordpost');
       //massageshow
       Route::get('/organization/update/profile/massage','OrganizationController@massage')->name('organization.massage');
       Route::post('/organization/update/profile/massage','OrganizationController@massagebackprofile');
  //offer from show and add
       Route::get('/organization/offer','OrganizationController@offerindex')->name('offer.index');
       Route::post('/organization/offer','OrganizationController@offeradded');
       //massage offer
       Route::get('/organization/offer/massage','OrganizationController@massagetooffer')->name('offer.massage');
       Route::post('/organization/offer/massage','OrganizationController@massagepostoffer');
//offer list
       Route::get('/organization/offerlist','OrganizationController@offerlist')->name('offer.list');
       Route::post('/organization/offerlist','OrganizationController@offerlistsearch');
       Route::post('/organization/offer/details/{id}','OrganizationController@offerlist')->name('offer.details');
      


    });
});


