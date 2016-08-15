<?php

/*to display the task*/
Route::get('/','TaskController@index');
Route::get('create/task','TaskController@create');
Route::post('store/task','TaskController@store');
Route::get('edit/task/{id}','TaskController@edit');
Route::post('update/task/{id}','TaskController@update');
Route::get('delete/{id}','TaskController@destroy');

