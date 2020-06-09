<?php

namespace App\Http\Controllers;

use App\Converter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListItemController extends Controller
{
    public function index(Request $request, Converter $converter)
    {
        $dataPerPage = 10;
        $filterKey = $converter->convertJsonToColleciton($request->filterKey);
        $condition = $converter->convertToMultiArray($filterKey);
        $currentPage = $request->currentPage;

        if($condition){
            $filterData = DB::table('ada_listitem')
                ->join('ada_codelist', 'ada_listitem.CodeListCode', '=', 'ada_codelist.CodeListCode')
                ->select('ada_listitem.*', 'ada_codelist.CodeListNameBangla')->where($condition);

            $total = $filterData->count();
            $division['count']= ceil($total/$dataPerPage);
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
                ->orderBy('ListItemId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

        }else{
            $q = DB::table('ada_listitem');
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

            $district['tableData'] = DB::table('ada_listitem')
                ->join('ada_codelist', 'ada_listitem.CodeListCode', '=', 'ada_codelist.CodeListCode')
                ->select('ada_listitem.*', 'ada_codelist.CodeListNameBangla')
                ->orderBy('ListItemId','asc')
                ->offset($firstData)
                ->limit($dataPerPage)
                ->get();

            $district['count']= ceil($total/$dataPerPage);

        }

        $district['CodeListName'] = DB::table('ada_codelist')
            ->select('CodeListCode','CodeListNameBangla')
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
            'ListItemId'=>'required',
            'CodeListCode'=>'required',
            'ListItemCode'=>'required',
            'ListItemNameEnglish'=>'required',
            'ListItemNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
            'UserAccess'=>'Default',
            'AccessDate'=>now(),
        ]);

        $response = DB::table('ada_listitem')->insert([
            'ListItemId'=>request()->ListItemId,
            'CodeListCode'=>request()->CodeListCode,
            'ListItemCode'=>request()->ListItemCode,
            'ListItemNameEnglish'=>request()->ListItemNameEnglish,
            'ListItemNameBangla'=>request()->ListItemNameBangla,
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
        $response = DB::table('ada_listitem')
            ->where('ListItemCode', request()->ListItemCode)
            ->update([
                'ListItemId'=>request()->ListItemId,
                'CodeListCode'=>request()->CodeListCode,
                'ListItemNameEnglish'=>request()->ListItemNameEnglish,
                'ListItemNameBangla'=>request()->ListItemNameBangla,
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
        DB::table('ada_listitem')->where('ListItemCode', '=', $id)->delete();
        return 'Delete Successful';
    }

}
