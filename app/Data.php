<?php

namespace App;



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
}
