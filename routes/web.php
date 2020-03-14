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

    return redirect('/division');
});

Route::get('/district','DistrictController@index');

Route::view('/division', 'page.divisionPage');
Route::get('/division/view', 'DivisionController@index');
Route::post('/division/create', 'DivisionController@add');
Route::get('/division/{id}', 'DivisionController@show');
Route::patch('/division/edit', 'DivisionController@edit');
Route::delete('/division/{id}', 'DivisionController@destroy');


Route::view('/pagination','pagination');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
