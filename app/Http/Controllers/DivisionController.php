<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    public function index()
    {
        $division = DB::table('ada_division')->get();
        return $division;
    }

    public function add()
    {
        $validation = request()->validate([
            'DivisionId'=>'required',
            'DivisionCode'=>'required',
            'DivisionNameEnglish'=>'required',
            'DivisionNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
        ]);

     $response = DB::table('ada_division')->insert([
                'DivisionId'=>request()->DivisionId,
                'DivisionCode'=>request()->DivisionCode,
                'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                'DivisionNameBangla'=>request()->DivisionNameBangla,
                'DivisionImage1'=>'Default',
                'DivisionImage2'=>'Default',
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAccess'=>'Default',
                'AccessDate'=>now(),
            ]);

     return 'Input Successful';
    }

    public function edit()
    {
        $response = DB::table('ada_division')
            ->where('DivisionCode', request()->DivisionCode)
            ->update([
                'DivisionId'=>request()->DivisionId,
                'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                'DivisionNameBangla'=>request()->DivisionNameBangla,
                'DivisionImage1'=>'Default',
                'DivisionImage2'=>'Default',
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
        DB::table('ada_division')->where('DivisionCode', '=', $id)->delete();
        return 'Delete Successful';
    }

    public function show($id)
    {
        $division = DB::table('ada_division')->where('DivisionCode','=',$id)->get();

        return $division;
    }
}
