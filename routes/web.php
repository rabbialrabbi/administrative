<?php
/**
 * Created by PhpStorm.
 * User: Rabbi
 * Email: rabbialrabbi@gmail.com
 * Date: 3/21/2020
 * Time: 7:58 PM
 */

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
    Route::patch('/update', 'DivisionController@update');
    Route::delete('/{id}', 'DivisionController@destroy');
});

Route::prefix('district')->group(function () {
    Route::view('/', 'pages.districtPage');
    Route::get('/{currentPage}/{filterKey}', 'DistrictController@index');
    Route::post('/create', 'DistrictController@add');
    Route::get('/{id}', 'DistrictController@show');
    Route::patch('/update', 'DistrictController@update');
    Route::delete('/{id}', 'DistrictController@destroy');
});

Route::prefix('upazila')->group(function () {
    Route::view('/', 'pages.upazilaPage');
    Route::get('/{currentPage}', 'UpazilaController@index');
    Route::post('/create', 'UpazilaController@add');
    Route::get('/{id}', 'UpazilaController@show');
    Route::patch('/update', 'UpazilaController@update');
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
    Route::patch('/update', 'AreaController@update');
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

/* Vue practive */
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

//    $header = ['DivisionId', 'DivisionCode', 'DivisionNameEnglish', 'DivisionNameBangla', 'DivisionImage1', 'DivisionImage2', 'Note', 'RecordStatus', 'RecordVersion', 'UserAccess', 'AccessDate'];
//    $data = collect([
//        [1, '10', 'Barisal', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [2, '20', 'Chittagong', 'চটগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [3, '30', 'Dhaka', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [4, '40', 'Khulna', 'খুলনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [5, '50', 'Rajshahi', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [6, '55', 'Rangpur', 'রংপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [7, '60', 'Sylhet', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
//        [8, '70', 'Mymensingh', 'ময়মনসিংহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00']
//    ]);
//
////$data->mapToDictionary(function ($item){
////    $e[]=$header->combine($item);
////});
//    foreach ($data as $info ){
//        $e[] = array_combine($header,$info);
//    }
//
//
//    dd(print_r($e[0]));


});
//Route::post('/test','DataController@test');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
