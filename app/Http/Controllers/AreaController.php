<?php

namespace App\Http\Controllers;

use App\Converter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
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
            $fetchData = DB::table('ada_area')
                ->join('ada_division', 'ada_area.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                ->join('ada_area_type', 'ada_area.AreaTypeCode', '=', 'ada_area_type.AreaTypeCode')
                ->select('ada_area.*', 'ada_division.DivisionNameBangla','ada_district.DistrictNameBangla','ada_upazila.UpazilaNameBangla','ada_area_type.AreaTypeNameBangla');

            $filterData = $fetchData->where($condition);
            $total = $filterData->count();
            $checkFraction = $total%$dataPerPage;

            $area['count']= ceil($total/$dataPerPage);

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
            $area['tableData'] = $filterData->orderBy('AreaId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            if($filterKey->DivisionNameBangla){

                /* Return District Name List for filter Condition */
                $area['DistrictName']= DB::table('ada_area')
                    ->join('ada_division', 'ada_area.DivisionCode', '=', 'ada_division.DivisionCode')
                    ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                    ->select('ada_division.DivisionNameBangla','ada_district.DistrictNameBangla')
                    ->where('DivisionNameBangla','=',$filterKey->DivisionNameBangla)->distinct()->get(['DistrictNameBangla']);

                if($filterKey->DistrictNameBangla){
                    $area['UpazilaName']= DB::table('ada_area')
                        ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                        ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                        ->select('ada_upazila.UpazilaNameBangla','ada_district.DistrictNameBangla')
                        ->where('DistrictNameBangla','=',$filterKey->DistrictNameBangla)->distinct()->get(['UpazilaNameBangla']);
                }else{
                    $area['UpazilaName']= DB::table('ada_area')
                        ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                        ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                        ->select('ada_upazila.UpazilaNameBangla','ada_district.DistrictNameBangla')
                        ->distinct()->get(['UpazilaNameBangla']);
                }
            }else{

                /* Return District Name List */
                $area['DistrictName']= DB::table('ada_area')
                    ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                    ->select('ada_district.DistrictNameBangla')
                    ->distinct()->get(['DistrictNameBangla']);

                $area['UpazilaName']= DB::table('ada_area')
                    ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                    ->select('ada_upazila.UpazilaNameBangla')
                    ->distinct()->get(['UpazilaNameBangla']);


            }

        }else{
            $q = DB::table('ada_area');
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
            $totalData = $fetchData = DB::table('ada_area')
                ->join('ada_division', 'ada_area.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                ->join('ada_area_type', 'ada_area.AreaTypeCode', '=', 'ada_area_type.AreaTypeCode')
                ->select('ada_area.*', 'ada_division.DivisionNameBangla','ada_district.DistrictNameBangla','ada_upazila.UpazilaNameBangla','ada_area_type.AreaTypeNameBangla');

            $area['tableData'] = $totalData->orderBy('AreaId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            $area['count']= ceil($total/$dataPerPage);
            $area['DistrictName']=  DB::table('ada_area')
                ->join('ada_division', 'ada_area.DivisionCode', '=', 'ada_division.DivisionCode')
                ->join('ada_district', 'ada_area.DistrictCode', '=', 'ada_district.DistrictCode')
                ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                ->join('ada_area_type', 'ada_area.AreaTypeCode', '=', 'ada_area_type.AreaTypeCode')
                ->select('ada_area.*', 'ada_division.DivisionNameBangla','ada_district.DistrictNameBangla','ada_upazila.UpazilaNameBangla','ada_area_type.AreaTypeNameBangla')->select('DistrictNameBangla')->distinct()->get();
            $area['UpazilaName']= DB::table('ada_area')
                ->join('ada_upazila', 'ada_area.UpazilaCode', '=', 'ada_upazila.UpazilaCode')
                ->select('ada_upazila.UpazilaNameBangla')
                ->distinct()->get(['UpazilaNameBangla']);
        }



        $area['DivisionName'] = DB::table('ada_district')
            ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
            ->select('ada_division.DivisionCode', 'ada_division.DivisionNameBangla')
            ->distinct()
            ->get();

        return $area;
    }

    public function show($id)
    {
        $division = DB::table('ada_district')->where('DistrictId','=',$id)->get();

        return $division;
    }

    public function add()
    {
        $validation = $this->validation();

        $response = DB::table('ada_area')->insert([
            'AreaId'=>request()->AreaId,
            'DivisionCode'=>request()->DivisionCode,
            'DistrictCode'=>request()->DistrictCode,
            'UpazilaCode'=>request()->UpazilaCode,
            'AreaTypeCode'=>request()->AreaTypeCode,
            'AreaCode'=>request()->AreaCode,
            'Area_Dept_Code1'=>'Default',
            'Area_Dept_Code2'=>'Default',
            'AreaNameEnglish'=>request()->AreaNameEnglish,
            'AreaNameBangla'=>request()->AreaNameBangla,
            'AreaImage1'=>'Default',
            'AreaImage2'=>'Default',
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


        $response = DB::table('ada_area')
            ->where('AreaCode', request()->AreaCode)
            ->update([
                'AreaId'=>request()->AreaId,
                'AreaNameEnglish'=>request()->AreaNameEnglish,
                'AreaNameBangla'=>request()->AreaNameBangla,
                'AreaImage1'=>'Default',
                'AreaImage2'=>'Default',
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
        DB::table('ada_area')->where('AreaCode', '=', $id)->delete();
        return 'Delete Successful';
    }



    protected function validation()
    {
        return request()->validate([
            'AreaId'=>'required',
            'DivisionCode'=>'required',
            'DistrictCode'=>'required',
            'UpazilaCode'=>'required',
            'AreaTypeCode'=>'required',
            'AreaCode'=>'required',
            'AreaNameEnglish'=>'required',
            'AreaNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);
    }
}
