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

    public function show($id)
    {
        $division = DB::table('ada_division')->where('DivisionCode','=',$id)->get();

        return $division;
    }
}
