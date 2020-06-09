<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaTypeController extends Controller
{
    public function index($currentPage)
    {
        $dataPerPage = 10;
        $total = DB::table('ada_area_type')->count();
        $checkFraction = $total % $dataPerPage;
        $division['count'] = ceil($total / $dataPerPage);

        if ($currentPage == 'lastPage') {
            $currentPage = floor($total / $dataPerPage);
            $firstData = $currentPage * $dataPerPage;
            if ($checkFraction) {
                $currentPage = floor($total/$dataPerPage);
                $firstData = $currentPage * $dataPerPage;
                $dataPerPage = $checkFraction;
            }
        } else {
            $currentPage = $currentPage - 1;
            $firstData = $currentPage * $dataPerPage;
        }

        $division['tableData'] = DB::table('ada_area_type')->orderBy('AreaTypeId', 'asc')->offset($firstData)->limit($dataPerPage)->get();

        return $division;
    }

    public function add()
    {
        $validation = request()->validate([
            'AreaTypeId' => 'required',
            'AreaTypeCode' => 'required',
            'AreaTypeNameEnglish' => 'required',
            'AreaTypeNameBangla' => 'required',
            'Note' => 'required',
            'RecordStatus' => 'required',
            'RecordVersion' => 'required',
        ]);

        $response = DB::table('ada_area_type')->insert([
            'AreaTypeId' => request()->AreaTypeId,
            'AreaTypeCode' => request()->AreaTypeCode,
            'AreaTypeNameEnglish' => request()->AreaTypeNameEnglish,
            'AreaTypeNameBangla' => request()->AreaTypeNameBangla,
            'Note' => request()->Note,
            'RecordStatus' => request()->RecordStatus,
            'RecordVersion' => request()->RecordVersion,
            'UserAccess' => 'Default',
            'AccessDate' => now(),
        ]);

        return 'Input Successful';
    }

    public function update()
    {
        $response = DB::table('ada_area_type')
            ->where('AreaTypeCode', request()->AreaTypeCode)
            ->update([
                'AreaTypeId' => request()->AreaTypeId,
                'AreaTypeNameEnglish' => request()->AreaTypeNameEnglish,
                'AreaTypeNameBangla' => request()->AreaTypeNameBangla,
                'Note' => request()->Note,
                'RecordStatus' => request()->RecordStatus,
                'RecordVersion' => request()->RecordVersion,
                'UserAccess' => 'Default',
                'AccessDate' => now(),
            ]);
        return 'Update Successful';
    }

    public function destroy($id)
    {
        DB::table('ada_area_type')->where('AreaTypeCode', '=', $id)->delete();
        return 'Delete Successful';
    }
    public function show($id)
    {
        $areaType = DB::table('ada_area_type')->where('AreaTypeCode', '=', $id)->get();

        return $areaType;
    }

}
