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

Route::get('/send/template', 'Document@sendTemplate')->name('sdk');
Route::get('/send/file', 'Document@sendFile')->name('send-file');

Route::post('/get/file', 'Document@create')->name('create');
Route::get('/get/file', 'PageController@showFormFile')->name('show');
Route::get('/overflow', 'PageController@showOverflow')->name('overflow');



