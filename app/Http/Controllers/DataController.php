<?php

namespace App\Http\Controllers;

use App\Converter;
use App\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function divisionList(Request $request)
    {
        $list = DB::table('ada_division')
            ->select('DivisionCode','DivisionNameBangla')
            ->get();
        return $list;
   }

    public function dataList()
    {
        $list['division'] = DB::table('ada_division')
            ->select('DivisionCode','DivisionNameBangla')
            ->get();
        $list['district'] = DB::table('ada_district')
            ->select('DistrictCode','DistrictNameBangla')
            ->get();
        $list['upazila'] = DB::table('ada_upazila')
            ->select('UpazilaCode','UpazilaNameBangla')
            ->get();
        $list['areaType']= DB::table('ada_area_type')->select('AreaTypeCode','AreaTypeNameBangla')->get();

        return $list;
   }

    public function sectionalDataList(Request $request, Data $data)
    {
        $tableName = 'ada_'.$request->section;
        $sectionCode = $request->section.'Code';
        $sectionName = $request->section.'NameBangla';
        $columnName = $data->convertColumnName($request->section);
        $data = DB::table($tableName)->select($sectionCode,$sectionName)->where($columnName,$request->filterKey)->get();

        return $data;
    }

    public function test()
    {
       return request();
   }

    public function getTable(Converter $converter)
    {
//        dd(request()->selection);

        $tableName = request()->tableName;
        $condition = $converter->convertToMultiArray(request()->condition) ;
        $data = DB::table($tableName)->select(request()->selection);
        if($condition){
            $data= $data->where($condition);
        }
        return $data->get();

   }


}
