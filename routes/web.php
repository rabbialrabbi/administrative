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

Route::get('/division', 'DivisionController@index');
Route::get('/division/{id}', 'DivisionController@show');
Route::post('/division/{id}', 'DivisionController@add');
Route::delete('/division/{id}', 'DivisionController@add');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
