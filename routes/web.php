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


Route::prefix('division')->group(function () {
    Route::view('/', 'page.divisionPage');
    Route::get('/{currentPage}', 'DivisionController@index');
    Route::post('/create', 'DivisionController@add');
    Route::get('/show/{id}', 'DivisionController@show');
    Route::patch('/update', 'DivisionController@update');
    Route::delete('/{id}', 'DivisionController@destroy');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
