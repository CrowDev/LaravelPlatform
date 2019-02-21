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

Route::get('/', 'ManualLogin\Login@index');
Route::get('/register', 'ManualRegister\Register@index');
Route::get('/admin', 'Platform\Admin@index');

Route::post('/registerProcess', 'ManualRegister\Register@registerProcess');
Route::post('/loginProcess', 'ManualLogin\Login@loginProcess');

