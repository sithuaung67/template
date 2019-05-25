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
    return view('/dashboard/v1');
});

Auth::routes();


Route::get('/dashboard/home', 'DashboardController@versionone')->name('home');
Route::get('/dashboard/v2', 'DashboardController@versiontwo')->name('v2');
Route::get('/dashboard/v3', 'DashboardController@versionthree')->name('v3');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard/chart',[
  'uses'=>'DashboardController@chart',
    'as'=>'chart'
]);
Route::get('/dashboard/donut',[
    'uses'=>'DashboardController@donuts',
    'as'=>'donut'
]);
Route::post('/dashboard/addCity',[
    'uses'=>'DashboardController@postAddCity',
    'as'=>'addCity'
]);
Route::get('city',[
    'uses'=>'DashboardController@getCity',
    'as'=>'city'
]);
Route::post('updateCity/{id}',[
    'uses'=>'DashboardController@updateCity',
    'as'=>'updateCity'
]);
Route::post('/city/delete',[
    'uses'=>'DashboardController@postDeleteCity',
    'as'=>'city.delete'
]);
Route::get('organization',[
    'uses'=>'DashboardController@getOrganization',
    'as'=>'organization'
]);


