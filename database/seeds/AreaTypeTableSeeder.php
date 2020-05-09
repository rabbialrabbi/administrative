<?php

use App\Data;
use Illuminate\Database\Seeder;

class AreaTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['AreaTypeId','AreaTypeCode','AreaTypeNameEnglish','AreaTypeNameBangla','Note'
            ,'RecordStatus','RecordVersion','UserAccess','AccessDate'];
        $info = [
            [ 1,'10','Paurashava - Urban'		,'পৌরসভা / শহুরে'			,'Note' ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 2,'20','Rural'					,'গ্রামীণ'					,'Note'	 ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 3,'30','City Corporation'			,'সিটি কর্পোরেশন'			,'Note' ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 4,'40','Upazila Parishad'			,'উপজেলা পরিষদ '			,'Note' ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 5,'50','Cantonment'				,'সেনানিবাস'				,'Note' ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 6,'60','Depopulated'				,'মানবহীন'					,'Note' ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 7,'70','Others'					,' অন্যান্য '				,'Note' ,'Active','Draft','01-10-01-001','02/04/2020']
        ];

        $data->dbTableLoader('ada_area_type',$header,$info);
    }
}
