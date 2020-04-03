<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpazilaController extends Controller
{
    public function index(Request $request)
    {

        $dataPerPage = 10;
        $filterKey = json_decode($request->filterKey);
        $currentPage = $request->currentPage;

        if($filterKey->DivisionNameBangla){
            foreach($filterKey as $key=>$r){
                if($r){
                    $where[]= [$key,'=',$r];
                }
            }

            $filterData = DB::table('ada_upazila')
                ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                ->select('ada_upazila.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode','ada_district.DistrictNameBangla','ada_district.DistrictCode')->where($where);
            $total = $filterData->count();
            $currentPage = $request->currentPage  ;
            $firstData = $currentPage * $dataPerPage;
            $district['tableData'] = $filterData
                ->orderBy('UpazilaId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            $district['count']= ceil($total/$dataPerPage);

        }else{
            $q = DB::table('ada_upazila');
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
            $district['tableData'] = DB::table('ada_upazila')
                ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                ->select('ada_upazila.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode','ada_district.DistrictNameBangla','ada_district.DistrictCode')
                ->orderBy('DistrictId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            $district['count']= ceil($total/$dataPerPage);
        }

        $district['DivisionName'] = DB::table('ada_district')
            ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
            ->select('ada_district.*', 'ada_division.DivisionNameBangla')
            ->groupBy('DivisionNameBangla')
            ->pluck('DivisionNameBangla');

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
            'UpazilaId'=>'required',
            'DivisionCode'=>'required',
            'DistrictCode'=>'required',
            'UpazilaCode'=>'required',
            'UpazilaNameEnglish'=>'required',
            'UpazilaNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);

        $response = DB::table('ada_upazila')->insert([
            'UpazilaId'=>request()->UpazilaId,
            'DivisionCode'=>request()->DivisionCode,
            'DistrictCode'=>request()->DistrictCode,
            'UpazilaCode'=>request()->UpazilaCode,
            'UpazilaNameEnglish'=>request()->UpazilaNameEnglish,
            'UpazilaNameBangla'=>request()->UpazilaNameBangla,
            'UpazilaImage1'=>'Default',
            'UpazilaImage2'=>'Default',
            'Note'=>request()->Note,
            'RecordStatus'=>request()->RecordStatus,
            'RecordVersion'=>request()->RecordVersion,
            'UserAccess'=>'Default',
            'AccessDate'=>now(),
        ]);


        return 'Input Successful';
    }

    public function update()
    {
        $validation = request()->validate([
            'UpazilaId'=>'required',
            'DivisionCode'=>'required',
            'DistrictCode'=>'required',
            'UpazilaCode'=>'required',
            'UpazilaNameEnglish'=>'required',
            'UpazilaNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);

        $response = DB::table('ada_upazila
        ')
            ->where('UpazilaCode', request()->UpazilaCode)
            ->update([
                'UpazilaId'=>request()->UpazilaId,
                'DivisionCode'=>request()->DivisionCode,
                'DistrictCode'=>request()->DistrictCode,
                'UpazilaNameEnglish'=>request()->UpazilaNameEnglish,
                'UpazilaNameBangla'=>request()->UpazilaNameBangla,
                'UpazilaImage1'=>'Default',
                'UpazilaImage2'=>'Default',
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
        DB::table('ada_upazila')->where('UpazilaCode', '=', $id)->delete();
        return 'Delete Successful';
    }

    public function show($id)
    {
        $division = DB::table('ada_district')->where('DistrictId','=',$id)->get();

        return $division;
    }
}
