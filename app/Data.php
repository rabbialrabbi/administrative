<?php

namespace App;



use Illuminate\Support\Facades\DB;

class Data
{
    public function convertColumnName($name)
    {
        switch ($name){
            case 'District':
                return 'DivisionCode';
                break;
            case 'Upazila':
                return 'DistrictCode';
                break;
            case 'Area':
                return 'UpazilaCode';
                break;
            default:
                return "Error in Switch Statement";
        }
    }

    public function dbTableLoader($tableName,$tableHeader,$tableData)
    {
        foreach ($tableData as $info ){
            $e[] = array_combine($tableHeader,$info);
        }

        foreach ($e as $i){
            DB::table($tableName)->insert($i);
        }
    }
}
