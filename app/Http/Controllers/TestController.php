<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->addMonths(5)->subMonths(2);
        echo $date;
    }
}
