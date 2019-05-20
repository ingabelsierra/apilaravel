<?php

use Illuminate\Http\Request;


Route::prefix('v1')->group(function(){
 Route::post('login', 'Api\AuthController@login');
 Route::post('register', 'Api\AuthController@register');
 Route::group(['middleware' => 'auth:api'], function(){
 Route::post('getUser', 'Api\AuthController@getUser');
 Route::post('trasabilidadciv', 'Api\TrasabilidadcivController@index');
 Route::post('create', 'Api\TrasabilidadcivController@store');
 Route::get('trasabilidadciv/{id}', 'Api\TrasabilidadcivController@show');
 Route::put('trasabilidadciv/{id}', 'Api\TrasabilidadcivController@update');
 Route::delete('trasabilidadciv/{id}', 'Api\TrasabilidadcivController@destroy');
 Route::post('departamentos', 'Api\DepartamentoController@index');
 });
});

