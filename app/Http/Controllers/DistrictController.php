<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Converter;

class DistrictController extends Controller
{
    public function index(Request $request, Converter $converter)
    {
        $dataPerPage = 10;
        $filterKey = $converter->convertJsonToColleciton($request->filterKey);
        $condition = $converter->convertToMultiArray($filterKey);
        $currentPage = $request->currentPage;

        if($condition){

            $filterData = DB::table('ada_district')
                ->join('ada_division', 'ada_district.DivisionCode', '=', 'ada_division.DivisionCode')
                ->select('ada_district.*', 'ada_division.DivisionNameBangla','ada_division.DivisionCode')->where($condition);

            $total = $filterData->count();
            $district['count']= ceil($total/$dataPerPage);
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


            $district['tableData'] = $filterData
                                ->orderBy('DistrictId','asc')
                                ->offset($firstData)
                                ->limit($dataPerPage)
                                ->get();

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
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);

        try{
            $data = base64_encode(file_get_contents( request()->file('image')->path()));

            $imgName = request()->DivisionCode.'_'. request()->DistrictNameEnglish.'.'.request()->file('image')->getClientOriginalExtension();
            request()->file('image')->storeAs('public/rsc/district',$imgName);

            $response = DB::table('ada_district')->insert([
                'DistrictId'=>request()->DistrictId,
                'DivisionCode'=>request()->DivisionCode,
                'DistrictCode'=>request()->DistrictCode,
                'DistrictNameEnglish'=>request()->DistrictNameEnglish,
                'DistrictNameBangla'=>request()->DistrictNameBangla,
                'DistrictImage1'=>$imgName,
                'DistrictImage2'=>$data,
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAccess'=>'Default',
                'AccessDate'=>now(),
            ]);

        }catch (\Exception $e){
            dd($e->getMessage());
        }



        return "Input successful";
    }

    public function update()
    {
        $entity = DB::table('ada_division')
            ->where('DivisionCode', request()->DivisionCode)->first();

        if(request()->file('image')){
            try{
                $img = $entity->DivisionImage1;

                $file = storage_path('/app/public/district/'.$img);
                if(is_file($file)){
                    unlink($file);
                }
                $data = base64_encode(file_get_contents( request()->file('image')->path()));
                $imgName = request()->DivisionCode.'_'. request()->DistrictNameEnglish.'.'.request()->file('image')->getClientOriginalExtension();
                request()->file('image')->storeAs('public/rsc/district',$imgName);

                $response = DB::table('ada_district')
                    ->where('DistrictCode', request()->DistrictCode)
                    ->update([
                        'DistrictId'=>request()->DistrictId,
                        'DivisionCode'=>request()->DivisionCode,
                        'DistrictNameEnglish'=>request()->DistrictNameEnglish,
                        'DistrictNameBangla'=>request()->DistrictNameBangla,
                        'DistrictImage1'=>$imgName,
                        'DistrictImage2'=>$data,
                        'Note'=>request()->Note,
                        'RecordStatus'=>request()->RecordStatus,
                        'RecordVersion'=>request()->RecordVersion,
                        'UserAccess'=>'Default',
                        'AccessDate'=>now(),
                    ]);

                return 'Update Successful';

            }catch (\Exception $e){
                echo $e->getMessage();
            }
        }

        $response = DB::table('ada_district')
            ->where('DistrictCode', request()->DistrictCode)
            ->update([
                'DistrictId'=>request()->DistrictId,
                'DivisionCode'=>request()->DivisionCode,
                'DistrictNameEnglish'=>request()->DistrictNameEnglish,
                'DistrictNameBangla'=>request()->DistrictNameBangla,
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
