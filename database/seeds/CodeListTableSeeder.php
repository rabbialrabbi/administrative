<?php

use App\Data;
use Illuminate\Database\Seeder;

class CodeListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['CodeListId','CodeListCode','CodeListNameEnglish','CodeListNameBangla','Note','RecordStatus','RecordVersion','UserAccess','AccessDate'];
        $info = [
            [ 1,'1','Privilege'						,'অনুমতি'					,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 2,'2','Record Status'					,'রেকর্ড স্ট্যাটাস'			,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 3,'3','Record Version'				,'রেকর্ড  ভার্সন'				,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 4,'4','Mobile App'					,'মোবাইল অ্যাপ'			,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 5,'5','Paurasava Category'			,'পৌরসভা কেটাগরী'			,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 6,'6','Recipient Type'				,'পৌরসভা কেটাগরী'			,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 7,'7','Gateway'						,'গেটওয়ে'					,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 8,'8','Mobile App - Agro Officer'		,'মোবাইল অ্যাপ - এসএসএও'	,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 9,'9','Mobile App - Farmer'			,'মোবাইল অ্যাপ - কৃষক'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 10,'10','Advisory Status'				,'অ্যাডভাইসরি স্ট্যাটাস'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 11,'11','Venu'							,'অনুষ্ঠান স্থল'				,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 12,'12','Determine the applicability of weather advice'			,'আবহাওয়া বিষয়ক প্রাপ্ত পরামর্শগুলোর উপযোগিতা নির্ধারণ করুন'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 13,'13','How have you benefited from using this advice?'			,'আপনি কিভাবে এই পরামর্শটি ব্যবহার করে উপকৃত হয়েছেন ?'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 14,'14','A'				,'এ'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 15,'15','B'				,'বি'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 16,'16','C'				,'সি'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 17,'17','D'				,'ডি'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 18,'18','E'				,'ই'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 19,'19','F'				,'এফ'		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020'],
		[ 20,'20','G'				,'জি '		,'NOTE','ACTIVE','DRAFT','01-10-01-001','01/04/2020']
        ];

        $data->dbTableLoader('ada_codelist',$header,$info);
    }
}
