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

Route::get('/send/template', 'Document@sendTemplate')->name('sdk');
Route::get('/send/file', 'Document@sendFile')->name('send-file');
Route::get('/test', 'Document@test')->name('test');

Route::get('/get/file', 'Document@show')->name('show');
Route::post('/get/file', 'Document@create')->name('create');
Route::get('/first', 'Test@test');




Route::get('/test', function () {
    $json = App\Json::get();
    $data = json_decode($json, true);

    $path = 'physicianAddress';
    $res = [];
//    dd($data['medicalConditions']['groupA'][0]);
    foreach ($data['medicalConditions']['groupA'] as $item) {
        $res[] = _get($item, $path);
    }
    dd($res);
//    dd(_get($array, $path));
});

function _get(array $json, $path)
{
    $path = explode('.', $path);
    $result = null;
    foreach ($json as $key => $item) {
        if (is_array($item)) {
            unset($path[0]);
            $paramPath = implode('.', $path);
            $result = _get($item, $paramPath);
        }
        if(count($path) == 1)
            return $json[$path[0]];
    }
    return $result;
}