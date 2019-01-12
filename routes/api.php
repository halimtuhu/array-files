<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'Halimtuhu\ArrayFiles\FieldController@index');
Route::post('/upload', 'Halimtuhu\ArrayFiles\FieldController@upload');
Route::delete('/delete/{image}', 'Halimtuhu\ArrayFiles\FieldController@delete');