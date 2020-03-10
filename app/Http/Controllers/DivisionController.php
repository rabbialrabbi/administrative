<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivisionController extends Controller
{
    public function index()
    {
        $division = DB::table('ada_division')->get();
        return view('page.adminPage', [
            'division' => $division
        ]);
    }

    public function add()
    {
        return 'Hello world';
    }

    public function edit($id)
    {

        $response = DB::table('ada_division')
            ->where('DivisionCode', $id)
            ->update([
                'DivisionId'=>request()->DivisionId,
                'DivisionCode'=>request()->DivisionCode,
                'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                'DivisionNameBangla'=>request()->DivisionNameBangla,
                'DivisionImage1'=>'Default',
                'DivisionImage2'=>'Default',
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAcess'=>'Default',
                'AccessDate'=>now(),
            ]);
        return $response;
    }

    public function show($id)
    {
        $division = DB::table('ada_division')->where('DivisionCode','=',$id)->get();

        return $division;
    }
}
