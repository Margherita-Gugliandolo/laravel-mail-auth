<?php

use Illuminate\Support\Facades\Route;
use App\Chocolate;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('chocolate-index');
Route::get('/chocolate/del/{id}', 'LoggedController@delete') -> name('chocolate-delete');

Route::get('/chocolate/edit/{id}', 'LoggedController@edit') -> name('chocolate-edit');
Route::post('/chocolate/update/{id}', 'LoggedController@update') -> name('chocolate-update');


Route::get('/chocolate/{id}', 'GuestController@show') -> name('chocolate-show');
