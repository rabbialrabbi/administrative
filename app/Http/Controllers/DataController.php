<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function divisionList(Request $request)
    {
        $list = DB::table('ada_division')
            ->select('DivisionCode','DivisionNameBangla')
            ->get();
        return $list;
   }


}
