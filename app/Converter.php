<?php

namespace App;



class Converter
{
    public function convertJsonToColleciton($json)
    {
        $filterKey = json_decode($json);
        return $filterKey;
    }
    public function convertToMultiArray($filterKey)
    {
        foreach($filterKey as $key=>$r){
            if($r){
                $array[]= [$key,'=',$r];
            }
        }
        if(@!$array){
            $array = false;
        }
        return $array;
    }
}
