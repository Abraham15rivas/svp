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

Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
    //grupo de rutas de vacaciones
    Route::group(['prefix'=>'holidays'], function(){
        Route::get('/menu','Holiday\HolidayController@menu')->name('holidays.menu');
        Route::get('/holiday_form','Holiday\HolidayController@form_request')->name('holidays.form_request');
        Route::get('/calculateHoliday','Holiday\HolidayController@calculate')->name('holidays.calculate');
    });

    //Grupo de rutas para permisos
    Route::group(['prefix' => 'permits'], function () {
        Route::get('/menu','Permit\PermitController@menu')->name('permits.menu');
    });
});

