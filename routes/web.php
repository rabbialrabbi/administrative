<?php
/**
 * Created by PhpStorm.
 * User: Rabbi
 * Email: rabbialrabbi@gmail.com
 * Date: 3/21/2020
 * Time: 7:58 PM
 */
use App\Converter;
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
    Route::view('/', 'pages.divisionPage');
    Route::get('/{currentPage}', 'DivisionController@index');
    Route::post('/create', 'DivisionController@add');
    Route::get('/show/{id}', 'DivisionController@show');
    Route::post('/update', 'DivisionController@update');
    Route::delete('/{id}', 'DivisionController@destroy');
});

Route::prefix('district')->group(function () {
    Route::view('/', 'pages.districtPage');
    Route::get('/{currentPage}', 'DistrictController@index');
    Route::post('/create', 'DistrictController@add');
    Route::get('/{id}', 'DistrictController@show');
    Route::post('/update', 'DistrictController@update');
    Route::delete('/{id}', 'DistrictController@destroy');
});

Route::prefix('upazila')->group(function () {
    Route::view('/', 'pages.upazilaPage');
    Route::get('/{currentPage}', 'UpazilaController@index');
    Route::post('/create', 'UpazilaController@add');
    Route::get('/{id}', 'UpazilaController@show');
    Route::post('/update', 'UpazilaController@update');
    Route::delete('/{id}', 'UpazilaController@destroy');
});

Route::prefix('areatype')->group(function () {
    Route::view('/', 'pages.areaType');
    Route::get('/{currentPage}', 'AreaTypeController@index');
    Route::post('/create', 'AreaTypeController@add');
    Route::get('/show/{id}', 'AreaTypeController@show');
    Route::patch('/update', 'AreaTypeController@update');
    Route::delete('/{id}', 'AreaTypeController@destroy');
});

Route::prefix('area')->group(function () {
    Route::view('/', 'pages.areaPage');
    Route::get('/{currentPage}', 'AreaController@index');
    Route::post('/create', 'AreaController@add');
    Route::get('/{id}', 'AreaController@show');
    Route::post('/update', 'AreaController@update');
    Route::delete('/{id}', 'AreaController@destroy');
});

Route::prefix('codelist')->group(function () {
    Route::view('/', 'pages.codeListPage');
    Route::get('/{currentPage}', 'CodeListController@index');
    Route::post('/create', 'CodeListController@add');
    Route::get('/show/{id}', 'CodeListController@show');
    Route::patch('/update', 'CodeListController@update');
    Route::delete('/{id}', 'CodeListController@destroy');
});

Route::prefix('listitem')->group(function () {
    Route::view('/', 'pages.listItemPage');
    Route::get('/{currentPage}', 'ListItemController@index');
    Route::post('/create', 'ListItemController@add');
    Route::get('/{id}', 'ListItemController@show');
    Route::patch('/update', 'ListItemController@update');
    Route::delete('/{id}', 'ListItemController@destroy');
});

/* Vue practice */
Route::prefix('vueareatype')->group(function () {
    Route::view('/', 'vue.areaType');
    Route::get('/{currentPage}', 'AreaTypeController@index');
    Route::post('/create', 'AreaTypeController@add');
    Route::get('/show/{id}', 'AreaTypeController@show');
    Route::patch('/update', 'AreaTypeController@update');
    Route::delete('/{id}', 'AreaTypeController@destroy');
});

Route::prefix('data')->group(function (){
    Route::get('/divisionList/{start?}/{end?}','DataController@divisionList');
    Route::get('/all','DataController@dataList');
    Route::get('/section','DataController@sectionalDataList');
    Route::post('/gettable/{tableName}','DataController@getTable');

});

Route::get('/test',function (){

    $test = Converter::test();
    dd($test);
});
//Route::post('/test','DataController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
