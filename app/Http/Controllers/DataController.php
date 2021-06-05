<?php

namespace App\Http\Controllers;

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

    public function open()
    {
        $data = "This data is open and can be accessed without the client being authenticated";
        return response()->json(compact('data'),200);

    }

    public function closed()
    {
        $data = "Only authorized users can see this";
        return response()->json(compact('data'),200);
    }


}
