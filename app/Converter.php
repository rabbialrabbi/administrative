<?php

namespace App;



class Converter
{
   public $msg = 'Test Successful';
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
        if(empty($array)){
            $array = false;
        }
        return $array;
    }
    public function convertJsonToArray($data)
    {
        $filterKey = $this->convertJsonToColleciton($data);
        foreach($filterKey as $r){

                $array[]= $r;

        }
        if(empty($array)){
            $array = false;
        }
        return $array;
    }
    public function convertJsonToMultiArray($json)
    {
       $collectionData =  $this->convertJsonToColleciton($json);

        return $this->convertToMultiArray($collectionData);
    }
    public function test(){
        return 'WOrking';
    }
}
