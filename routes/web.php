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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send/template', 'Document@send')->name('sdk');
Route::get('/send/file', 'Document@file')->name('send-file');
Route::get('/test', 'Document@test')->name('test');

Route::get('/get/file', 'Document@show')->name('show');
Route::post('/get/file', 'Document@getFiles')->name('get-file');

