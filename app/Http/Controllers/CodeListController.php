<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CodeListController extends Controller
{
    public function index($currentPage)
    {
        $dataPerPage = 10;
        $total = DB::table('ada_codelist')->count();
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

        $division['tableData'] = DB::table('ada_codelist')->orderBy('CodeListId','asc')->offset($firstData)->limit($dataPerPage)->get();
        $division['count']= ceil($total/$dataPerPage);
        return $division;
    }

    public function add()
    {
        $validation = request()->validate([
            'CodeListId'=>'required',
            'CodeListCode'=>'required',
            'CodeListNameEnglish'=>'required',
            'CodeListNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);

        $response = DB::table('ada_codelist')->insert([
            'CodeListId'=>request()->CodeListId,
            'CodeListCode'=>request()->CodeListCode,
            'CodeListNameEnglish'=>request()->CodeListNameEnglish,
            'CodeListNameBangla'=>request()->CodeListNameBangla,
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
        $response = DB::table('ada_codelist')
            ->where('CodeListCode', request()->CodeListCode)
            ->update([
                'CodeListId'=>request()->CodeListId,
                'CodeListNameEnglish'=>request()->CodeListNameEnglish,
                'CodeListNameBangla'=>request()->CodeListNameBangla,
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
        DB::table('ada_codelist')->where('CodelistCode', '=', $id)->delete();
        return 'Delete Successful';
    }

    public function show($id)
    {
        $division = DB::table('ada_codelist')->where('CodeListCode','=',$id)->get();

        return $division;
    }
}
