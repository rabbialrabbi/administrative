<?php

namespace App\Http\Controllers;

use App\Converter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpazilaController extends Controller
{
    /**
     * Receive Current page Number, DivisionNameBangla, DistrictNameBangla
     * Return 10 of Table Data according to filter, Count, Division Name list, District Name list
     * @param Request $request
     * @param Converter $converter
     * @return mixed
     */
    public function index(Request $request, Converter $converter)
    {

        $dataPerPage = 10;
        $filterKey = $converter->convertJsonToColleciton($request->filterKey);
        $condition = $converter->convertToMultiArray($filterKey);

        $currentPage = $request->currentPage;

        if($condition){
                $fetchData = DB::table('ada_upazila')
                    ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                    ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                    ->select('ada_upazila.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode','ada_district.DistrictNameBangla','ada_district.DistrictCode');

                $filterData = $fetchData->where($condition);
                $total = $filterData->count();
                $checkFraction = $total%$dataPerPage;

                $upazila['count']= ceil($total/$dataPerPage);

            if($currentPage == 'lastPage'){
                $currentPage = floor($total/$dataPerPage);
                $firstData = $currentPage * $dataPerPage;
                if($checkFraction){
                    $dataPerPage = $checkFraction;
                }
            }else{
                $currentPage = $currentPage-1;
                $firstData = $currentPage * $dataPerPage;
            }

            /* Return Count for pagination With filter Condition */
                $upazila['tableData'] = $filterData->orderBy('UpazilaId','asc')
                    ->offset($firstData)
                    ->limit($dataPerPage)
                    ->get();

                if($filterKey->DivisionNameBangla){

                  /* Return District Name List for filter Condition */
                    $upazila['DistrictName']= DB::table('ada_upazila')
                        ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                        ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                        ->select('ada_division.DivisionNameBangla','ada_district.DistrictNameBangla')
                        ->where('DivisionNameBangla','=',$filterKey->DivisionNameBangla)->distinct()->get(['DistrictNameBangla']);
                }else{
                    /* Return District Name List */
                    $upazila['DistrictName']= DB::table('ada_upazila')
                        ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                        ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                        ->select('ada_division.DivisionNameBangla','ada_district.DistrictNameBangla')
                        ->distinct()->get(['DistrictNameBangla']);
                }

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
                        $currentPage = $currentPage-1;
                         $firstData = $currentPage * $dataPerPage;
                        }
                $totalData = DB::table('ada_upazila')
                    ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                    ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                    ->select('ada_upazila.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode','ada_district.DistrictNameBangla','ada_district.DistrictCode');

            $upazila['tableData'] = $totalData->orderBy('UpazilaId','asc')
                    ->offset($firstData)
                    ->limit($dataPerPage)
                    ->get();

            $upazila['count']= ceil($total/$dataPerPage);
            $upazila['DistrictName']= DB::table('ada_upazila')
                ->join('ada_division', 'ada_upazila.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_upazila.DistrictCode', '=', 'ada_district.DistrictCode')
                ->select('ada_upazila.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode','ada_district.DistrictNameBangla','ada_district.DistrictCode')->distinct()->get();
        }

        $upazila['DivisionName'] = DB::table('ada_district')
            ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
            ->select('ada_division.DivisionCode', 'ada_division.DivisionNameBangla')
            ->distinct()
            ->get();

        return $upazila;
    }

    public function show($id)
    {
        $division = DB::table('ada_district')->where('DistrictId','=',$id)->get();

        return $division;
    }

    public function add()
    {
        $validation = $this->validation();

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
        $validation = $this->validation();


        $response = DB::table('ada_upazila')
            ->where('UpazilaCode', request()->UpazilaCode)
            ->update([
                'UpazilaId'=>request()->UpazilaId,
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



    protected function validation()
    {
        return request()->validate([
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
    }
}
