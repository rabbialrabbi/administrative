<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $dataPerPage = 10;
        $filterKey = $request->filterKey;
        $currentPage = $request->currentPage;

        if($filterKey){

            $filterData = DB::table('ada_district')
                ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
                ->select('ada_district.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode')->where('DivisionNameBangla',$filterKey);
            $total = $filterData->count();
            $currentPage = $request->currentPage -1 ;
            $firstData = $currentPage * $dataPerPage;

            $district['tableData'] = $filterData
                                ->orderBy('DistrictId','asc')
                                ->offset($firstData)
                                ->limit($dataPerPage)
                                ->get();

            $district['count']= ceil($total/$dataPerPage);

        }else{
            $q = DB::table('ada_district');
            $total = $q->count();
            $checkFraction = $total%$dataPerPage;

            if($currentPage == 'lastPage'){
                $currentPage = floor($total/$dataPerPage);
                $firstData = $currentPage * $dataPerPage;
                if($checkFraction){
                    $dataPerPage = $checkFraction;
                }
            }else{
                $currentPage = $currentPage -1 ;
                $firstData = $currentPage * $dataPerPage;
            }
            $district['tableData'] = DB::table('ada_district')
                ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
                ->select('ada_district.*', 'ada_division.DivisionNameBangla')
                ->orderBy('DistrictId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            $district['count']= ceil($total/$dataPerPage);
        }

        $district['DivisionName'] = DB::table('ada_district')
            ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
            ->select('ada_division.DivisionCode', 'ada_division.DivisionNameBangla')
            ->distinct()
            ->get();

        return $district;
    }

    public function filter($key)
    {
        $data =  DB::table('ada_district')
            ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
            ->select('ada_district.*', 'ada_division.DivisionNameBangla')->where('DivisionNameBangla','=',$key)->get();
        return $data;
    }

    public function add()
    {
        $validation = request()->validate([
            'DistrictId'=>'required',
            'DivisionCode'=>'required',
            'DistrictCode'=>'required',
            'DistrictNameEnglish'=>'required',
            'DistrictNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);

        $response = DB::table('ada_district')->insert([
            'DistrictId'=>request()->DistrictId,
            'DivisionCode'=>request()->DivisionCode,
            'DistrictCode'=>request()->DistrictCode,
            'DistrictNameEnglish'=>request()->DistrictNameEnglish,
            'DistrictNameBangla'=>request()->DistrictNameBangla,
            'DistrictImage1'=>'Default',
            'DistrictImage2'=>'Default',
            'Note'=>request()->Note,
            'RecordStatus'=>request()->RecordStatus,
            'RecordVersion'=>request()->RecordVersion,
            'UserAccess'=>'Default',
            'AccessDate'=>now(),
        ]);

        return "Input successful";
    }

    public function update()
    {
        $response = DB::table('ada_district')
            ->where('DistrictCode', request()->DistrictCode)
            ->update([
                'DistrictId'=>request()->DistrictId,
                'DivisionCode'=>request()->DivisionCode,
                'DistrictNameEnglish'=>request()->DistrictNameEnglish,
                'DistrictNameBangla'=>request()->DistrictNameBangla,
                'DistrictImage1'=>'Default',
                'DistrictImage2'=>'Default',
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAccess'=>'Default',
                'AccessDate'=>now(),
            ]);
        return 'Update Successful';
    }

    public function destroy($id)
    {
        DB::table('ada_district')->where('DistrictCode', '=', $id)->delete();
        return 'Delete Successful';
    }

    public function show($id)
    {
        $division = DB::table('ada_district')->where('DistrictId','=',$id)->get();

        return $division;
    }
}
