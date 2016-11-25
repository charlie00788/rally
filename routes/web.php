<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Authentication Routes...
Route::get('inicio-de-sesion', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'login'
]);
Route::post('inicio-de-sesion', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'login'
]);
Route::post('cerrar-sesion', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'logout'
]);

// Registration Routes...
Route::get('register', [
    'uses'  => 'Auth\RegisterController@showRegistrationForm',
    'as'    => 'register'
]);
Route::post('register', [
    'uses'  => 'Auth\RegisterController@register',
    'as'    => 'register'
]);

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [
        'uses'  => 'HomeController@index',
        'as'    => 'home'
    ]);

    Route::get('equipos', [
        'uses'  => 'HomeController@getTeams',
        'as'    => 'web.getTeams'
    ]);

    Route::get('agregar-equipo', [
        'uses'  => 'HomeController@getAddTeams',
        'as'    => 'web.getAddTeams'
    ]);

    Route::post('agregar-equipo', [
        'uses'  => 'HomeController@postAddTeams',
        'as'    => 'web.postAddTeams'
    ]);

    Route::get('eliminar-equipo/{team_id}',[
        'uses'  => 'HomeController@getDeleteTeam',
        'as'    => 'web.getDeleteTeam'
    ]);

    Route::get('personas/{team_id}', [
        'uses'  => 'HomeController@getPeople',
        'as'    => 'web.getPeople'
    ]);

    Route::get('agregar-personas/{team_id}', [
        'uses'  => 'HomeController@getAddPeople',
        'as'    => 'web.getAddPeople'
    ]);

    Route::post('agregar-personas', [
        'uses'  => 'HomeController@postAddPeople',
        'as'    => 'web.postAddPeople'
    ]);

    Route::get('eliminar-persona/{persona_id}', [
        'uses'  => 'HomeController@getDeletePeople',
        'as'    => 'web.getDeletePeople'
    ]);
});
