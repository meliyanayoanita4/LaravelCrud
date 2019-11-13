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

Route::get('/', 'DataControler@index');
Route::get('/AddData','DataControler@addData')->name('TambahDataPengguna');
Route::get('/GetData','DataControler@GetData')->name('GetData');
Route::get('/EditData','DataControler@EditData');
Route::get('/UpdateData','DataControler@updateData')->name('UpdateDataPengguna');
Route::get('/Hapus','DataControler@DeleteData');
Route::get('/SearchData','DataControler@SearchData')->name('SearchData');
