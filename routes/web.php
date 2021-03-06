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

use App\Http\Controllers\PlanController;

Route::get('/', 'PlanController@index');
Route::get('/plans/create', 'PlanController@create');
Route::post('/plans/store', 'PlanController@store');
Route::put('/plans/{plan}', 'PlanController@update');
