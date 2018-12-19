<?php

Route::get('/', 'WebController@index')->name('/');
Route::post('/contacto', 'WebController@contact');